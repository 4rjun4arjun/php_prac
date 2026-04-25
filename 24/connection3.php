<?php
$srvr="127.0.0.1";
$user="root";
$pass="redwood";
$connecting=new mysqli($srvr,$user,$pass);
if($connecting -> connect_error){
echo "Erorr: ".$connecting -> connect_error;
}
else if($connecting){
echo"connection established successfully";
$q1="Create database records;";
$connecting->query($q1);
}
?>
