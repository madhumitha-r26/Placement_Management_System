<?php
session_start();
if(isset($_POST['submit']))
{
$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_name="pms";

$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn) { 
    echo "Connection failed: ".mysqli_connect_error(); 
    exit;
}

$name=$_POST['name'];
$phone=$_POST["phone"];
$email=$_POST['email'];
$feedback = $_POST['feedback'];

$sql="INSERT INTO feedback(name,phone,email,feedback)
VALUES ('$name','$phone','$email','$feedback')";

$result=mysqli_query($conn,$sql);
if(!$result)
{
    echo "Error:" .mysqli_error($conn);
    exit;
}

    echo '<script>alert("Feedback Submitted Successfully");
    window.location.href="feedback.html";
    </script>';
    
}
mysqli_close($conn);

?>