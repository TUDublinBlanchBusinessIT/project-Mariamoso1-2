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

## Version History
- **V1**: Created database and expenses table with basic fields
- **V2**: Created add expense form with amount and description
- **V3**: Added expense processing - successfully inserts data into database
- **V4**: Added view expenses page - retrieves and displays all expenses from database
- **V5**: Added date field to expenses table and forms
- **V6**: Added categories table with foreign key relationship to expenses
- **V7**: Added category dropdown populated from database
- **V8**: Added session tracking for user
- **V9**: Created ExpenseCalculator class with calculateTotal method
- **V10**: Used ExpenseCalculator class to display total expenses
- **V10.5**: Added homepage with navigation buttons
- **V11**: Delete function and final touches
- **V11.1**: Minor Debugs

## How to Run
1. Ensure MySQL is running and connected on port 3306
2. Import `createExpenseDBV3.sql` into MySQL Workbench
3. Add categories to the database (Food, Transport, Bills, Entertainment, Other)
4. Update `dbcon.php` with your MySQL credentials
5. Navigate to project directory in terminal
6. Run: `php -S localhost:8000`
7. Open browser: `http://localhost:8000/index.php`
