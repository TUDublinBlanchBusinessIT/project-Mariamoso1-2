# Expense Tracker

## Project Description
A web-based application that helps users track their personal expenses. Users can add expenses with amount, description, date, and category, view all recorded expenses with totals, and delete expenses as needed.

## Features
- Add new expenses with amount, description, date, and category
- View all expenses from database with total calculation
- Delete expenses
- Category-based expense organization
- Session management for user tracking
- Simple and intuitive Bootstrap interface

## Database
The application uses a MySQL database called `expensetracker` with two tables:
- **categories**: Stores expense categories (Food, Transport, Bills, Entertainment, Other)
- **expenses**: Stores expense records with id, amount, description, expense_date, and category_id (foreign key)

## Technologies Used
- PHP (backend processing)
- MySQL (database)
- Bootstrap 3.4.1 (styling)
- HTML5
- Sessions (user tracking)
- Object-oriented programming (ExpenseCalculator class)

## How to Run
1. Ensure MySQL is running and connected on port 3306
2. Import `createExpenseDBV3.sql` into MySQL Workbench
3. Add categories to the database (Food, Transport, Bills, Entertainment, Other)
4. Update `dbcon.php` with your MySQL credentials
5. Navigate to project directory in terminal
6. Run: `php -S localhost:8000`
7. Open browser: `http://localhost:8000/index.php`
