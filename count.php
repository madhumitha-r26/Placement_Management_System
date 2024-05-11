<?php 
$sql2= "SELECT COUNT(*) as total_users FROM users";
$result2=mysqli_query($conn,$sql2);
if(!$result2)
{
    echo "Error:" .mysqli_error($conn);
    exit;
}

$row2=mysqli_fetch_assoc($result2);
echo "<br>";
echo "<p><b>Total number of users registered:</b>" ."  " .$row2['total_users']. "</p>";
//----------------------------------

$sql3= "SELECT COUNT(gender) as total_male_users FROM users WHERE gender='male'";
$result3=mysqli_query($conn,$sql3);
if(!$result3)
{
    echo "Error:" .mysqli_error($conn);
    exit;
}

$row3=mysqli_fetch_assoc($result3);
echo "<p><b>Total number of male users registered:</b>" ."  " .$row3['total_male_users']. "</p>";
//----------------------------------

$sql4= "SELECT COUNT(gender) as total_female_users FROM users WHERE gender='female'";
$result4=mysqli_query($conn,$sql4);
if(!$result4)
{
    echo "Error:" .mysqli_error($conn);
    exit;
}

$row4=mysqli_fetch_assoc($result4);
echo "<p><b>Total number of female users registered:</b>" ."  " .$row4['total_female_users']. "</p>";
 
//----------------------------------

$sql5= "SELECT COUNT(domain) as Management_domain FROM users WHERE domain='Management'";
$result5=mysqli_query($conn,$sql5);
if(!$result5)
{
    echo "Error:" .mysqli_error($conn);
    exit;
}

$row5=mysqli_fetch_assoc($result5);
echo "<p><b>Total number of users registered in Management domain:</b>" ."  " .$row5['Management_domain']. "</p>";

//----------------------------------

$sql6= "SELECT COUNT(domain) as IT_domain FROM users WHERE domain='IT'";
$result6=mysqli_query($conn,$sql6);
if(!$result6)
{
    echo "Error:" .mysqli_error($conn);
    exit;
}

$row6=mysqli_fetch_assoc($result6);
echo "<p><b>Total number of users registered in IT domain:</b>" ."  " .$row6['IT_domain']. "</p>";

//----------------------------------

$sql7= "SELECT COUNT(domain) as Sales_domain FROM users WHERE domain='Sales'";
$result7=mysqli_query($conn,$sql7);
if(!$result7)
{
    echo "Error:" .mysqli_error($conn);
    exit;
}

$row7=mysqli_fetch_assoc($result7);
echo "<p><b>Total number of users registered in Sales domain:</b>" ."  " .$row7['Sales_domain']. "</p>";

mysqli_close($conn);
?>
