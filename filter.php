<?php
// Database connection settings
$servername = "127.0.0.1";
$username = "root";
// $password = "root";
$password = "";
$dbname = "tickets";

// Get the from date and to date from the query string
$fromDate = $_GET['fromDate'];
$toDate = $_GET['toDate'];

// Create a new database connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL query to search for tickets between the from date and to date
$sql = "SELECT * FROM tbl_ticket WHERE departureDate >= ? AND departureDate <= ?";

/* The date >= ? condition checks if the date is greater than or equal to the first placeholder value, and date <= ? condition checks 
if the date is less than or equal to the second placeholder value.

You can replace the ? placeholders with actual values using prepared 
statements before executing the query. This helps prevent SQL injection 
attacks and allows for more flexibility when dynamically passing values to the query. */

/* In your code, $stmt is created by calling the prepare() method on the database 
connection object ($conn). 
It prepares the SQL query that you have defined and returns a statement object. */

/* Once the prepared statement is created, you can bind values to the placeholders 
using the bind_param() method, 
execute the query with execute(), and retrieve the result using get_result(). */

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $fromDate, $toDate);
$stmt->execute();

// Get the result of the query
$result = $stmt->get_result();

// Display the results or show an error message
if ($result) {
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
        <th>Ticket ID</th>
        <th>flight</th>
        <th>Ticket Price</th>
        <th>Departure Date</th>
      
        
        </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['ticket_id'] . "</td>";
            echo "<td>" . $row['flight'] . "</td>";
            echo "<td>" . $row['ticketPrice'] . "</td>";
            echo "<td>" . $row['departureDate'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No tickets found.";
    }
} else {
    echo "Error executing the query: " . $conn->error;
}

// Close the prepared statement and the database connection
$stmt->close();
$conn->close();
