<?php
    
  class book{
      
      
    public $title;  
    public $ISBN;
    public $year_published;
    public $author;
    public $category;
   
   public function __construct() {
       
    }
    
   public function __construct1($id, $title, $ISBN, $year_published, $author, $category ) {
        $this->id = $id;
        $this->title = $title;
        $this->ISBN = $ISBN;
        $this->year_published = $year_published;
        $this->author = $author;
        $this->category = $category;

  
  function gettitle() {
          return $this->title;
      }

      function getISBN() {
          return $this->ISBN;
      }

      function getyear_published() {
          return $this->year_published;
      }

      function getauthor() {
          return $this->author;
      }

      function getcategory() {
          return $this->category;
      }

      function settitle($title) {
          $this->title = $title;
      }

      function setISBN($ISBN) {
          $this->ISBN = $ISBN;
      }

      function setyear_published($year_published) {
          $this->year_published = $year_published;
      }

      function setauthor($author) {
          $this->author = $author;
      }

      function setcategory($category) {
          $this->category = $category;
      }
  }
  }