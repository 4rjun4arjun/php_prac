<html>
<head><title>Test program</title></head>
<body>
<p><?php echo "local php working"; ?></p>
<form method="POST" enctype="multipart/form-data">

<h1>Records Modification database</h1>
<p>Enter your name: <input type="text" name="nametxt"></p>
<p>Enter your course: <input type="text" name="coursetxt"> </p>
<p><input type="submit" name="sbt"></p>
<?php 
$name=$_POST["nametxt"];
echo "if statement working<br> $name";

?>
</form>
</body>
</html>
