<!-- Q2 What are the rules for naming variables in PHP? -->

<?php 

/* Rules for Naming Variables in PHP  

 a) Start with a $ sign
  --> All variables must begin with a dollar sign:

    example : $name = "Alice";


   b) Must begin with a letter or underscore (_) after the $

    => Valid:
    --> $username 
        $_temp

    => Invalid: 
    --> $1user  // Starts with a number

    c) Can contain letters, numbers, and underscores

    --> Examples: $user1
                  $user_name
    
    d) Case-sensitive
    --> $Name = "Alice";
        $name = "Bob";
        echo $Name; // Outputs: Alice

    e) No spaces or special characters other than _

    --> Invalid: 
    --> $user-name  //  hyphens are not allowed
        $user name  //  spaces are not allowed
*/ 





?> 