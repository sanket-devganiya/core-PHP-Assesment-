<!-- Discuss the difference between for loop, foreach loop, and do-while loop in PHP. -->

<?php 
/* 

    for loop:
        --> Known iteration count
        --> Used for arrays, objects, and strings
        --> Syntax:
         for (init; condition; increment)
          { code to be executed }
        --> Condition Checked  Before loop

    foreach : 
        --> Iterating over arrays/objects
        --> Syntax: 
            foreach ($array as $value)
            { code to be executed }
         --> Condition Checked Automatically
    
    do-while : 
        --> Guaranteed single execution
        --> Syntax:
            do {
            code to be executed
            }
            while (condition);
        --> Condition Checked After loop

*/

?>