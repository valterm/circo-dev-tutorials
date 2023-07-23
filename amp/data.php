<?php
// Database connection settings
$host = '10.147.137.211'; // Replace with your MySQL host
$username = 'user'; // Replace with your MySQL username
$password = 'supersecretuserpassword'; // Replace with your MySQL password
$dbname = 'AMPDB'; // Replace with your MySQL database name
$port = '3306';

// Create a database connection
$connection = new mysqli($host, $username, $password, $dbname, $port);

// Check if the connection was successful
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Query to fetch data from the users table
$query = "SELECT id, username, firstname, lastname, country_alpha2, dob FROM users";
$result = $connection->query($query);

// Display an error message if the query failed
if (!$result) {
    die("Query failed: " . $connection->error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>User Data</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Country</th>
            <th>Date of Birth</th>
        </tr>
        <?php
        // Loop through the result and display data in the table
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['firstname'] . "</td>";
            echo "<td>" . $row['lastname'] . "</td>";
            echo "<td>" . $row['country_alpha2'] . "</td>";
            echo "<td>" . $row['dob'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <?php
    // Close the database connection
    $connection->close();
    ?>
</body>
</html>
