<?php
$text = "Hello, My name is Arjun and my roll number is 018";
// 1. Using metacharacters (^ and $)
if (preg_match("/Hello/", $text)) {
    echo "The string starts with Hello<br>";
}
if (preg_match("/\d+/", $text)) {
    echo "Yes, it contains numbers<br>";
}
if (preg_match("/[A-Z]/", $text)) {
    echo "Yes, it contains uppercase letters<br>";
}
if (preg_match("/\d{3}/", $text)) {
    echo "Yes, it contains exactly 3 digits<br>";
}
if (preg_match("/Hello|Hi/", $text)) {
    echo "Yes it contains Hello or Hi<br>";
}
if (preg_match("/hello/i", $text)) {
    echo "Case-insensitive match found<br>";
}
echo "----- Actual string is: $text -----";
?>
