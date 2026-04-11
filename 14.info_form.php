<?php
$name = $email = $gender = $course = ""; $methodUsed = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") { $methodUsed = "POST"; }
elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['submit'])) { $methodUsed = "GET"; }
if (isset($_REQUEST['submit'])) {
    $name   = $_REQUEST['name'];   $email  = $_REQUEST['email'];
    $gender = $_REQUEST['gender']; $course = $_REQUEST['course'];
}
echo "----- Arjun MEhrania -----";
?>
<!DOCTYPE html><html><head><title>Information Form</title></head><body>
<h2>Personal Info Form</h2>
<form method="get">
    <h3>Submit using GET</h3>
    Name of the cadidate:<input type="text" name="name"><br><br>
    mail of candidate:<input type="email" name="email"><br><br>
    Gender of candidate: <input type="radio" name="gender" value="Male"> Male
           <input type="radio" name="gender" value="Female"> Female<br><br>
    Course pursuing: <select name="course">
        <option value="BCA">BCA</option><option value="BBA">BBA</option>
<option value="na" selected>Choose here</option>
        <option value="MCA">MCA</option></select><br><br>
    <input type="submit" name="submit" value="Submit via GET">
<p>----------<p/>
</form>
<form method="post"><h3>Submit using POST</h3>
    Name of the candidate:<input type="text" name="name"><br><br>
    mail id of the candidate :<input type="email" name="email"><br><br>
    Gender: <input type="radio" name="gender" value="Male"> Male
           <input type="radio" name="gender" value="Female"> Female<br><br>
    Course pursuing: <select name="course">
        <option value="BCA">BCA</option><option value="BBA">BBA</option>
<option value="naa" selected>Choose here</option>
        <option value="MCA">MCA</option></select><br><br>
    <input type="submit" name="submit" value="Submit via POST">
<p>----------</p></form>
<?php if (isset($_REQUEST['submit'])) {
    echo "<strong>Method Used:</strong> " . $methodUsed . "<br>";
    if ($methodUsed == "GET")  { echo "Using $_GET - Name: ".$_GET['name']."<br>"; }
    if ($methodUsed == "POST") { echo "Using $_POST - Name: ".$_POST['name']."<br>"; }
    echo "Using $_REQUEST - Name: $name, Email: $email, Gender: $gender, Course: $course";
} ?>
</body></html>
