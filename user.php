<?php


class User {
    
    public $id;
    public $email;
    public $first_name;
    private $second_name;
    private $password;
    public $book_limit = 5;


    //   public $type;
   // $id, $email, $first_name, $second_name, $password, $book_limit
    public function __construct($id, $email, $first_name, $second_name, $password, $book_limit) {
        $this->id = $id;
        $this->email = $email;
        $this->name = $first_name;
        $this->second_name = $second_name;
        $this->password = $password;
        $this->book_limit = $book_limit;
      
 //       $this->type = $type;
        
       
    }
    public function get_Type(){
        return $this->type;
    }
    public function get_id() {
        return $this->id;
    }
    public function get_First_Name() {
        return $this->name;
    }
   public function get_Email (){
       return $this->email;
       
   }
  /* This is not working correctly yet
   * public function get_Book_limit(){
    
       
       if (!empty($book_limit = 5)) {
           return "Warning; You cannot borrow more than 5 books";
     
       }
         
            
   }*/
    
}
class Admin extends User {
    
        
   public $type = 'Admin';
    public $permissionlevel;
    
    
    public function __construct($id, $email, $first_name, $second_name, $password, $book_limit, $persmissionlevel) {
      parent::__construct($id, $email, $first_name, $second_name, $password, $book_limit);
      $this->permissionlevel = $persmissionlevel;
        
       
    }
    
    public function get_Permissionlevel() {
   
        
        if (!empty($permissionlevel = 3)){
            return "Your are a librarian! ";
        }
        else{
            return "You do not have permission";
        }
            
    }
    
    public function get_Type(){
        return 'Hello from ' . parent::get_Type();
    }
   
}
class Member extends User {
    
        
   public $type = 'Member';
 
    public $dateadded;
    
    public function __construct($id, $email, $first_name, $second_name, $password, $book_limit, $dateadded) {
      parent::__construct($id, $email, $first_name, $second_name, $password, $book_limit);
     
      $this->dateadded = $dateadded;  
       
    }
    
   
}
   
/*    == USERS ==
    
    -names
    -emails
    
    Admin / librarian
    -permission level
    
    Members / guest
    -date added*/
/* Practise with user class
class User {
    
    public $age;
    
    private $password;
    
    public function __construct($age) {
        $this->age = $age;
        $this->password = '1234';
    }
    
    
 
    
    
    //print age - adding in value to variable from index.php
    public function getAge() {
        
        echo 'Age: ' . $this->age;
        
    }
    
    
    
    
    
     // make password visible if hint is correct
      
    public function getPassword($hint){
        
        if ($hint == 'getit'){
            return $this->password;
        }
        else {
            return 'you don\'t have permission';
        }
    }
}
*/