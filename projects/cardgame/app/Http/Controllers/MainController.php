<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

use App\Custom\CardGame; // import CardGame class for generating a new card game

class MainController extends Controller
{
    /**
     * Simulates card game via api
     *
     * @param noPlayers
     * @return []string{} // returns an arrayo fstrings
     */
    public function simulate(Request $request)
    {
        try {
            $content  = Request::all();
            $players = $content["noPlayers"];

            $new_game = new CardGame();
            $new_game->start($players);
            $new_game->shuffle_manual();

            return response()->json([
                "totalPlayers" => $players,
                "cards" => $new_game->distribute_cards(),
                // "deck" => $new_game->deck,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "message" => $th->getMessage(),
                "code" => $th->getCode()
            ], 500);
        }
    }
}