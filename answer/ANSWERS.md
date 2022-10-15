# QUESTION 1
1. HTTP Request: `curl -X POST http://localhost:8000/api/cardgame/simulate -H "Content-Type: application/json" -d '{"noPlayers": 2}'`
2. Frontend => navigate to localhost:8000
3. Direct scripting. On root folder, call cardgame_simulate.php

# QUESTION 2
B) SQL Improvement Logic Test
1. Purpose: These are a SQL query that produces a search result. The query produces results in
approximately 8 seconds.
2. Task: Please suggest what improvements should be done to the query in order to improve its
performance.
3. Remarks :
  a. Please submit your work in Github repo.
  b. The answer can be in the form of:
    i. Written explanation of the logical improvement; OR
    ii. Written SQL with the improved query; OR
    iii. If you set up a virtual environment in A) 7(b)(ii), please create the MySQL
  database and make the improvement.
  c. Please create the above and reply to me with the total time you have spent on.
  d. Reproduction / Reprint is prohibited.


1) Create optimal indexes for id type of columns
2) Change LIKE wildcard search to prefix to "Wildcard%" instaed of "%Wildcard%"
3) SELECT TOP instead of OFFSET

3) Avoid OFFSET in LIMIT Clause

-
- unecessary offset