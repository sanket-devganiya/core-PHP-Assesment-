<!-- Explain the difference between include and require in PHP -->

<?php 

/*
* Include and Require in PHP

* Both include and require are used to include and execute PHP code from external files, 
but they have some key differences:
    *   1.  Include: 
                --> The include statement includes and evaluates the specified file. If th
                    e file is not found, it will throw a warning and continue execution of the script. It is
                    used when we want to include a file but do not want the script 
                    to stop if the file is not found.
    *   2.  Require: 
                --> The require statement also includes and evaluates the specified file.
                    If the file is not found, it will throw a fatal error and stop the execution of th
                    e script. It is used when we want to include a file and want the script to stop
                    if the file is not found.
*/
?>