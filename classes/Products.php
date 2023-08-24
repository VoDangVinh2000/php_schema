<?php
namespace Classes;


abstract class Products{
    public $name, $color;
    protected $type;

    abstract public function pastLives();
    public function __construct($name, $color, $type)
    {
        $this->name = $name;
        $this->color = $color;
        $this->type = $type;
    }

    public function getName(){
        return $this->name;
    }

    public function getColor(){
        return $this->color;
    }

    public function getType(){
        return $this->type;
    }

    public function setType($type){
        $this->type = $type;
    }

    public function print(){
        echo sprintf("Color: %s, Name: %s, Type: %s", $this->getColor(), $this->getName(), $this->getType());
    }
    // public function where(){
    //     echo 'Product: where';
    // }

}