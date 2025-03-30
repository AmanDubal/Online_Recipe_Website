<?php
// Create a connection to the database using MySQLi
$con = new mysqli('localhost', 'root', '', 'recipe');

// Check the connection
if ($con->connect_error) {
    die('Connection failed: ' . $con->connect_error);
}

// Sanitize and retrieve user inputs
$uname = trim($_REQUEST["un"]);
$p = trim($_REQUEST["ps"]);

// Prepare and execute SQL to check if the record already exists
$stmt = $con->prepare("SELECT * FROM login WHERE Uname = ?");
$stmt->bind_param('s', $uname);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    // If user does not exist, insert a new record
    $stmt = $con->prepare("INSERT INTO login (Uname, Pass) VALUES (?, ?)");
    $stmt->bind_param('ss', $uname, $p);
    if ($stmt->execute()) {
        echo "Account created successfully. You can now login.";
    } else {
        echo "Failed to insert record.";
    }
} else {
    echo "Username already exists.";
}

// Close the connection
$stmt->close();
$con->close();
?>
