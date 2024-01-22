# REST API in PHP

This project serves as an example of a simple REST API implemented in PHP, with accompanying HTML and JavaScript for client-side interaction. The project includes the following components:

## HTML (`index.html`)

A basic HTML file that fetches data from the REST API endpoint and displays it in an HTML table.

## PHP (`api.php`)

- Handles HTTP requests (specifically GET requests) and interacts with the database to retrieve data.
- Implements CORS (Cross-Origin Resource Sharing) by allowing access from any origin.

## PHP (`function.php`)

- Contains a function (`getData()`) that performs a database query to fetch data.
- Returns JSON-encoded data based on the query result.

## PHP (`db.php`)

- Establishes a database connection using provided credentials.
- Included in other PHP files to ensure a connection to the database.

## Database Connection

- The database connection is configured with variables for host, username, password, and database name.

## Database Query

- A sample database query is executed to retrieve data from a specific table (`your_table`).

## Usage

1. Update the database connection details in `db.php` to match your database configuration.
2. Modify the database query in `function.php` to specify the table from which data should be fetched.
3. Access the API endpoint (`api.php`) to retrieve data using a GET request.
4. The retrieved data is then displayed in an HTML table in `index.html`.

Feel free to customize this example to fit your specific requirements or use it as a starting point for building more complex REST APIs in PHP.
