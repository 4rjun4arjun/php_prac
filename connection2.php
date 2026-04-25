<?php
$srvr="127.0.0.1";
$user="root";
$password="redwood";
$con1=new mysqli($srvr,$user,$password);
if($con1 -> connect_error){
echo "error: ". $con1->connect_error;
}
else{
$queryy="Use myDB";
$queryy2="drop database myDB";
$queryy3="create database MineDB";
$con1->query($queryy);
$con1->query($queryy2);
$con1->query($queryy3);
}
?>
