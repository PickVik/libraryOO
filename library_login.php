<?php

session_start();

include 'library_class.php';

if (!empty($_POST)) {
    if ($_POST['submit'] == 'Login'){

        $library = new Library();

        $library->login ($_POST['email'], $_POST['password']);
                   

    }
}


?>






<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Library - Login</title>
    </head>
    <body>
        
        
        
           <h1>Welcome to the library!</h1>
        <h2>Please login</h2>
        
    <form action="" method="post" > 
        
        
    Email Address: <input type="email" name="email" /> <br>
    Password: <input type="password" name="password" /> <br>
   
   
    <input type="submit" name="submit" value="Login" /> 
    
    
    </form>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
