<?php

include 'library_books.php';

class Books{
    
    public $books = array();
   
    public $pdo;

    
    function __construct() {
        
        $username = "root";
        $password = "";
    try{
        $dsn = "mysql:host=localhost;dbname=library";
        $this->pdo = new PDO( $dsn, $username, $password);
        echo "Connected to database and ";        
    } catch (PDOException $e){
         die();
    }       
        

    }
    
    function insert($title, $ISBN, $year_published, $author, $category){
        $sql = "INSERT INTO library_books (title, ISBN, year_published, author, category )
        VALUES ('$title', '$ISBN', '$year_published', '$author', '$category')";
        echo $sql;
        $this->pdo->exec($sql);
        
    }
}