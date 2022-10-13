# Tyrell
## Requirements
- Minimum Docker Version 4.5.1

## Instructions
Navigate to root folder, run command `docker-compose up -d`
This will install all necessary dependencies for application to compile and work

Rename `.env.example` to `.env` in `projects/cardgame`

An error will occur. Don't panic, just click the `Generate app key` button to get started. Error as followed:
- `Illuminate\Encryption\MissingAppKeyException`
- `No application encryption key has been specified.`

After generating, notice APP_KEY has been autofill in .env folder of projects/cardgame

You're ready to simulate card game!
-

## Explanations
1. I used laravel (php framework) + React to showcase my programming abilities.
2.

## TODO
1. Write composer install command on docker package
2. Do questions One on API method
