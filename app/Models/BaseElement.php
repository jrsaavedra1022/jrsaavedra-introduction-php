<?php

namespace App\Models;
//imports
require_once 'Printable.php';
// app class job
class BaseElement implements Printable {
    // private $title;
    //protected para poder acceder desde la herencia a la variable
    protected $title;
    public $description;
    public $visible = true;
    public $months;
  
    public function __construct($title, $description){
      $this->setTitle($title);
      $this->description = $description;
    }
  
    public function setTitle($title){
      if($title == ''){
        $this->title = 'N/A';
      }else{
        $this->title = $title;
      }
    }
    
    public function getTitle(){
      return $this->title;
    }
  
    public function getDurationAsString() {
      $years = floor($this->months / 12);
      $extraMonths = $this->months % 12;
    
      return "$years years $extraMonths months";
    }

    public function getDescription(){
        return $this->description;
    }
  
  }