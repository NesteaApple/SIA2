# Project Name

SIA 2 - ASSIGNMENT

## Prerequisites

Before you begin, ensure you have the following installed:
* **PHP** (>= 8.x)
* **Composer**
* **Node.js & NPM**
* **MySQL** or any preferred database engine

---

## Installation & Setup Guide

Follow these steps to get your development environment running locally.

### 1. Clone the Repository
```bash
git clone REPO_URL
cd project-name
```

### 2. Install Dependencies
Install the PHP packages via Composer:
```bash
composer install
```

### 3. Environment Configuration
Create your local environment file by copying the template:
```bash
cp .env.example .env
```
> **Note:** Open the `.env` file and update the `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` to match your local database settings.

### 4. Application Security Key
Generate a unique application key:
```bash
php artisan key:generate
```

### 5. Database Migration
Run the migrations to create the necessary tables in your database:
```bash
php artisan migrate
```

### 6. Frontend Assets
Install the frontend dependencies and compile the assets:
```bash
# Install NPM packages
npm install

# For development (Hot Reloading)
npm run dev

# OR for production build
npm run build
```

---

## Running the Application

Once the setup is complete, start the local development server:
```bash
php artisan serve
```
The application will be available at: `http://127.0.0.1:8000`

---

## Related Documentation

* [Laravel Documentation](https://laravel.com/docs)
* [Vite Documentation](https://vitejs.dev/)
* [Composer Documentation](https://getcomposer.org/doc/)
```

### Tips for Alignment:
* **Indentation:** Ensure the code blocks (triple backticks) start at the beginning of the line to prevent rendering issues.
* **Spacing:** I have added horizontal rules (`---`) and clear headers to make the guide easy to follow for other developers.
* **Database Note:** I included a reminder for the `.env` file, as forgetting to change the database credentials is the most common cause of errors during cloning.
