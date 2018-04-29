<?php


abstract class Users {
    
    
//username
    public $email;
    public $first_name;
    public $second_name;
    public $password;
    
    //it can only be called from the extended class - cannot call "new" on it
     function __construct() {
       
    }
    //it can only be called from the extended class - cannot call "new" on it
    function __construct1($email, $first_name, $second_name, $password) {
        $this->email = $email;
        $this->first_name = $first_name;
        $this->second_name = $second_name;
        $this->password = $password;
    }
    

    function get_email() {
        return $this->email;
    }

    function get_first_name() {
        return $this->first_name;
    }

    function get_second_name() {
        return $this->second_name;
    }

    function get_password() {
        return $this->password;
    }

    
   

    function set_email($email) {
        $this->email = $email;
    }

    function set_first_name($first_name) {
        $this->first_name = $first_name;
    }

    function set_second_name($second_name) {
        $this->second_name = $second_name;
    }

    function set_password($password) {
        $this->password = $password;
    }

     
                
    abstract function check_if_admin();
    
    
}

