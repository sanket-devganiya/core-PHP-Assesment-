<!-- Write a script to perform various string operations like concatenation, substringextraction, and string length determination. -->

<?php 

// string concatenation
$f_name = "John";
$l_name = "Doe";
$full_name = $f_name . " " . $l_name;
echo $full_name; 

// substringextraction
$full_name = "John Doe";
$f_name = substr($full_name, 0, 4);
echo $f_name; 

// string length determination
$full_name = "John Doe";
$len = strlen($full_name);
echo $len; 

?>