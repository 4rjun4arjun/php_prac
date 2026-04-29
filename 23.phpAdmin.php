<html>
<body>
<h2>Upload And Display Image in PHP</h2>
<form method="POST" enctype="multipart/form-data">
Select Image:
<input type="file" name="imgfile">
<input type="submit" name="submit" value="Upload">
</form>
<?php
if(isset($_POST["submit"])){
$folder = "22/";
$file = $folder . basename($_FILES["imgfile"]["name"]);
if(move_uploaded_file($_FILES["imgfile"]["tmp_name"], $file)){
echo "<br>Image Uploaded Successfully<br><br>";
echo "<img src='$file' width='500' height='300'>";
}
else{
echo "Image not uploaded";
}}
?>
</body>
</html>
