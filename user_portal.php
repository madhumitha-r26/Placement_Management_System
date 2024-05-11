<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display&display=swap" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="img/logo.jpg">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hedvig+Letters+Serif:opsz@12..24&family=Merriweather:wght@400;900&family=Red+Hat+Display&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Red+Hat+Display&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/users.css">
    <title>User Login</title>
    
</head>
<body>
<div class="head1">
    <div class="head2">   
    <img src="img/project_logo.png" class="logo">
    </div>

<div class="opr1">

<?php
session_start();
    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "" ;
    $db_name = "pms";

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        echo "Connection failed: " . mysqli_connect_error();
        exit;
    }

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM users WHERE email = '$email' AND confirm_password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0) {
      echo '<script>' .
      'alert("Invalid Login Details");' .
      'window.location.href="user_login.html";' .
      '</script>';
      exit;
  }

    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }

    $user = mysqli_fetch_assoc($result);
    ?>

<center>
<h1>
Welcome <span>
  <?php 
if (mysqli_num_rows($result) == 1) 
{
echo $user["name"]; 
}

?> 
</span> </h1><br>
</center>

</div>

<div class="opr2">
  <header>
        <nav class="topnav" id="myTopnav">          
          <div class="menu">        
          <a href="feedback.html">Feedback</a>     
          <a href="acc_set.html">Account Settings</a>
          
          
        </div>

        </nav>
      </header> 
    
  </div>
    <div class="head4">
 <img src="img/user.jpg" id="user">
<a href="login.html" class="logout"> Logout</a>
    </div>

</div>
<br>

  <?php
        include"fetch_job.php";      
  ?>  


</body>
</html>