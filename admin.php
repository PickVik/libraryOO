<?php



class Admin extends Member {
   
   public $lastvisited;
   
       function __construct1($email, $first_name, $second_name, $password, $id, $registerdate, $book_limit, $lastvisited) {
        parent::__construct($email, $first_name, $second_name, $password, $id, $registerdate, $book_limit);
        $this->lastvisited = $lastvisited;
    }
    
    function check_if_admin(){
        return TRUE;
    }
    
    
    function create_admin(){
        
    }
    
    
    function add_books(){
        
    }
    
    function remove_books(){
        
    }
    
    function warn_members(){
        
   
    }
    
    function delete_members(){
        
    }
    
}