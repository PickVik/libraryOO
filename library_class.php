<?php

include 'users.php';
//include 'members.php';
//include 'admin.php';


class Library{
    
    public $books = array();
    public $user = array();
    public $pdo;
    
    
   
    function __construct() {
        $username = "Library";
        $password = "12345";
    try{
        $dsn = "mysql:host=localhost;dbname=test_library";
        $this->pdo = new PDO( $dsn, $username, $password);
        echo "Connected to database and ";        
    } catch (PDOException $e){
        echo "connection to database failed";
        die();
    }       
        

    }
    
    function register($email, $first_name, $second_name, $password){
        $sql = "INSERT INTO user (Email, FirstName, SecondName, Password)
        VALUES ('$email',  '$first_name', '$second_name', '$password')";
        echo $sql;
        $this->pdo->exec($sql);
        
    }
    function login($email, $password){
        
      $sql2 = "SELECT * FROM users WHERE Email='$email' AND Password='$password'";
       
       
       echo $this->pdo->query($sql2);
       
      
      
         echo "Succesful login";
       
    }
        
    function search ($search_term)    {
       echo "searching" ;
       $sql = "SELECT * FROM books";
       $results = $this->pdo->query($sql);
       print_r($results);
       foreach($results as $row) {
           print_r($row);
          
       }
    }
        
      
    }
    
    


// testing connectionlibrary = new Library();
// = new Library();



