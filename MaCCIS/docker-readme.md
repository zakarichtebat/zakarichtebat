# Docker Setup for Laravel

This project includes Docker configuration to run the Laravel application on port 7000.

## Getting Started

1. Make sure you have Docker and Docker Compose installed on your system.

2. Copy the `.env.example` file to `.env` if you haven't already:

    ```
    cp .env.example .env
    ```

3. Update your `.env` file with Docker-specific settings:

    ```
    DB_HOST=db
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=laravel
    DB_PASSWORD=laravel
    ```

4. Build and start the Docker containers:

    ```
    docker-compose up -d
    ```

5. Generate an application key:

    ```
    docker-compose exec app php artisan key:generate
    ```

6. Run the migrations:

    ```
    docker-compose exec app php artisan migrate
    ```

7. Access the application at http://localhost:7000

8. Access PHPMyAdmin at http://localhost:7001

    - Username: root
    - Password: root

    Or

    - Username: laravel
    - Password: laravel

## Container Structure

-   **app**: PHP-FPM container with Laravel application
-   **webserver**: Nginx container (exposed on port 7000)
-   **db**: MySQL container
-   **phpmyadmin**: PHPMyAdmin container (exposed on port 7001)

## Useful Commands

-   View logs:

    ```
    docker-compose logs
    ```

-   Access the app container shell:

    ```
    docker-compose exec app bash
    ```

-   Stop the containers:
    ```
    docker-compose down
    ```
