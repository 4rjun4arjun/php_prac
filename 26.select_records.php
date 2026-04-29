<?php
$srvr = "127.0.0.1";
$user = "root";
$pass = "redwood";
$db = "records";
$con = new mysqli($srvr, $user, $pass, $db);
if($con->connect_error){
die("Connection Failed");
}
else{ 
echo "Connected to the Database;<br><br><hr><br>"; 
}
$result = $con->query("SELECT * FROM student");
echo "<table border='1' cellpadding='8'>";
echo "<tr><th>Name</th><th>Course</th></tr>";
while($row = $result->fetch_assoc()){
echo "<tr>";
echo "<td>".$row["Name"]."</td>";
echo "<td>".$row["Course"]."</td>";
echo "</tr>";
}
echo "</table>";
$con->close();
?>
