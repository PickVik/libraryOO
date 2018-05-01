<?php

    print_r($_POST);

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
        
        <h1>Search for a book</h1>
        
        <form action="" method="post" > 

            <input type="text" name="search_term" /> <br>
            <input type="submit" name="submit" value="Submit" /> 

        </form>
        
        <?php if(!empty($_POST)) { ?>

            <div>
                <h3> Results for your search of <?php echo $_POST["search_term"]; ?></h3>
                <h2> Number of results <?php echo count($library-> books);?></h2>
                <?php var_dump($library->books);?>
                <h2> Your search results are <?php echo $library-> books["0"] -> title;?></h2>
            </div>   
        
        
        
        <?php } ?>
         
        
        
    </body>    
    
</html>