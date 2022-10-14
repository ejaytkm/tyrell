# Tyrell
## Requirements
- Minimum Docker Version 4.5.1
- 8MB RAM (4MB for docker)

## Instructions
Navigate to root folder, run command `docker-compose up -d`. This will install all necessary dependencies for application to compile and work

Rename `.env.example` to `.env` in `projects/cardgame` - A server error code 500 will appear if failed to do so.

An error will occur. Cliking the `Generate app key` button to get started. This will autofill `APP_KEY=` in the `.env` file in the root of the laravel project.
Example error as followed:
`Illuminate\Encryption\MissingAppKeyException` `No application encryption key has been specified.`

We will be using laravel,docker and mysql to solve both question (1) and (2)

## Question 1 - Simulate Card Hand Out
Purpose: Total 52 cards containing 1-13 of each Spade(S), Heart(H), Diamond(D), Club(C) will be given to n people randomly.
Language to be used : PHP / Javascript / jQuery / ReactJS

### Input
a. Number of people (numerical value)
b. It does not matter how cards are given if recompile of program arguments, parameter,
keyboard input and so on are not necessary.
c. In case input value is nil or value is invalid then the error message of “Input value does
not exist or value is invalid” must be displayed and the process must be terminated.
d. Any number less than 0 is an invalid value.
e. Greater than 53 are normal values and cards must be distributed to a number of people
instead of having it as an error.

### Output
a. Spade = S, Heart = H, Diamond = D, Club = C
b. Card 2 to 9 are, as it is, 1=A,10=X,11=J,12=Q,13=K
c. The card distributed to the first person on the first row will be separated (comma),
d. The card distributed to the second person on the second row will be separated(comma),
e. [LF] is not allowed. Example:
S-A,H-X,.....
D-3,H-J,.....


## Question 2 - Manual SQL Query Optimization


## TODO
1. Write composer install command on docker package
2. ~~Return cards in a form of a string~~
3. Build frontend for card game using react
4. WIP: Answer Questions 2.
5. Write php script to call php class

Questions 1)
roughly 4hours

Question 2)
roughly 4hours


