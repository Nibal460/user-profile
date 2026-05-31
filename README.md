# User Profile Management System

A User Profile and Authentication System built with the Laravel PHP Framework.

## Overview

This project is a User Profile Management System developed using Laravel and PHP. It provides authentication features such as user registration, login, profile management, and account handling.

The application demonstrates secure user authentication and profile management using Laravel's built-in authentication system and database integration.

## Features

* User Registration
* User Login and Authentication
* User Profile Management
* Edit Profile Information
* Secure Password Handling
* Session Management
* Database Integration
* Laravel MVC Architecture
* Responsive User Interface

## Technologies Used

* PHP
* Laravel
* MySQL
* HTML
* CSS
* Bootstrap
* JavaScript

## Installation

### Clone the Repository

```bash id="s7l4qh"
git clone https://github.com/Nibal460/user-profile.git
cd user-profile
```

### Install Dependencies

```bash id="q0nq54"
composer install
```

### Configure Environment

```bash id="kfyw6f"
cp .env.example .env
php artisan key:generate
```

### Configure Database

Update your `.env` file with your database credentials:

```env id="yowc2w"
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### Run Migrations

```bash id="lw4r9g"
php artisan migrate
```

### Start Development Server

```bash id="oq1o8x"
php artisan serve
```

Open your browser:

```text id="jlwmg2"
http://127.0.0.1:8000
```

## Project Goals

The purpose of this project was to practice Laravel authentication and user management concepts, including:

* User Authentication
* Login and Registration Systems
* Profile Management
* Database Relationships
* Laravel MVC Structure
* Backend Development with PHP
* Secure User Data Handling

## Author

Nibal Tinawi

## GitHub Repository

GitHub: https://github.com/Nibal460/user-profile
