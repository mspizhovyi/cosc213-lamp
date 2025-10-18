# Lab 6 — PHP Expressions and Control Flow

This lab demonstrates PHP fundamentals: **expressions, branching, loops, form handling, and a simple toolkit web page**.  
It highlights both **CLI execution** and **browser-based interaction**.

---

## How to Run

### Prerequisites
- PHP 8+ installed (`php -v` to verify)

### Start Built-in Server (for browser tests)
From inside `lab4/`:
```bash
php -S localhost:8000
```

Then open in your browser:
- [http://localhost:8000/01_expressions.php](http://localhost:8000/01_expressions.php)  
- [http://localhost:8000/02_branching.php?role=editor&day=Sun&code=404](http://localhost:8000/02_branching.php?role=editor&day=Sun&code=404)  
- [http://localhost:8000/03_loops.php?n=4](http://localhost:8000/03_loops.php?n=4)  
- [http://localhost:8000/04_grade_form/](http://localhost:8000/04_grade_form/)  
- [http://localhost:8000/05_toolkit/](http://localhost:8000/05_toolkit/)

---

## File Descriptions

### 01_expressions.php
Demonstrates arithmetic, precedence, string interpolation vs concatenation, logical operators, ternary, and null-coalescing.  
Also shows PHP’s type coercion (e.g. `"5cats" + 1 = 6`).  
Accepts input via query string (`?score=50`) for pass/fail output.

---

### 02_branching.php
Covers branching with **if/elseif/else**, **switch**, and **match** (PHP 8+).  
Outputs role-based greetings, weekend vs weekday messages, and HTTP status code messages.  
Includes optional **multi-language output (English/French)**.

---

### 03_loops.php
Demonstrates loop constructs:
- `for` loop (count up to N)  
- `while` loop (countdown)  
- `foreach` loop (iterate array)  

Supports `?n=` parameter and multi-language labels (`?lang=fr`).

---

### 04_grade_form/index.php
A web form that takes a **student’s name and score** via POST and outputs **Pass/Fail**.  
Includes a language selector (English/French).  
Demonstrates HTML + PHP form handling.

---

### 05_toolkit/index.php
A mini **multi-tool page** where the user can:
- Calculate string length  
- Reverse a string  
- Convert to UPPERCASE or lowercase  
- Square a number  

Supports English/French UI messages. Demonstrates switchable logic and reusable form.

---

## Notes on `==` vs `===`

- `==` (loose equality): compares values **after type coercion**  
  - `"0" == false` → true  
  - `"5cats" == 5` → true  

- `===` (strict equality): compares **type and value** exactly  
  - `"0" === false` → false  
  - `"5cats" === 5` → false  

**Best practice:** Use `===` for predictability, unless coercion is intended.
