# Lab 4 — PHP Expressions and Control Flow

This lab explores PHP **expressions**, **branching**, **loops**, simple **form handling**, and a small multi-view **“Student Toolkit”** page.

---

## How to Run

### Prerequisites
- PHP 8+ installed (`php -v` to verify)

### Project Structure
lab4/
  01_expressions.php
  02_branching.php
  03_loops.php
  04_grade_form/
    index.php
  05_toolkit/
    index.php
  README.md

### Run CLI Scripts
From inside `lab4/`:
php 01_expressions.php
php 02_branching.php
php 03_loops.php

### Run Web Pages (Built-in Dev Server)
From inside `lab4/`:
php -S localhost:8000

Then open in your browser:
- http://localhost:8000/04_grade_form/
- http://localhost:8000/05_toolkit/

---

## Sample Inputs / Outputs

### 01_expressions.php
Command:
php 01_expressions.php

Example Output:
sum=13 prod=30 a=15
14
20
Hello Ada
Hello Ada
bool(true)
bool(false)
Entry allowed
Result: Fail/NoScore
"5cats" + 1 = 6

---

### 02_branching.php
How to run (via web server):
php -S localhost:8000
# visit: http://localhost:8000/02_branching.php?role=editor&day=Sun&code=404

Example Output:
Welcome, editor
Enjoy your weekend!
404 => Not Found

---

### 03_loops.php
Command:
php 03_loops.php

Example Output (partial):
7 14 21 28 35 42 49 56 63 70
First n where sum>100 is 15, sum=120
do...while ran 1 time(s)
Subtotal (skip < 1): 15.7
1
2
Fizz
4
Buzz


---

### 04_grade_form/index.php
How to run:
php -S localhost:8000
# visit: http://localhost:8000/04_grade_form/?score=95

Examples:
?score=95  -> "Your grade is A."
?score=-1  -> "Invalid score. Please enter 0–100."
(no score) -> Prompts to enter one.

---

### 05_toolkit/index.php
How to run:
php -S localhost:8000
# visit: http://localhost:8000/05_toolkit/

Views:
- ?view=times  -> Shows current time + next 5 minutes.
- ?view=table  -> Renders a 10×10 multiplication table.
- ?view=stats&nums=1,2,3,10,-4  -> Example Output:
Count: 5
Sum: 12
Min: -4
Max: 10
Average: 2.40

---

## Notes on `==` vs `===`

- `==` (loose equality): compares values **after type coercion**.
  "0" == false   -> true
  5 == "5"       -> true
  "5cats" == 5   -> true

- `===` (strict equality): compares **value and type**.
  "0" === false  -> false
  5 === "5"      -> false
  "5cats" === 5  -> false

**Recommendation:** Always prefer `===` for predictability. Use `==` only when type coercion is intentional.
