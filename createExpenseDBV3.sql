drop database if exists expensetracker;
create database expensetracker;
use expensetracker;

create table categories (
    id int auto_increment,
    name varchar(50),
    primary key(id)
);

create table expenses (
    id int auto_increment,
    amount decimal(10,2),
    description varchar(255),
    expense_date date,
    category_id int,
    primary key(id),
    foreign key(category_id) references categories(id)
);