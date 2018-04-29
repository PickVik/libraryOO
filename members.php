<?php

class Member extends Users {
    
    public $id;
    public $registerdate;
    public $book_limit;
    
    
    function __construct1($email, $first_name, $second_name, $password, $id, $registerdate, $book_limit) {
        parent::__construct($email, $first_name, $second_name, $password);
        $this->id = $id;
        $this->registerdate = $registerdate;
        $this->book_limit = $book_limit;
    }

    
    
    
    
    
    function get_book_limit() {
        return $this->book_limit;
    }

    function set_book_limit($book_limit) {
        $this->book_limit = $book_limit;
    }

    
    function get_id() {
        return $this->id;
        
    }
    
    function get_registerdate() {
        return $this->registerdate;
    }

    function set_registerdate($registerdate) {
        $this->registerdate = $registerdate;
    }

  
    
    // check if admin or not
    
    function check_if_admin(){
        return FALSE;
    }
   
    
    function borrow_books(){
        
    }
    
    
    function change_password(){
        
    }
        
}