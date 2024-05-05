<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
<style>
      button{
    text-align: center;
    font-size: 12px;
    padding:10px;
    cursor: pointer;
    border: none; 
    font-family: sans-serif;
    width:100px;
    font-weight: 400;
    color: aliceblue;
    height: auto;
    background-color: #4141dd;
  }

  .btn{
    text-align: center;
    font-size: 18px;
    padding:10px;
    cursor: pointer;
    border: none;
    border-radius: 5px;
    font-family: sans-serif;
    width:500px;
    color: whitesmoke;
    height: auto;
    background-color: #002395;
  }
  .btn:hover{
    text-align: center;
    font-size: 18px;
    padding:10px;
    cursor: pointer;
    border: none;
    border-radius: 5px;
    font-family: sans-serif;
    width:500px;
    color: whitesmoke;
    height: auto;
    background-color: #002395;
  }


 th{
    background-color:#2b2929;
    border: 2px black solid;
    text-align: center;
    color: beige;
  }

  td{
     border: 2px black solid;
  }

tr:nth-child(even){
    height:auto;
    width: 100%;
    word-wrap: break-word;
    border: 2px black solid;
    background-color:rgb(255, 255, 232);
}

tr:nth-child(odd){
    height:auto;
    width: 100%;
    word-wrap: break-word;
    border: 2px black solid;
    background-color:rgb(213, 213, 169);
}

.view{
    display: flex;
    align-items: center;
    justify-content: space-around;
}

table{
    margin: 50px;
    border: 2px black solid;
    padding: 50px;
}
    
h1{
    text-align: center;
    font-weight: 500;
    text-transform: uppercase;
}

</style>

</head>
<body>

<?php

//IT companies
if ($user["domain"] == "IT") {
    echo "<center>";
    echo "<table border='2' style='border: 2px solid black; border-collapse: collapse;'>
<tr>
<th>Job_Id</th>
<th>Name</th>
<th>Role</th>
<th>Location</th>
<th>Domain</th>
<th>Salary</th>
<th>Description</th>
<th>Link</th>
</tr>";

    $sql1 = "SELECT * FROM company WHERE domain='IT'";
    $result1 = mysqli_query($conn, $sql1);

    if ($result1 && mysqli_num_rows($result1) > 0) {
        while ($company = mysqli_fetch_assoc($result1)) {
            echo "<tr>";
            echo "<td>" . $company['job_id'] . "</td>";
            echo "<td>" . $company['name'] . "</td>";
            echo "<td>" . $company['role'] . "</td>";
            echo "<td>" . $company['location'] . "</td>";
            echo "<td>" . $company['domain'] . "</td>";
            echo "<td>" . $company['salary'] . "</td>";
            echo "<td>" . $company['description'] . "</td>";
            echo "<td>
    <button onclick=\"window.open('" . $company['link'] . "','_blank')\"> APPLY HERE</button> </td>";
            echo "</tr><br>";
        }
    }

    echo "</table>";
    echo "</center>";
}

//Management companies
if ($user["domain"] == "Management") 
{
    echo "<center>";
    echo "<table border='2' style='border: 2px solid black; border-collapse: collapse;'>
<tr>
<th>Job_Id</th>
<th>Name</th>
<th>Role</th>
<th>Location</th>
<th>Domain</th>
<th>Salary</th>
<th>Description</th>
<th>Link</th>
</tr>";

    $sql1 = "SELECT * FROM company WHERE domain='Management'";
    $result1 = mysqli_query($conn, $sql1);

    if ($result1 && mysqli_num_rows($result1) > 0) {
        while ($company = mysqli_fetch_assoc($result1)) {
            echo "<tr>";
            echo "<td>" . $company['job_id'] . "</td>";
            echo "<td>" . $company['name'] . "</td>";
            echo "<td>" . $company['role'] . "</td>";
            echo "<td>" . $company['location'] . "</td>";
            echo "<td>" . $company['domain'] . "</td>";
            echo "<td>" . $company['salary'] . "</td>";
            echo "<td>" . $company['description'] . "</td>";
            echo "<td>
    <button onclick=\"window.open('" . $company['link'] . "','_blank')\"> APPLY HERE</button> </td>";
            echo "</tr><br>";
        }
    }

    echo "</table>";
    echo "</center>";
}

//Sales
if ($user["domain"] == "Sales") {
    
    echo "<center>";
    echo "<table border='2' style='border: 2px solid black; border-collapse: collapse;'>
<tr>
<th>Job_Id</th>
<th>Name</th>
<th>Role</th>
<th>Location</th>
<th>Domain</th>
<th>Salary</th>
<th>Description</th>
<th>Link</th>
</tr>";

    $sql1 = "SELECT * FROM company WHERE domain='Sales'";
    $result1 = mysqli_query($conn, $sql1);

    if ($result1 && mysqli_num_rows($result1) > 0) {
        while ($company = mysqli_fetch_assoc($result1)) {
            echo "<tr>";
            echo "<td>" . $company['job_id'] . "</td>";
            echo "<td>" . $company['name'] . "</td>";
            echo "<td>" . $company['role'] . "</td>";
            echo "<td>" . $company['location'] . "</td>";
            echo "<td>" . $company['domain'] . "</td>";
            echo "<td>" . $company['salary'] . "</td>";
            echo "<td>" . $company['description'] . "</td>";
            echo "<td>
    <button onclick=\"window.open('" . $company['link'] . "','_blank')\"> APPLY HERE</button> </td>";
            echo "</tr><br>";
        }
    }

    echo "</table>";
    echo "</center>";
}

mysqli_close($conn);
?> 

</body>
</html>
