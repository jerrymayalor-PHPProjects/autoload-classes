<?php

namespace Person;

class Person{

    //Properties or Varaibles
    public $name;
    public $last;
    public $age;

    public function __construct( $name, $last, $age )
    {
        $this->name = $name;
        $this->last = $last;
        $this->age = $age;

    }


    // Methods    
    public function setName( $name ){
        $this->name = $name;
        return $name;
    }

    public function getName(){
        return $this->name;
    }

    public function __destruct()
    {
    
    }
}