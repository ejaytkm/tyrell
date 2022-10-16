# QUESTION 1
1. HTTP Request: `curl -X POST http://localhost:8000/api/cardgame/simulate -H "Content-Type: application/json" -d '{"noPlayers": 2}'`
2. Frontend => navigate to localhost:8000
3. Direct scripting. On root folder, call cardgame_simulate.php

# QUESTION 2
1. Create optimal indexes for id type of columns
2. Change LIKE wildcard search to prefix to "Wildcard%" instaed of "%Wildcard%"
3. SELECT TOP instead of OFFSET
4. Avoid OFFSET in LIMIT Clause - unecessary offset