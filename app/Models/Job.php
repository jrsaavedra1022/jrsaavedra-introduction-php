<?php

namespace App\Models;
use  Illuminate\Database\Eloquent\Model;
// imports
// doesn't is necesary import BaseElement, because composer resolve routes
// require_once 'BaseElement.php';
// herencia en php
// class Job extends BaseElement{
class Job extends Model{
    protected $table = 'jobs';
    
    #Herencia
    // public function __construct($title, $description){
    //     // heredar el contructor de padre y recibir mas datos
    //     $newTitle = 'Job: ' .$title;
    //     parent::__construct($newTitle, $description);
    // }
    public function getDurationAsString() {
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
      
        return "Job duration: $years years $extraMonths months";
    }

}