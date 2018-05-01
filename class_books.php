<?php

class books{
    
    public $title;
    public $ISBN;
    public $price;
    public $year_published;
    public $current_user;
    
    public function __construct($id, $title, $ISBN, $year_published) {
        $this->id = $id;
        $this->title = $title;
        $this->ISBN = $ISBN;
        $this->year_published = $year_published;
    }
     
    
   public function __construct1() {
        /*$this->id = $id;
        $this->title = $title;
        $this->ISBN = $ISBN;
        $this->price = $price;
        $this->year_published = $year_published;
        $this->current_user= $current_user;*/
              
            
        
    } 
    public function __construct2($id, $title, $ISBN, $price, $year_published, $current_user) {
        $this->id = $id;
        $this->title = $title;
        $this->ISBN = $ISBN;
        $this->price = $price;
        $this->year_published = $year_published;
        $this->current_user= $current_user;
               
         
    } 
    
    public function get_id() {
        return $this->id;
    }

    public function get_title() {
        return $this->title;
    }

    public function get_ISBN() {
        return $this->ISBN;
    }

    public function get_price() {
        return $this->price;
    }

    public function get_year_published() {
        return $this->year_published;
    }

    public function get_current_user() {
        return $this->current_user;
    }
}
    /*public function set_id($id) {
        $this->id = $id;
    }

    function set_title($title) {
        $this->title = $title;
    }

    function set_ISBN($ISBN) {
        $this->ISBN = $ISBN;
    }

    function set_price($price) {
        $this->price = $price;
    }

    function set_year_published($year_published) {
        $this->year_published = $year_published;
    }

    function set_current_user($current_user) {
        $this->current_user = $current_user;
    }*/

    
    
    
         