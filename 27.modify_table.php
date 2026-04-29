<?php
$servername = "127.0.0.1";
$username = "root";
$password = "redwood";
$conn = new mysqli($servername, $username, $password, "records");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$q1 = "alter table student add column age int;";
$q2 = "alter table student modify column name varchar(20);";
$q3 = "alter table student drop column age;";
if ($conn->query($q1) === TRUE) {
  echo "New column 'age' added in the table<br>";
} else{ echo "Error " . $conn->error; }
if ($conn->query($q2) === TRUE) {
  echo "'Name' column has been modified<br>";
} else{ echo "Error " . $conn->error; }
if ($conn->query($q3) === TRUE) {
  echo "Column 'age' has been dropped";
} else{ echo "Error " . $conn->error; }
$conn->close();
?>
