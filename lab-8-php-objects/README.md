

# PHP Objects Lab

**Student Name:** Maksym Spizhovyi  
**Student ID:** 300 362 869  


## What I Learned About Classes and Objects

I learned that **classes** are blueprints that define the properties and behaviors (methods) of objects.  
**Objects** are instances of those classes that store specific data.  
Using classes helps organize code, make it reusable, and represent real-world entities more clearly.

---

## Examples of When to Use Inheritance, Constructors, and Static Properties

- **Inheritance:**  
  Use when a new class shares common features with another class but also needs its own unique behavior.  
  *Example:* `Textbook` extends `Book` to add a `subject` property while keeping the same title and author logic.

- **Constructors:**  
  Use when you want to automatically set up object properties when the object is created.  
  *Example:* The `__construct($title, $author)` method initializes a book’s data immediately after creation.

- **Static Properties:**  
  Use when a value should be shared across all objects of a class instead of being unique per object.  
  *Example:* A static `$count` variable tracks how many `Book` objects have been created in total.
