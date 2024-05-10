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

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="icon" type="image/x-icon" href="img/logo.jpg">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hedvig+Letters+Serif:opsz@12..24&family=Merriweather:wght@400;900&family=Red+Hat+Display&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Red+Hat+Display&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/edit_profile.css">   

<title>UPDATE</title>

   
</head>
<body>
<div class="head1">
    <div class="head2">
        <img src="img/project_logo.png" class="logo">
    </div>

    <div class="opr1">


</div>

<div class="opr2">
  <header>
        <nav class="topnav">          
          <div class="menu">     
          <a href="feedback.html">Feedback</a>     
          <a href="acc_set.html">Account Settings</a>
          </div>

        </nav>
      </header> 
    
  </div>
    <div class="head4">
        <img src="img/user.jpg" id="user" style="height: 50px;">
        <a href="login.html" class="logout"> Logout </a>
    </div>
</div>
 <br>
 <center>
    <h1>EDIT PROFILE</h1>
</center>
<form method="post" id="edit" action="update_profile.php">
<label>Email</label><span style="color: red;">*</span>
    <input type="email" placeholder="Enter your Email"  id="email" class="form_elements" name="email" ><br>

<hr>
    <label>Name</label><span style="color: red;">*</span>
    <input type="text" placeholder="Enter your Name"  id="name" class="form_elements" name="name" ><br>

    <label>City</label><span style="color: red;">*</span>
    <input type="text" placeholder="Enter your city"  id="name" class="form_elements" name="city"><br>

    <label>Phone</label><span style="color: red;">*</span>
    <input type="tel" placeholder="Enter your phone number"  id="phone" minlength="10" class="form_elements" name="phone"><br>

    <label>Domain</label><span style="color: red;">*</span>
            
                <select name="domain" required  id="domain" class="form_elements">
                  <option value="select">-SELECT-</option>
                  <option value="IT" name="domain">IT</option>
                  <option value="Management" name="domain">Management</option>
                  <option value="Sales" name="domain">Sales</option>
                </select>
                <br>

    <button type="submit" value="submit" name="update">UPDATE</button>
</form>

</script>
</body>
</html>
