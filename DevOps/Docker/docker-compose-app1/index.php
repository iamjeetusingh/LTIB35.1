<?php
$host = 'db';
$user = 'myuser';
$password = 'mypassword';
$database = 'mydatabase';
 
$conn = new mysqli($host, $user, $password, $database);
 
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
 
$result = $conn->query('SELECT "Hello, MySQL!" AS message');
$row = $result->fetch_assoc();
$message = $row['message'];
 
$conn->close();
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>PHP MySQL Example</title>
</head>
<body>
<h1><?php echo $message; ?></h1>
</body>
</html>
