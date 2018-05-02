<?php

include 'book_class.php';

if (!empty($_POST)) {
    if ($_POST['submit'] == 'Insert'){
        
        $Book = new Books();

        $Book->insert($_POST['title'], $_POST['ISBN'], $_POST['year_published'], $_POST['author'], $_POST['category']);
                   

    }

    
}
?>


<!DOCTYPE html>


<html>
    <head>
        <title>Library - Insert Books</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
     
        
        
        <h1>Welcome to the library!</h1>
        <h2>Please insert a new book!</h2>
        
    <form action="" method="post" > 
        
        
        Book title: <input type="text" name="title" /> <br><br>
    ISBN:           <input type="int" name="ISBN" /> <br><br>
    Year published: <input type="int" name="year_published" /> <br><br>
    Author:         <input type="text" name="author" /> <br><br>
    Category:       <input type="text" name="category" /> <br><br>
                    <input type="submit" name="submit" value="Insert" /> 
    </form>
   