<?php
$link_image="to_upload/post_method.png";
$f_name=basename($link_image);
if(file_put_contents($f_name,file_get_contents($link_image))){
echo "image is downloaded";

}
?>
