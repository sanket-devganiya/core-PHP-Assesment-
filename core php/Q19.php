<!-- Various Patterns: Generate different patterns using loops. -->
 
<?php 

// Define the size of the pattern

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "\n";
}



for ($i = 1; $i <= 5; $i++) {
    for ($j = 5; $j >= $i; $j++) {
        echo "* ";
    }
    echo "\n";
}
         

?>

 