<?php
$servername = "localhost";
$username = "20mca013";
$password = "2376";
$dbname = "20mca013";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "UPDATE `student` SET  name='Arya'WHERE id=6";
if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>