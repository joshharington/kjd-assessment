# King James Digital Assessment Documentation

### Objective
Build a web based portal to display clear use of different role-based users, with the ability to create products and display them to a user. There should be four roles: Client, Author, Publisher and Admin with different abilities outlined under “roles” in the requirement document provided by King James Digital.


### Framework
The framework that was used is Laravel 8, with Livewire and TailwindCSS for the frontend as the role is for PHP development, and Laravel is my favourite PHP framework.


### Environment requirements 
To setup the app to run in your own environment you will need:

* PHP 7.3+
* NPM 6.14.11 
* Composer


### Download the project

To download the project from Github, enter the following into your terminal:
**NB:** Make sure the terminal is pointing to your desired host directory, ie: Documents/Github is the folder that contains all the GitHub projects that I work on.

* git clone https://github.com/joshharington/kjd-assessment.git
* cd kjd-assessment


### Pre-Install
Before you can setup the code and run it, you will need to have a database already setup and configured. You can create a MySQL database on your local machine and specify the connection details in the .env file inside the root project folder (/kjd-assessment).

The keys you will need to update are:

* DB_DATABASE
* DB_USERNAME 
* DB_PASSWORD


### Install & run the project
**NB:** Make sure the terminal is pointing to your desired directory, ie: make sure you run these commands from the kjd-assessment directory.

To install and the project, enter the following into your terminal:

* composer update
* npm install
* php artisan key:generate
* php artisan vendor:publish —all
* php artisan migrate
* php artisan db:seed
* npm run dev

**NB:** If you used the sql dump to create the database, it already has the tables and data, so you don’t need to run the ***php artisan migrate*** and ***php artisan db:seed*** commands

Once the above commands have all completed, you will be ready to run and access the application. To run the app, enter the following into your terminal:

php artisan serve

You should now be able to access the application in your browser at: **http://localhost:8000**


### Login details
When seeding the database (php artisan db:seed) it created user accounts that you can log in with:

* admin@test.com
* author@test.com
* client@test.com
* publisher@test.com

All of these accounts use the same password - **12345678a!**

### Common Problems
Common issues that might arise are:

* database connection, make sure that the database connection has the correct info in the .env file.
* File permissions, you may need to change the file permissions of the storage and bootstrap directories. The correct permissions for these folders / files are: 755 for the folders and 644 for the files. For local development, you can give the folders a permission of 777 recursively - but NEVER do this on a live server. This will give anyone read, write and execute abilities in the directory, and is a major security vulnerability. You can find more info on this [here](https://stackoverflow.com/questions/30639174/how-to-set-up-file-permissions-for-laravel)
