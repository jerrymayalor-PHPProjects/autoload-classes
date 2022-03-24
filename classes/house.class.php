<?php


class House{

    //Properties or Varaibles
    public $color;
    public $price;

    public function __construct( $color, $price )
    {
        $this->color = $color;
        $this->price = $price;


    }


    // Methods    
    public function setHouseColor( $color ){
        $this->color = $color;
        return $color;
    }

    public function getHouses(){
        return $this->color;
    }

    public function __destruct()
    {
    
    }
}