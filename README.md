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
## CD/CI pipeline
![image](https://github.com/TechnoBlog-DSII/TechnoBlog/assets/95147293/152edf9c-0767-4e1e-a0fb-e9c8bf89b940)

### GitHub Repository: 
This box represents the version control repository that stores the source code of your Laravel project. It is the central point where changes to the code are managed and stored.

### GitHub Actions: 
Represented by the box labeled "GitHub Actions," it is the continuous integration and continuous delivery (CI/CD) service provided by GitHub. It is responsible for executing the steps defined in the workflow (CD/CI.yml file) in response to events such as changes in the repository.

### Build & Test: 
This box represents the build and testing steps in the CI/CD pipeline. Actions such as dependency installation, code compilation, and execution of automated tests are carried out here to ensure software quality.

### Deploy to Railway: 
Represented by the box labeled "Deploy to Railway," this step is responsible for deploying the Laravel application to the Railway hosting platform. It sends a deployment request to the Railway API for the platform to perform the application deployment.

### Railway API: 
The box labeled "Railway API" represents the application programming interface (API) provided by the Railway platform. This API receives the deployment request from the CI/CD pipeline and processes it to initiate the deployment of the Laravel application in the specified environment.

### Laravel Application Environment: 
This box represents the runtime environment of the Laravel application on Railway. After receiving and processing the deployment request, Railway deploys the application in this environment, allowing the application to run and be available for use.

### Explanation of pipeline

We use Github for storage and management of our project.

Github Actions allows us that every time there is a change in the development branch or a push in the main branch, the CI-CD workflow is executed. This runs tests with both Phpunit and Npm.

Once the actions have finished, Railway, which is our deployment application, analyzes the results, and two things can happen:

- The tests fail, a notification is generated through slack, so our developers are notified to correct the failures as soon as possible.
- The tests run successfully, Railway detects that this is a usable commit and proceeds to use the NIXPACKS builder that we configured to build our application, then it builds a docker image which it deploys and already gives us access to a domain that we generated.
This will run all the tests defined in the tests folder and display the results in the console, including coverage and the number of tests executed.
## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
