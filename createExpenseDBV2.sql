drop database if exists expensetracker;
create database expensetracker;
use expensetracker;
create table expenses (
    id int auto_increment,
    amount decimal(10,2),
    description varchar(255),
    expense_date date,
    primary key(id)
);