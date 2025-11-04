# 🍕 Lab 9 — Food Ordering Basket in PHP

**Student Name:** Maksym Spizhovyi  
**Student ID:** 300 362 869  

This project implements a simple food ordering basket using PHP sessions.  
The base files were provided by the instructor, but I built, ran, and tested each part locally to understand how it works.

I tested all actions:
- Adding items to the basket  
- Updating and removing items  
- Clearing the basket  
- Simulated checkout  

Everything worked as expected — totals updated correctly and sessions stored data properly between pages.

### 🧠 What I Learned
- How PHP sessions can keep user data across multiple pages  
- How to handle form data safely with POST and `filter_input()`  
- Why prices should be looked up on the server instead of sent from the client  
- How to organize a small PHP app into multiple files that share session data