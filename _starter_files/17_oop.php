<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/
class Animal {
  public $name;
  public $type;
  public $behaviour;

  public function __construct($name, $type){
    $this->name = $name;
    $this->type = $type;
    $this->behaviour = 0;
  }
  

}