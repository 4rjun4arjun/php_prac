<html>
<head><title>Test program</title></head>
<body>
<p><?php echo "local php working"; ?></p>
<!-- input form -->
<form method="POST" enctype="multipart/form-data" action="thirdfile.php">
<h1>Records Modification database</h1>
<p>Enter your name: <input type="text" name="nametxt"></p>
<p>Enter your course: <input type="text" name="coursetxt"> </p>
<p>Which table to insert the data: <input type="text" name="tbltxt"> </p>
<p><input type="submit" name="sbt"></p>

<?php 
$name=$_POST["nametxt"];
$Course=$_POST["coursetxt"];
$table=$_POST["tbltxt"];
$srvr="127.0.0.1";
$usr="root";
$pss="redwood";
$connec=new mysqli($srvr,$usr,$pss, "records");
if($connec->connect_error){
echo "Error: ".$connec->connect_error; }

function verificate($connec,$name,$Course,$table){
echo "<h3>Verify your inputs</h3>";
if($connec->connect_error){
echo "Error: ".$connec->connect_error;
die();
}
echo "The Name to be inserted: <b>$name</b>";
echo "<br>The Course to be inserted: <b>$Course</b>";
echo "<br>Chosen table: <b>$table</b>";
//echo "<h4>Connection to mysql established!</h4>";
$connec->query("CREATE table if not exists $table (Name varchar(10), Course varchar(10));");
}
if(isset($_POST["sbt"])){
//verificate($connec,$name,$Course,$table);
mysqli_close($connec);
}
?>
</form>
<hr>


</body>
</html>
