
## Installation

1. Install PHP 7.4
2. Install Composer
3. Install MySQL 8.0
4. Import the database from the file `wdstestmiddle.sql` to your local server
5. Clone the project to your local machine using `git clone`
7. Install PHP dependencies by running `composer install`
8. Generate a project key using `php artisan key:generate`
6. Enter the project folder
9. Copy `.env.example` to `.env`
10. Update the MySQL configuration in the `.env` file according to your local MySQL configuration
11. Run the application using `php artisan serve`
12. Open the application in a browser using the link provided in the command-line interface

## Dashboard

- Path: `/home`
- Login: yaroslavkondratenko54@gmail.com
- Password: qwerty12345

Have a good day! 😉

# Note
- If an error occurs due to a timeout when loading a heavy file, you need to go to the php.ini file and increase the value of "max_execution_time"
