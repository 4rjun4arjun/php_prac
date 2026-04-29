<?php
$srvr="127.0.0.1";
$user="root";
$pass="redwood";
$connecting=new mysqli($srvr,$user,$pass,"records");
if($connecting -> connect_error){
echo "Erorr: ".$connecting -> connect_error;
}
else if($connecting){
echo"connection established successfully";
if(isset($_POST["sbt"])){
$course_form=$_POST["coursetxt"];
$name_form=$_POST["nametxt"];
echo " :: POST ACCESSED<br>";
$q2="Create table IF NOT EXISTS student(Name varchar(10), Course varchar(10))";
echo "Table created successfully<br>";
$q3="Insert into student values('$name_form','$course_form')";
$connecting->query($q2);
if($connecting->query($q3)){
        echo "Records inserted successfully<br>";
    } else {
        echo "Error: " . $connecting->error;
    }}
}
?>
