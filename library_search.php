<?php

    //print_r($_POST);

    include 'library_class.php';

    if (!empty($_POST)) {

        $library = new Library();
        $library->search ($_POST['search_term']);
         
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Library - Search </title>
    </head>
    <body>
        
        <h1>Search for a book - Type in the title or part of a title that you want to search for. Leave search field empty if you want to search for all books in library catalogue </h1>
        
        <form action="" method="post" > 

            <input type="text" name="search_term" /> <br>
            <input type="submit" name="submit" value="Submit" /> 

        </form>
        
        <?php if(!empty($_POST)) { ?>

            <div>
                <h2> You have searched for <?php echo $_POST["search_term"]; ?></h2>
                <h3> Number of results for your search : <?php echo count($library-> books);?></h3>
                <h3> Books that match your search results are :
                <?php 
                    foreach ($library->books as $book) {
                        echo "ID= " . $book -> id;
                        echo "Title= ". $book -> title;
                        echo "ISBN= " . $book -> ISBN;
                        echo "Year Published= ". $book -> year_published;                   
                    }                
                ?>
                </h3>               
            </div>           
        <?php } ?>    
    </body>    
</html>