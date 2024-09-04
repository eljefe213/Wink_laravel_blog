# Blog Project Using Laravel Wink

This project is a simple blog built using **Laravel** with the **Wink** package, which provides an easy-to-use content management system for managing blog posts and content. The purpose of this project was to explore and test the capabilities of Wink for creating and managing a blog.

## Features

- Blog post management with Wink CMS.
- Simple and clean interface for creating, editing, and deleting blog posts.
- Authentication for the Wink admin panel.
- Pagination of blog posts (currently displaying all posts without custom pagination).

## Technologies Used

- **Laravel 10**: PHP framework used as the base of the application.
- **Wink**: A Laravel package designed for managing blog content, built by the creators of Laravel.
- **Blade**: Laravel's templating engine for views.
- **MySQL**: Database used to store blog posts and user data.
- **Composer**: Dependency manager for PHP, used to install Laravel and Wink.
- **NPM**: Used to manage frontend assets and scripts.

## Setup Instructions

### Requirements

- PHP >= 8.1
- Composer
- MySQL or any other compatible database
- NPM

### Installation

1. **Clone the repository**:

   ```bash
   git clone https://github.com/yourusername/your-repo-name.git
   cd your-repo-name

2. **Install PHP dependencies:**:
   ```bash
   composer install

3. **Set up environment variables:**
Copy the .env.example file to .env and update your environment-specific settings:
   ```bash
   cp .env.example .env

Update the following details in the .env file with your database credentials and other configurations:

    
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password

4. **Generate application key**
Generate a unique key for your Laravel Application:
    ```bash
    php artisan key:generate

5. **Run database migrations:**
Run the following command to create the necessary tables in your database:
    ```bash
    php artisan migrate

6. **Install wink:**
   ```bash
    composer require themsaid/wink
    php artisan wink:install
    php artisan storage:link
    php artisan wink:migrate
   


   
   

