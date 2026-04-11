<?php
$username = $password = "";
$usernameErr = $passwordErr = $loginMsg = "";
$validUser = "admin"; $validPass = "12345";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) { $usernameErr = "Username is mandatory"; }
    else { $username = $_POST["username"]; }
    if (empty($_POST["password"])) { $passwordErr = "Password is mandatory"; }
    else { $password = $_POST["password"]; }
    if ($usernameErr == "" && $passwordErr == "") {
        if ($username == $validUser && $password == $validPass) {
            $loginMsg = "Login Successfully done";
        } else { $loginMsg = "Invalid Username or Password, Try again"; }
    }
}
echo "----- Arjun Mehrania -----";
?>
<!DOCTYPE html><html><head><title>Login Form</title></head><body>
<h2>User Login Form</h2>
<form method="post">
    Username: <input type="text" name="username">
    <span style="color:green;">* mandatory field<?php echo $usernameErr; ?></span><br><br>
    Password: <input type="password" name="password">
    <span style="color:blue;">* mandatory field<?php echo $passwordErr; ?></span><br><br>
    <input type="submit" value="Login">
</form><br>
<?php if ($loginMsg != "") { echo "<strong>$loginMsg</strong>"; } ?>
</body></html>
