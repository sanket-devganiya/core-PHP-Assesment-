<!-- Q10 Simple Calculator: Create a calculator using if-else conditions that takes twoinputsand an operator (+, -, *, /). -->

<?php 

//  Simple Calculator: Create a calculator using if-else conditions

$a = 10;
$b = 30;
$operator = '+';
if( $a == $b ) {
    echo "Both numbers are equal";
} else if( $operator == '+' ) {   
    $result = $a + $b;
    echo "Result: $result";
    } else if( $operator == '-' ) {
        $result = $a - $b;
        echo "Result: $result";
        } else if( $operator == '*' ) {
            $result = $a * $b;
            echo "Result: $result";
            } else if( $operator == '/' ) {
                if ($b != 0) {
                    $result = $a / $b;
                    echo "Result: $result";
                    } else {
                        echo "Error! Division by zero is not allowed.";
                        }
                    }
?>