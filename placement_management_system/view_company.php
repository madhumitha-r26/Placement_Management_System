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

$sql= "SELECT*FROM company";
$result=mysqli_query($conn,$sql);
if(!$result)
{
    echo "Error:" .mysqli_error($conn);
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<link rel="stylesheet" href="css/view_company.css">
    
<title>View Company</title>


</head>
<body>
<div class="head1">
    <div class="head2">
      <img src="img/project_logo.png" class="logo">
</div>
    
<div class="head3">
  
    </div>

    <div class="head4">              
        <img src="img/user.jpg" id="user"  style="height: 50px;">
        <a href="login.html" class="logout"> Logout </a>  
    </div>

</div>
    <?php
    echo "<center>";
    echo"<h1>Companies</h1>";
    
    $sql= "SELECT*FROM company";
    $result=mysqli_query($conn,$sql);
  

    echo " <table border='2' style='border: 2px solid black; border-collapse: collapse;'>
    <tr>
    <th >Job_Id</th>
    <th>Name</th>
    <th>Role</th>
    <th>Domain</th>
    <th>Salary</th>
    <th>Description</th>
    <th> </th>
    </tr>";
    
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>" . $row['job_id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['role'] . "</td>";
        echo "<td>" . $row['domain'] . "</td>";
        echo "<td>" . $row['salary'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td> <button onclick=\"window.open('". $row['link'] ."','_blank')\"> APPLY HERE</button> 
       <button style='background-color:red' onclick=\"deleteRow('" . $row['job_id'] . "')\"> DELETE </button> </td>";
        echo "</tr>";
    }

    echo"</table>";
    echo"</center>";
    mysqli_close($conn);    
    ?> 
    
    <br>
    <div class="view">
    
    <a href="admin.html" >
        <button class="btn">BACK</button></a>
    <a href="add_company.html" >
        <button class="btn">ADD COMPANY</button></a>
</div>

<script>
    function deleteRow(id) {
        if (confirm("Are you sure you want to delete this company?")) {
            window.location.href = "delete_company.php?id=" + id;
        }
    }
</script>
    
</body>
</html>