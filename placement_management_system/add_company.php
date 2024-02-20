<?php
session_start();
$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_name="pms";

$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn) { 
    echo "Connection failed: ".mysqli_connect_error(); 
    exit;
}

$job_id = $_POST['job_id'];
$name=$_POST['name'];
$role=$_POST['role'];
$domain = $_POST['domain'];
$loc = $_POST['loc'];
$salary = $_POST['salary'];
$description = $_POST['description'];
$link=$_POST['link'];


$sql="INSERT INTO company (job_id,name,role,location,domain,salary,
description,link)
VALUES ('$job_id','$name','$role','$loc','$domain','$salary','$description','$link')";

$result=mysqli_query($conn,$sql);

echo '<script>alert("Company Successfully added");
window.location.href="view_company.php";</script>';

mysqli_close($conn);

?>