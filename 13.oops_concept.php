<?php
class Person {
    protected $name; protected $age;
    public function __construct($name, $age) {
        $this->name = $name; $this->age = $age;
    }
    public function getDetails() {
        return "Name: " . $this->name . ", Age: " . $this->age;
    }
    public function getRole() { return "I am a person."; }
}
class Student extends Person {
    private $course;
    public function __construct($name, $age, $course) {
        parent::__construct($name, $age); $this->course = $course;
    }
    public function getRole() {
        return "I am a Bachelor student of ".$this->course;
    }
}
class Teacher extends Person {
    private $subject;
    public function __construct($name, $age, $subject) {
        parent::__construct($name, $age); $this->subject = $subject;
    }
    public function getRole() {
        return "I am a professor of Bachelors in " . $this->subject;
    }
}
$student = new Student("Arjun", 18, "Computer applications");
$teacher = new Teacher("Nitin", 81, "Arts");

echo "<h2>Concept of Object Oriented Programming in PHP</h2>";
echo "<h3>Student details:</h3>";
echo $student->getDetails() . "<br>";
echo $student->getRole() . "<br>";
echo "<h3>Teacher details:</h3>";
echo $teacher->getDetails() . "<br>";
echo $teacher->getRole() . "<br>";
echo "----- Arjun Mehrania -----";
?>
