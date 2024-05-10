<?php

$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_name="pms";

$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'];

$sql = "SELECT * FROM company WHERE job_id='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
} else {
    echo "Error: " . mysqli_error($conn);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $job_id = $_POST['job_id'];
    $name = $_POST['name'];
    $role = $_POST['role'];
    $domain = $_POST['domain'];
    $salary = $_POST['salary'];
    $location = $_POST['location'];
    $description = $_POST['description'];
    $link = $_POST['link'];

    $sql = "UPDATE company SET name='$name', role='$role', domain='$domain', salary='$salary', location='$location', description='$description', link='$link' WHERE job_id='$job_id'";

    if (mysqli_query($conn, $sql)) {     
        echo '<script>' .
        'alert("Job record is updated");' .
        'window.location.href="view_company.php";' .
        '</script>';
        
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/add_company.css">
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

    <title>Edit Company</title>

    <style>
    .btn>a{
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
     
</style>
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
    <center>
        <h2>EDIT COMPANY</h2> 
    </center>

    <br>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div id="add">
    
    <input type="hidden" name="job_id" value="<?php echo $row['job_id']; ?>"class="form_elements">

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?php echo $row['name']; ?>" required class="form_elements"><br>

        <label for="role">Role:</label>
        <input type="text" name="role" id="role" value="<?php echo $row['role']; ?>" required class="form_elements"><br>

        <label for="domain">Domain:</label>
        <select name="domain" id="domain" required class="form_elements">
            <?php
                $domains= array("IT", "Management", "Sales");
                foreach ($domains as $domain) 
                {
                    echo "<option value='". $domain. "'>". $domain. "</option>";
                }
            ?>
        </select><br>

        <label for="salary">Salary:</label>
        <input type="number" name="salary" id="salary" value="<?php echo $row['salary']; ?>" required class="form_elements"><br>

        <label for="location">Location:</label>
        <input type="text" name="location" id="location" value="<?php echo $row['location']; ?>" required class="form_elements"><br>

        <label for="description">Description:</label>
        <textarea style="height: 100px;" name="description" id="description" class="form_elements" required><?php echo $row['description']; ?></textarea><br>

        <label for="link">Link:</label>
        <input type="url" name="link" id="link" class="form_elements" value="<?php echo $row['link']; ?>" required><br>

        <button type="submit">UPDATE JOB</button>
    </div>
    </form>
    <br>  
      <div class="view">        
        <a href="view_company.php">
            <button style="width: 500px; border-radius: 5px;">BACK</button></a>
       
    </div>
</body>
</html>
