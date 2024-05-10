<?php
session_start();

if (isset($_POST['change_password'])) {
    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_name = "pms";

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    if (!$conn) {
        echo "Connection failed: " . mysqli_connect_error();
        exit;
    }

    $email = $_POST['email'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if($new_password != $confirm_password)
    {
       echo '<script>'.
       'alert("Password does not match");'.
       'window.location.href="user_login.html";'.
       '</script>';
    }

    elseif(($new_password === $confirm_password))
    {
    $sql = "UPDATE users SET
            new_password='$new_password',
            confirm_password='$confirm_password'  
            WHERE email='$email'";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    } 
    echo '<script>'.
       'alert("Password changed successfully");'.
       'window.location.href="user_login.html";'.
       '</script>';
  }
else{
  echo '<script>'.
       'alert("Invalid credentials");'.
       'window.location.href="user_login.html";'.
       '</script>';
}

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

<title>PASSWORD RESET</title>

<style>
    #edit{
  border: 2px #afaeae solid;
  width:500px;
  padding:50px 50px 50px 50px;
  align-items: center;
  margin:50px;
  border-radius: 15px;
  height:auto;
  margin: 0 auto;
  margin-bottom: 10px;
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px #0000001a;
  font-size: medium;
  
}

button{
  text-align: center;
  font-size: 18px;
  padding:10px;
  margin-top: 10px;
  border: none;
  border-radius: 10px;
  font-family: sans-serif;
  width:100%;
  box-shadow: 0 1px #a19f9f;
  color: aliceblue;
  background-color: #4141dd;
}

.form_elements{
  width: 450px;
  height: 40px;
  outline: none;
  border:1px solid #b3b3b3;
  background-color: #fff;
  border-radius: 5px;
  margin:10px 0px 10px 0px;

}

label{
font-weight: 700;
font-size: medium;
}

p{
  font-weight: 450;
  }


.password-container {
  position: relative;
}

.fa-eye, .fa-eye-slash  {
  position: absolute;
  top: 50%;
  right: 10px; 
  transform: translateY(-50%);
  cursor: pointer;
}

#show-password2, #show-password1 {
  position: absolute;
  right: 10px; 
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
}


 .fa-eye,.fa-eye-slash {
  position:absolute;
  top: 49%;
  right: 39%;
  cursor: pointer;
  color: #6c6c6c;
  transition: 0.3ms;
 }

button[type="submit"]:hover{
  text-align: center;
  padding:10px; 
  align-self: center;
  width:100%;
  border: none;
  color: aliceblue;
  background-color: #0755a3;
}

button[type="submit"]:active{
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}


#edit p{
padding-top: 20px;
padding-bottom: 0px;
font-size: 14px;
text-align: center;
}


</style>
   
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
       
      </header> 
    
  </div>
    </div>
 <br>
<h1 style="text-align: center;">PASSWORD RESET</h1>
<form method="post" id="edit" action="forgot_password.php">
<label>Email</label>
    <input type="email" placeholder="Enter your Email"  id="email" class="form_elements" name="email" ><br>

<hr>
   <label>New Password</label>
    <div class="password-container">
        <input type="password" placeholder="Enter your new password" id="password1" minlength="8" name="new_password" class="form_elements">
        <i class="fa fa-solid fa-eye" id="show-password1"></i>
    </div>

    <label>Confirm Password</label>
    <div class="password-container">
        <input type="password" placeholder="Confirm your password" id="password2" minlength="8" name="confirm_password" class="form_elements" >
        <i class="fa fa-solid fa-eye" id="show-password2"></i>
    </div>


    <button type="submit" value="submit" name="change_password">CHANGE PASSWORD</button>
</form>

<script>
const passwordInput1 = document.getElementById('password1');
const passwordInput2 = document.getElementById('password2');

const showPasswordIcon1 = document.getElementById('show-password1');
const showPasswordIcon2 = document.getElementById('show-password2');

showPasswordIcon1.addEventListener ('click', function() {
  if (passwordInput1.type === 'password') {
    passwordInput1.type = 'text';
    this.classList.remove("fa-eye");
    this.classList.add("fa-eye-slash");
  } else {
    passwordInput1.type = 'password';
    this.classList.remove("fa-eye-slash");
    this.classList.add("fa-eye");
  }
});

showPasswordIcon2.addEventListener('click', function() {
  if (passwordInput2.type === 'password') {
    passwordInput2.type = 'text';
    this.classList.remove("fa-eye");
    this.classList.add("fa-eye-slash");
  } else {
    passwordInput2.type = 'password';
    this.classList.remove("fa-eye-slash");
    this.classList.add("fa-eye");
  }
});


</script>
</body>
</html>
