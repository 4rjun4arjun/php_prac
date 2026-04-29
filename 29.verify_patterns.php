<!DOCTYPE html>
<html>
<body>
<form method="POST">
Enter your Email ID password :
<input type="text" name="txtdata">
<input type="submit" name="submit" value="Check">
</form>
<?php
if(isset($_POST["submit"])){
$text = $_POST["txtdata"];
$pattern = "/^[A-Za-z]+$/";
$pattern2 = "/^[0-9]+$/";
$pattern3 = "/^[a-zA-Z0-9]+$/";
if(preg_match($pattern, $text)){
echo "Consider adding some numbers : Weak password";
}
else if(preg_match($pattern2, $text)){
echo "Consider adding some alphabets : Weak password";
}
else if(preg_match($pattern3, $text)){
echo "You have an Alpha Numeric password : strong password";
}
else{
echo "That doesn't look like a password";
}
}
?>

</body>
</html>
