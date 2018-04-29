

<?php



include 'library_class.php';

if (!empty($_POST)) {
    if ($_POST['submit'] == 'Register'){

        $library = new Library();

        $library->register($_POST['email'], $_POST['firstname'], $_POST['secondname'], $_POST['password']);
                   

    }
}
?>







<!DOCTYPE html>


<html>
    <head>
        <title>Library - Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
     
        
        
        <h1>Welcome to the library!</h1>
        <h2>Please register</h2>
        
    <form action="" method="post" > 
        
        
    Email Address: <input type="email" name="email" /> <br>
    Password: <input type="password" name="password" /> <br>
    First Name: <input type="text" name="firstname" /> <br>
    Second Name: <input type="text" name="secondname" /> <br>
   
    <input type="submit" name="submit" value="Register" /> 
    </form>
   
        
    </body>
</html>
