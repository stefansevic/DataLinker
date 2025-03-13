# LAMP Test Project

This is a simple LAMP (Linux, Apache, MySQL, PHP) project that connects to a MySQL database and performs basic CRUD (Create, Read, Update, Delete) operations.

## Features
- Connects to MySQL using the `mysqli` extension.
- Implements basic CRUD operations to interact with the database.
- Uses **Apache** and **PHP 8.4** to serve the application.

## Installation
Follow these steps to set up the project on your local machine:

1. Clone this repository:
   	git clone https://github.com/stefansevic/DataLinker.git

2. Navigate to the project folder:
	cd DataLinker

3. Set up your MySQL database:
	- Log in to MySQL:
		mysql -u root -p
	- Create a new database (if not already created):
		CREATE DATABASE database_name;
	- Update your db.php file with the correct database credentials:
		Change the database name, username, and password in the db.php file according to your local MySQL configuration
		
4. Run Apache server:
	Make sure Apache and PHP are installed on your system.
	...sudo systemctl start apache2...
	
5. Access the project in your browser:
	Open your browser and visit: http://localhost/dbtest.php to test the database connection.

	
