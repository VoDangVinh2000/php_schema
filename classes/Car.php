<?php
namespace Classes;
use Classes\Products;

class Car extends Products{

    // public function print(){
    //     echo sprintf("Name: %s, Type: %s", $this->getName(), $this->getType());
    // }
    public function pastLives(){
        echo sprintf("Name: %s, Type: %s", $this->getName(), $this->getType());
    }
}