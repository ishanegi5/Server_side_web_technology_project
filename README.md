Summer Internship Form – PHP & MySQL Project
Project Description

This is a simple Summer Internship Form Web Application built using HTML, CSS, PHP, MySQL, and XAMPP.
The project collects user details through a form and stores the data in a MySQL database using PHP.
It also demonstrates basic CRUD (Create, Read, Update, Delete) operations.

Technologies Used
HTML
CSS
PHP
MySQL
XAMPP Server
phpMyAdmin
Features
User can fill internship form
Data stored in MySQL database
Success message displayed after submission
Display all submitted data
Update existing records
Delete records
Auto timestamp for form submission
Database Structure

Database Name: summer_internship_db
Table Name: internship
| Column Name | Data Type                         | Description     |
| ----------- | --------------------------------- | --------------- |
| s.no        | INT (Auto Increment, Primary Key) | Unique ID       |
| Name        | TEXT                              | Student Name    |
| Age         | INT                               | Student Age     |
| Gender      | VARCHAR                           | Gender          |
| Email       | VARCHAR                           | Email           |
| Phone       | VARCHAR                           | Phone Number    |
| query       | TEXT                              | Student Query   |
| date_time   | DATETIME                          | Submission Time |

SQL Table Creation Query
CREATE TABLE `internship` (
  `s.no` INT AUTO_INCREMENT PRIMARY KEY,
  `Name` TEXT NOT NULL,
  `Age` INT NOT NULL,
  `Gender` VARCHAR(10) NOT NULL,
  `Email` VARCHAR(50) NOT NULL,
  `Phone` VARCHAR(15) NOT NULL,
  `query` TEXT NOT NULL,
  `date_time` DATETIME DEFAULT CURRENT_TIMESTAMP
);

How to Run the Project
Install XAMPP
Start Apache and MySQL
Open phpMyAdmin

Create database:

summer_internship_db
Create table using SQL query above

Copy project folder to:

D:\xampp\htdocs\

Open browser and run:

http://localhost/php_project1/index.php

CRUD Operations Used
Insert Data
INSERT INTO internship (Name, Age, Gender, Email, Phone, query)
VALUES ('Isha', 20, 'Female', 'isha@gmail.com', '9876543210', 'Internship query');
Read Data
SELECT * FROM internship;
Update Data
UPDATE internship
SET Email = 'new@gmail.com'
WHERE `s.no` = 1;
Delete Data
DELETE FROM internship
WHERE `s.no` = 1;
Project Structure
php_project1/
│
├── index.php
├── style.css
├── index.js
└── README.md
Learning Outcomes
Learned how to connect PHP with MySQL
Learned how to use POST method in forms
Learned CRUD operations in MySQL
Learned how to run PHP project using XAMPP
Learned basic full-stack web development
Author

Name: Isha Negi
Course: B.Tech CSE
Project: Summer Internship Form (PHP & MySQL)
