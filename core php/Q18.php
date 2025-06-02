<!-- Chessboard Pattern: Use a nested loop to create a chessboard pattern (8x8 grid). -->

<?php 

for ($i = 0; $i < 8; $i++) {
    for ($j = 0; $j < 8; $j++) {
            if (($i + $j) % 2 == 0) {
            echo "*";
            } else {
            echo "$";
            }
    }
    echo "\n"; 
}


?>

