<?php
$con = new mysqli('localhost', 'root', '', 'recipe');
if ($con->connect_error) {
    die('Connection failed: ' . $con->connect_error);
}

$uname = trim($_REQUEST['un']);
$p = trim($_REQUEST['ps']);

$stmt = $con->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$stmt->bind_param('ss', $uname, $p);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Successful login, redirect to the discovery page
    header("Location: recipe_discovery.html");
    exit();
} else {
    echo "<h1>User Name Not Found / Not a Registered User</h1>";
}

$stmt->close();
$con->close();
?>
