<?php

namespace App\Custom;

use Error;
use Exception;

// PURE PHP
class CardGame
{
    private $no_players;
    public $deck = array(
        'D-A', 'D-2', 'D-3', 'D-4', 'D-5', 'D-6', 'D-7', 'D-8', 'D-9', 'D-10', 'D-J', 'D-Q', 'D-K',
        'H-A', 'H-2', 'H-3', 'H-4', 'H-5', 'H-6', 'H-7', 'H-8', 'H-9', 'H-10', 'H-J', 'H-Q', 'H-K',
        'C-A', 'C-2', 'C-3', 'C-4', 'C-5', 'C-6', 'C-7', 'C-8', 'C-9', 'C-10', 'C-J', 'C-Q', 'C-K',
        'S-A', 'S-2', 'S-3', 'S-4', 'S-5', 'S-6', 'S-7', 'S-8', 'S-9', 'S-10', 'S-J', 'S-Q', 'S-K'
    );

    /**
     * Initializes number of players. No way to shuffle without running this function (for now)
     *
     * @return bool
     */
    public function start($no_players)
    {
        if ($no_players <= 0) {
            // throw new Error("Not enough players. Please input at lease 1 player.", 500);
            throw new Error("“Input value does not exist or value is invalid", 500);

        }

        if (!is_int($no_players) || !is_numeric($no_players) ) {
            // throw new Error("Please enter a valid number (no decimals).", 500);
            throw new Error("“Input value does not exist or value is invalid", 500);
        }

        $this->no_players = $no_players;
    }

    public function shuffle()
    {
        $this->check_players();

        shuffle($this->deck); // built in function
        return $this->deck;
    }

    public function shuffle_manual() // code snippet
    {
        $this->check_players();

        $deck = $this->deck; // create copy
        for($x = 0; $x<count($deck); $x++){
            $temp = $deck[$x];
            $rand = mt_rand(0, count($deck)-1);
            $deck[$x] = $deck[$rand];
            $deck[$rand] = $temp;
        }
        $this->deck = $deck; // cast original

        return $this->deck;
    }

    /**
     * Returns deck in format of string, add empty values to those who din't get any cards
     * due to lack of cards
     * @return string
     */
    public function distribute_cards()
    {
        $this->check_players();

        $maxCards = 52;
        $shortage_cards = $maxCards - $this->no_players;

        $d_cards = "";
        for ($i=0; $i < $maxCards; $i++) {
            if ($i != 0) { // append comma to n(n) other than n(1)
                $d_cards .= ",";
            }

            $d_cards .= $this->deck[$i];
        }

        // If shortage - handle remaining players
        if ($shortage_cards < 0) {
            for ($i=0; $i < abs($shortage_cards) ; $i++) {
                $d_cards .= ",";
            }
        }

        return $d_cards;
    }

    private function check_players()
    {
        if ($this->no_players <= 0) {
            // throw new Error("Not enough players. Please input at lease 1 player.", 500);
            throw new Error("“Irregularity occurred”", 500);
        }
    }
}