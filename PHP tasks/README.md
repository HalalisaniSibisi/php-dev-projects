# High School Tours Management and Other Programming Assignments

This repository contains multiple programming assignments focused on PHP web development and related programming concepts, completed as part of an academic curriculum.

---

## Table of Contents

- [Project Overview](#project-overview)
- [Assignment Tasks](#assignment-tasks)
  - [Task 1: Customer Feedback Form](#task-1-customer-feedback-form)
  - [Task 2: Numeric and Grade Calculations](#task-2-numeric-and-grade-calculations)
  - [Task 3: String, Date, and Array Operations](#task-3-string-date-and-array-operations)
  - [Task 4: School Tours Management System](#task-4-school-tours-management-system)
- [Technologies Used](#technologies-used)
- [Setup and Usage](#setup-and-usage)
- [Project Structure](#project-structure)
- [Contributing](#contributing)
- [Contact](#contact)

---

## Project Overview

This project demonstrates several web programming assignments focusing on PHP, HTML forms, SQL databases, and basic programming structures. The highlight is a School Tours Management System allowing management of learners and their attendance on grade-specific tours.

---

## Assignment Tasks

### Task 1: Customer Feedback Form

- A form to collect feedback for franchise business branches.
- Features:
  - Dropdown with 5 distinct shop names.
  - Customer name and email fields.
  - Radio buttons for rating (1 to 5).
  - Optional justification textarea.
  - Uses GET method for data submission.
- Validates required fields; displays entered data upon successful submission.

### Task 2: Numeric and Grade Calculations

- (a) Input a positive integer `n`, display numbers 1 to `n`, sum and average.
- (b) Function calculating final mark based on exam and year marks using ternary operator.
- (c) Form to select a SADC country and display its capital using a switch statement.

### Task 3: String, Date, and Array Operations

- Demonstrates PHP functions: `strrev()`, `strtolower()`, `strlen()`, `explode()`, `str_repeat()` with custom examples.
- Uses `DateTime` class to show year, month, day, week number, and days to next Christmas.
- Creates and sorts an array of SADC countries; displays in descending order.
- Replaces switch statement with associative array for country-capital lookup.

### Task 4: School Tours Management System

- A web application using PHP and MySQL for:
  - Managing learners: Add, delete, and view pupils (name, surname, grade).
  - Managing tours: Add, delete, and view tours with details like title, description, dates, and cost.
  - Registration: Register learners for grade-specific tours only; deregistration capability.
  - Summary reports showing tours, registration counts, revenue, and learner details.
- Application follows Model-View-Controller (MVC) principles.
- Ensures usability, validation, and data integrity.
- Populated with five or more records per entity.

---

## Technologies Used

- PHP 7+
- MySQL / MariaDB
- HTML5 & CSS3
- PDO for secure database interaction

---

## Setup and Usage

1. Clone the repository.
2. Import the provided SQL scripts to create and populate the database.
3. Configure your web server (e.g., Apache) to serve the PHP files.
4. Update database credentials in the PHP configuration files.
5. Open the application in a browser to manage learners, tours, and registrations.
6. Execute each task’s script standalone for review.

---

## Project Structure

- `/task1_feedback_form.php` – Customer feedback form and processing.
- `/task2_numeric_grade.php` – Numeric calculations and grade computation.
- `/task3_string_date_array.php` – Demonstrations of string, date, and array functions.
- `/task4_tours_management.php` – Full school tours management system.
- `/db/` – SQL scripts for database schema and sample data.
- `/assets/` – CSS stylesheets and resources.

---

## Contributing

Contributions or suggestions are welcome through pull requests or issues.

---

## Contact

For questions or feedback, contact [Naluthabo Sibisi] at [sibisihalalisani203@gmail.com].

---

*This project was developed as part of a programming course module to demonstrate practical PHP and database application skills.*
