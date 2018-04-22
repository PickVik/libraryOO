<?php


class User {
    
    public $name;
    public $email;
 //   public $type;
    
    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
 //       $this->type = $type;
        
       
    }
    public function get_Type(){
        return $this->type;
    }
    
    public function get_Name() {
        return $this->name;
    }
   
    
}



class Admin extends User {
    
        
   public $type = 'Admin';
    public $permissionlevel;

    
    public function __construct($name, $email, $persmissionlevel) {
      parent::__construct($name, $email);
      $this->permissionlevel = $persmissionlevel;
        
       
    }
    
    public function get_Type(){
        return 'Hello from ' . parent::get_Type();
    }
   
}

class Member extends User {
    
        
   public $type = 'Member';
 
    public $dateadded;

    
    public function __construct($name, $email, $dateadded) {
      parent::__construct($name, $email);
     
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