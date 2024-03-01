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

$sql= "SELECT*FROM users";
$result=mysqli_query($conn,$sql);
if(!$result)
{
    echo "Error:" .mysqli_error($conn);
    exit;
}
echo "<center>";
echo "<table border='2' style='border: 2px solid black;
border-collapse: collapse;'>
<tr>
<th>Name</th>
<th>Date of Birth</th>
<th>Gender</th>
<th>Qualification</th>
<th>Year of Qualification</th>
<th>Domain</th>
<th>Email</th>
<th>Phone</th>
<th>City</th>
</tr>";

while($row=mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['dob'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['qualification'] . "</td>";
    echo "<td>" . $row['year'] . "</td>";
    echo "<td>" . $row['domain'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
    echo "<td>" . $row['city'] . "</td>";
    echo "</tr>";
}

echo "</table>";
echo "</center>";
?>
 
