<?php
$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_name="pms";

$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "DELETE FROM job WHERE job_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $id);

if ($stmt->execute()) {
    echo '<script>' .
      'alert("Job record is deleted");' .
      'window.location.href="view_job.php";' .
      '</script>';
} else {
    echo '<script>' .
    'alert("Job record is not deleted");' .
    'window.location.href="view_job.php";'  .
    '</script>'. $stmt->error;
}

$stmt->close();

?>
