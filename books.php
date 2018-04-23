<?php


class books{

    function get_author() {
        return $this->author;
    }

    function set_author($author) {
        $this->author = $author;
    }

    var $author;
    
    
    function get_title() {
        return $this->title;
    }

    function set_title($title) {
        $this->title = $title;
    }

    var $title;
   
    
    function get_ISBN() {
        return $this->ISBN;
    }

    function set_ISBN($ISBN) {
        $this->ISBN = $ISBN;
    }

    var $ISBN;
    function get_category_type() {
        return $this->category_type;
    }

    function set_category_type($category_type) {
        $this->category_type = $category_type;
    }

    var $category_type;
    
    
    
    
    
    
}


