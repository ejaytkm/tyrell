# QUESTION 1 (time taken - 3hours)
1. HTTP Request: `curl -X POST http://localhost:8000/api/cardgame/simulate -H "Content-Type: application/json" -d '{"noPlayers": 20}'`
2. Frontend => navigate to localhost:8000

# QUESTION 2 (time taken - 5hours)
1. Change LIKE wildcard search to prefix from "%キャビンアテンダント%" to "キャビンアテンダント%"
2. Remove OFFSET in LIMIT Clause - unecessary offset
3. Remove multiple LEFT JOINS to the same table `affiliate` and join together with OR statement instead.