<?php

print_r($_POST)

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
                <h3> Results for <?php echo $_POST["search_term"]; ?></h3>
            </div>    
        <?php } ?>
        
        
        
        
    </body>    
    
</html>