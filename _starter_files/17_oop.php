<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/
class Animal {
  // public $name;
  // public $type;
  // public $behaviour;

  public function __construct($name, $type){
    $this->name = $name;
    $this->type = $type;
    $this->behaviour = 0;
  }
  
  function get_name(){
    return $this->name;
  }

  function get_type(){
    return $this->type;
  }

  function get_behaviour(){
    return $this->behaviour;
  }

  function set_behaviour($x=1){
    $this->behaviour += $x;
  }
}


$qoplon = new Animal("Qoplon", "dog");
// echo $qoplon->get_behaviour();//0


class Cat extends Animal {
  public function __construct($name, $type, $ownerName){
    parent::__construct($name, $type);
    $this->ownerName = $ownerName;
  }  
}