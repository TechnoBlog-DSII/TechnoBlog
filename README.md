<p align="center">
  <img src="public/images/LogoTechnoblog.png" alt="Logo Technoblog" style="display: block; margin: 0 auto;">
</p>

# About TechnoBlog
Welcome to Technoblog! This is a forum website where you can publish, discuss, and share your ideas on a wide range of topics. Our goal is to create a vibrant and dynamic community where users can engage in constructive and enriching debates.Technoblog allows you to create and publish your own forums on topics that interest you. You can share your opinions, ask questions, present projects, or discuss any subject you wish.

## Laravel Project with Jest and PhpUnit

This is a Laravel project that uses the Jest framework and PhpUnit for unit and integration testing in the application based on a forum website.

## Requirements
Before getting started, make sure you have the following installed:

PHP 8.2.4 or higher,
Composer,
Node.js,
XAMPP.

# Installation

### 1. Install PHP dependencies by running the command.
    composer install
### 2. Install Node.js dependencies by running the command.
    npm install
### 3. Configure the environment file: Copy the .env.example file and rename it to .env. Then, update the environment variables according to your configuration. (Note that the .env file contains the environment variables. In the parts that are DB_, you can change them to be local; otherwise, you will access our test database.)
### 4. Generate a new application key with the command.
    php artisan key:generate
### 5. Use this command for the storage shorcut
    php artisan storage:link
### 6. Run database migrations with the command.
    php artisan migrate:fresh --seed
### 7. Compile the assets with.
     npm run dev
### 8. Start a local development server with the command.
    php artisan serve
Now the console has to show you this link (example : http://127.0.0.1:8000) and you have access it.
## Running Tests
### To execute the unit, integration, and functional tests in the project, run the command for Jest tests.
    npm run test 
### And for PHP tests use.
    vendor/bin/phpunit
This will run all the tests defined in the tests folder and display the results in the console, including coverage and the number of tests executed.
## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
