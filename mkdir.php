<?php
$folder_name= "uploaded_files";
if(file_exists($folder_name)){
echo"folder already exists";
}
else {
mkdir($folder_name);
echo"folder has been created! <br>";
}

?>
