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
        
        
        
      
    }
    
    


// testing connectionlibrary = new Library();
// = new Library();



