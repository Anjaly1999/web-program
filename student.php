<?php
$servername = "localhost";
$username = "20mca013";
$password = "2376";
$dbname = "20mca013";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `student` (`id`, `name`, `branch`) VALUES (NULL, 'Anitha', 'Mca');";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>