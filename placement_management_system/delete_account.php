<?php
$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_name="pms";

$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn) { 
    echo "Connection failed: ".mysqli_connect_error(); 
    exit;
}

$email = $_POST['email'];

$sql = "SELECT * FROM users WHERE email = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    echo '<script>' . 
          'if (confirm("Are you sure you want to delete this account?")) {' . 
          'alert("Account is deleted");' . 
          'window.location.href="home.html";' . 
          '} else {' . 
          'alert("Account deletion cancelled");' . 
          'window.location.href="home.html";' . 
          '}</script>';

    $sql = "DELETE FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
} else {
    echo '<script>' . 
          'alert("Account not found");' . 
          'window.location.href="home.html";' . 
          '</script>';
}

mysqli_close($conn);
?>