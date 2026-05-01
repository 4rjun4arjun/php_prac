<!DOCTYPE html>
<html>
<head>
<title>phpMyAdmin Practical</title>
</head>
<body>

<h2>Use phpMyAdmin and Perform the Following</h2>

<h3>1. Import Database</h3>
<p>
Open phpMyAdmin → Select Database → Click Import tab → Choose .sql or .csv file → Click Go.
</p>

<h3>2. Review Data and Structure</h3>
<p>
Select Database → Select Table.
</p>
<p>
Click Browse tab to view records.<br>
Click Structure tab to view columns, datatype, primary key, indexes.
</p>

<h3>3. Run SQL Statements</h3>
<p>
Select Database or Table → Click SQL tab → Enter query and execute.
</p>

<pre>
SELECT * FROM student;

INSERT INTO student(Name, Course)
VALUES('Arjun','BCA');

UPDATE student
SET Course='MCA'
WHERE Name='Arjun';

DELETE FROM student
WHERE Name='Arjun';
</pre>

<h3>4. Create Users and Privileges</h3>
<p>
Home page of phpMyAdmin → User Accounts → Add User Account.
</p>

<p>
Enter Username, Host Name, Password.
</p>

<p>
Select privileges like:
</p>

<ul>
<li>SELECT</li>
<li>INSERT</li>
<li>UPDATE</li>
<li>DELETE</li>
<li>ALL PRIVILEGES</li>
</ul>

<p>
Click Go to create user.
</p>

<h3>SQL Command for User Creation</h3>

<pre>
CREATE USER 'student1'@'localhost'
IDENTIFIED BY '1234';

GRANT ALL PRIVILEGES
ON records.*
TO 'student1'@'localhost';

FLUSH PRIVILEGES;
</pre>

</body>
</html>
