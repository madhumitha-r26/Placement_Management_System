<?php

if (isset($_POST['update'])) {
    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password= "";
    $db_name = "pms";

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    if (!$conn) {
        echo "Connection failed: " . mysqli_connect_error();
        exit;
    }

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);

    $sql = "UPDATE users SET name='$name', city='$city', phone='$phone' WHERE email='$email'";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    } 
    echo '<script>' .
    'alert("Updated successfully");' .
    'window.location.href="user_login.html";' .
    '</script>';
    mysqli_close($conn);
}

?>