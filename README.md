# Laravel-CRUD Task Management Application

A simple Task Management application built with Laravel, Blade templating engine, MySQL database, and Bootstrap for styling. This application allows users to perform basic CRUD (Create, Read, Update, Delete) operations on tasks.
## Project Image
![task management](https://github.com/user-attachments/assets/b4e48ee8-1ec5-482d-a636-53caea846a00)


## Features

- Create, update, delete, and view tasks.
- Simple, clean UI using Bootstrap 5.
- Blade templating engine for dynamic content rendering.
- MySQL database for data storage.
- Validation for form inputs.

## Requirements

- PHP >= 8.1
- Composer
- MySQL
- Git

## Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/monzurulislambaf/laravel-crud.git
   cd laravel-crud

2. **Install PHP dependencies using Composer:**
    ````bash
    composer install
    ````
3. **Copy the .env.example file to .env:**
````bash
cp .env.example .env
php artisan key:generate
````
4. **Set up your database credentials in the .env file:**
````bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_management
DB_USERNAME=your_username
DB_PASSWORD=your_password
````
5. **Run the migrations to create the necessary tables:**
````bash
php artisan migrate
````
6. **Start the local development server:**
```bash
php artisan serve
````
## Contributing
If you wish to contribute, please fork the repository and submit a pull request. For significant changes, please open an issue first to discuss what you would like to change.
## License
This project is licensed under the MIT License. See the LICENSE file for details.
## Contact
If you have any questions, feel free to reach out:

- Email:  monzurulislambaf@gmail.com
- GitHub: monzurulislambaf
