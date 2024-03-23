<?php

if(isset($_POST['submit'])) {
    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_name = "pms";

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    if(!$conn) {
        echo "Connection failed: ".mysqli_connect_error();
        exit;
    }

    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $qualification = $_POST['qualification'];
    $domain = $_POST['domain'];
    $city = $_POST['city'];
    $year = $_POST['year'];
    $phone = $_POST["phone"];
    $email = $_POST['email'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if($new_password === $confirm_password) {

        $sql="INSERT INTO users (name,dob,gender,qualification,year,domain,city,
phone,email,new_password,confirm_password)
VALUES ('$name','$dob','$gender','$qualification','$year',
'$domain','$city','$phone','$email',
'$new_password','$confirm_password')";

$result=mysqli_query($conn,$sql);
 if(!$result)
 {
    echo '<script> alert ("Email already exists.");
    window.location.href="registration.html";
    </script>';
 }
echo '<script>alert("Registration Successful");
window.location.href="login.html";
</script>'; 

}

    
else
{
    echo '<script>alert("Passwords do not match");
    window.location.href="registration.html";
    </script>';
    
}
mysqli_close($conn);
}
?>
