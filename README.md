# Project README

This is a CRUD test case for Itigo, implementing functionality for managing books, authors, and publishers. The project is developed using Laravel and utilizes a PostgreSQL database. To run the project, Docker and Docker Compose are required.


## Getting Started


1. Build the Docker containers:

```bash
docker-compose build
```

2. Start the Docker containers:

```bash
docker-compose up
```

3. Access the project in your web browser:

Visit `http://localhost:8000` to access the application.

## Database Configuration

The project uses PostgreSQL as the database. The database container is defined in the `docker-compose.yml` file and is configured with the following parameters:

- Username: `postgres`
- Password: `secret`
- Database name: `itigo`
- Host: `localhost`
- Port: `5432`

## Project Structure

The project is organized as follows:

- `app/`: Contains the Laravel application files.
- `database/`: Includes database migration and seed files.
- `resources/views/`: Contains the Blade templates for the application's views.
- `routes/web.php`: Defines the application's routes.

## Features

The CRUD test case covers the following features:

- Managing books, authors, and publishers.
- Creating, reading, updating, and deleting books, authors, and publishers.
