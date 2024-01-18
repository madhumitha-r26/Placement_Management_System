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

    <title>VIEW FEEDBACK</title>
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
    background-color:lightgreen;
    border: 2px black solid;
    text-align: center;
  }

  td{
   background-color:lightblue;
   border: 2px black solid;
  }

tr{
    height:auto;
    width: 100%;
    word-wrap: break-word;
    border: 2px black solid;
}

.view{
    display: flex;
    align-items: center;
    justify-content: space-around;
}

table{
    border: 2px black solid;
}
h2{
    text-align: center;
    font-weight: 500;
    text-transform: uppercase;
}
.head1{
        width: 100%;
        height: auto;
        border: none;
        display: flex;
        justify-content:space-around;
        background-color: rgb(5, 2, 2);
        
        }
        
        .head2{
          width: 50%;
          height: auto;
          border: none;
          }
        
        .head3{
            width: 100%;
            height: auto;
            border: none;
            display:inline-block;
            align-items: center;
            justify-content: center;
            }
        
            .head4{
              width: 20%;
              height: auto;
              border: none; 
              display: inline-block;
              background-color: none;
              align-items: end;
              }
        
              .opr1{
                width: 90%;
                height: auto;
                border: none;
                text-align: center;
                }
        
        .logo{
          width: 100%;
          height: 100%;
        }
        
        .logout{
          float: right;
          padding-top: 10px;
          padding-right: 10px;
          text-transform:uppercase;
          text-decoration: none;
          color: rgb(255, 255, 255);
        }
        
        .logout:hover{
          float: right;
          text-transform: uppercase;
          text-decoration: underline;
          color: #ffffff;
        }
        
        .page{
          text-decoration: none;
        }
        
        #user{   
          display: flex;
          align-items: center;
          margin-left: auto;
          margin-top: 10px;
          padding-right: 15px;
          height: 50px;
        }
        
      
        .opr2{
          display: flex;
          border:none;
          justify-content: end;
          width:70%;
          height: auto;
        }
      
        h1{
          text-align: center;
          font-weight: 500;
          text-transform: uppercase;
          color: #ffffff;
      }
</style>

</head>
<body>
<div class="head1">
    <div class="head2">
      <img src="img/project_logo.png" class="logo">
</div>
    
<div class="head3">
  <h1 style="color: aliceblue;">HELLO ADMIN</h1>
    </div>

    <div class="head4">              
        <img src="img/user.jpg" id="user"  style="height: 50px;">
        <a href="login.html" class="logout"> Logout </a>  
    </div>

</div>
<h2>VIEW FEEDBACK</h2>

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

$sql= "SELECT*FROM feedback";
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
<th>Email</th>
<th>Phone</th>
<th>Feedback</th>
</tr>";

while($row=mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
    echo "<td>" . $row['feedback'] . "</td>";
    echo "</tr>";
}

echo "</table>";
echo "</center>";


mysqli_close($conn);
?>
</body>
</html>