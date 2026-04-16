<?php
$target_folder="uploads/";
$target_dir= $target_folder . ($_FILES["filetoupload"]["name"]);
$upload=1;
if(isset($_POST["submit"])){
if(file_exists($target_dir)){
$upload=0;
echo "File already existing, " . "destination of file: $target_dir <br>";
}
else if ($upload==1){
if(move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_dir)){
echo "File has been uploaded " . "to : $target_dir <br>  ";
}
else {echo "Error uploading file" . "<br> Error code: " . $_FILES["filetoupload"]["error"];
}}}
$f_name=basename($target_dir);
$f_dir="downloads/".$f_name;
if(file_put_contents($f_dir,file_get_contents($target_dir))){
echo "image has been download at: $f_dir";
}
else {echo"error";}
echo"<br><br> -----Arjun Mehrania-----";
?>
