# Task Management System

This is a simple task management system built with Laravel. It provides RESTful API endpoints for user authentication,
task management (CRUD operations), and real-time updates using Laravel Echo and Pusher. The application also includes
robust and extensive test.

## Features

- User Authentication using Laravel Passport
- Task Management (Create, Read, Update, Delete)
- Real-time updates with Laravel Echo and Pusher
- Input validation and error handling
- Logging of failed database queries

## Requirements

- PHP >= 8.1
- Composer
- Node.js and npm
- MySQL or any other supported database
- Docker and Docker Compose (for Docker setup)

## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/your-username/task-manager.git
    cd task-manager
    ```

2. **Install PHP dependencies:**

    ```bash
    composer install
    ```

3. **Install Node.js dependencies:**

    ```bash
    npm install
    ```

4. **Set up your environment variables:**

    ```bash
    cp .env.example .env
    ```

   Update the `.env` file with your database and Pusher credentials.

5. **Generate application key:**

    ```bash
    php artisan key:generate
    ```

6. **Run the database migrations:**

    ```bash
    php artisan migrate
    ```

7. **Install Passport:**

    ```bash
    php artisan passport:install
    ```

8. **Test the application:**

    ```bash
    php artisan test 
    ```

9. **Run the project:**

    ```bash
    php artisan serve
    ```

10. **Run the WebSocket server:**

     ```bash
     npm run dev
     ```

## Alternatively running the Application with Docker

You can also run the application using Docker to simplify setup and deployment.

### Prerequisites

- Docker
- Docker Compose

### Docker Setup

1. **Build and run the containers:**

    ```bash
    docker-compose up --build
    ```

2. **Run migrations and install Passport:**

   Open a new terminal window and execute:

    ```bash
    docker-compose exec app php artisan migrate
    docker-compose exec app php artisan passport:install
    docker-compose exec app php artisan test
    ```

3. **Access the application:**

   Open your web browser and navigate to `http://localhost`.

## API Documentation

### Authentication

#### Register

- **Endpoint:** `POST /api/register`
- **Request Body:**

    ```json
    {
        "name": "John Doe",
        "email": "johndoe@example.com",
        "password": "password123",
        "password_confirmation": "password123"
    }
    ```

- **Response:**

    ```json
    {
        "data": {
            "id": 1,
            "name": "John Doe",
            "email": "johndoe@example.com",
            "created_at": "2024-05-17T15:09:54.000000Z",
            "updated_at": "2024-05-17T15:09:54.000000Z"
        }
    }
    ```

#### Login

- **Endpoint:** `POST /api/login`
- **Request Body:**

    ```json
    {
        "email": "johndoe@example.com",
        "password": "password123"
    }
    ```

- **Response:**

    ```json
    {
        "message": "Login Successful",
        "data": {
            "token": "your_access_token_string",
            "user_details": {
                "id": 1,
                "name": "John Doe",
                "email": "johndoe@example.com",
                "created_at": "2024-05-17T15:09:54.000000Z",
                "updated_at": "2024-05-17T15:09:54.000000Z"
            }
        }
    }
    ```

### Tasks

#### List Tasks

- **Endpoint:** `GET /api/tasks`
- **Query Parameters:**
    - `term` (optional): Search term
    - `per_page` (optional): Number of items per page

- **Response:**

    ```json
    {
        "data": [
            {
                "id": 1,
                "title": "Sample Task",
                "description": "This is a sample task",
                "completed": false,
                "created_at": "2024-05-17T15:09:54.000000Z",
                "updated_at": "2024-05-17T15:09:54.000000Z"
            }
        ]
    }
    ```

#### Create Task

- **Endpoint:** `POST /api/tasks`
- **Request Body:**

    ```json
    {
        "title": "New Task",
        "description": "Task description",
        "completed": false
    }
    ```

- **Response:**

    ```json
    {
        "message": "Task created successfully",
        "data": {
            "id": 1,
            "title": "New Task",
            "description": "Task description",
            "completed": false,
            "created_at": "2024-05-17T15:09:54.000000Z",
            "updated_at": "2024-05-17T15:09:54.000000Z"
        }
    }
    ```

#### Get Task

- **Endpoint:** `GET /api/tasks/{id}`
- **Response:**

    ```json
    {
        "message": "Task fetched successfully",
        "data": {
            "id": 1,
            "title": "Sample Task",
            "description": "This is a sample task",
            "completed": false,
            "created_at": "2024-05-17T15:09:54.000000Z",
            "updated_at": "2024-05-17T15:09:54.000000Z"
        }
    }
    ```

#### Update Task

- **Endpoint:** `PUT /api/tasks/{id}`
- **Request Body:**

    ```json
    {
        "title": "Updated Task",
        "description": "Updated description",
        "completed": true
    }
    ```

- **Response:**

    ```json
    {
        "message": "Task updated successfully",
        "data": {
            "id": 1,
            "title": "Updated Task",
            "description": "Updated description",
            "completed": true,
            "created_at": "2024-05-17T15:09:54.000000Z",
            "updated_at": "2024-05-17T15:09:54.000000Z"
        }
    }
    ```

#### Delete Task

- **Endpoint:** `DELETE /api/tasks/{id}`
- **Response:**

    ```json
    {
        "message": "Task deleted successfully",
        "data": {
            "id": 1,
            "title": "Sample Task",
            "description": "This is a sample task",
            "completed": false,
            "created_at": "2024-05-17T15:09:54.000000Z",
            "updated_at": "2024-05-17T15:09:54.000000Z"
        }
    }
    ```

## Real-time Updates

This application uses Laravel Echo and Pusher for real-time updates. Ensure you have configured your Pusher credentials
in the `.env` file.
