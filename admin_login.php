<?php

$db_hostname = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_name = "pms";

$conn = new mysqli($db_hostname, $db_username, $db_password, $db_name);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}


$email = $_POST['email'];
$password = $_POST['password'];

if ($email == "admin@gmail.com" && $password == "admin123") 
{
    header("Location: admin.html");
    exit;
}
else
{
    echo '<script>alert("INVALID LOGIN");
window.location.href="login.html";</script>';
}
$conn->close();
?>