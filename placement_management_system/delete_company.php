<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "DELETE FROM company WHERE job_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $id);

if ($stmt->execute()) {
    echo '<script>' .
      'alert("Company record is deleted");' .
      'window.location.href="view_company.php";' .
      '</script>';
} else {
    echo '<script>' .
    'alert("Company record is not deleted");' .
    'window.location.href="view_company.php";'  .
    '</script>'. $stmt->error;
}

$stmt->close();

?>