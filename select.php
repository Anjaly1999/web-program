<?php
$servername = "localhost";
$username = "20mca013";
$password = "2376";
$dbname = "20mca013";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT `id`, `name`, `branch` FROM `student`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Branch</th>
</tr>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['branch']."</td>";
echo "</tr>";
  }

} else {
  echo "0 results";
}
echo "</table>";
mysqli_close($conn);
?>