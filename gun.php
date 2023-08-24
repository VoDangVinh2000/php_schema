<?php

class Gun extends BulletType implements GunInterface{
    public $id;
    public $name;
    public $bulletTypeID;
    public function __construct($id, $name, $bulletTypeID)
    {
        $this->id = $id;
        $this->name = $name;
        $this->bulletTypeID = $bulletTypeID;
    }
    public function soundBoom(Gun $gun)
    {
        var_dump($gun);
    }
    public function getName(){
        return $this->name;
    }
    public function getBulletTypeID(){
        return $this->bulletTypeID;
    }
    // public function getCategoryName(){
    //     if($this->bulletTypeID == 12){
    //         return 'Dan giay';
    //     }
    //     if($this->bulletTypeID == 14){
    //         return 'Dan sat';
    //     }
    // }
}

class BulletType{
    public $id;
    public $name;
    
    public function getCategoryName($id){
        $this->id = $id;
        if($this->id == 12){
           echo $this->name = 'Dan giay';
        }
        if($this->id == 14){
           echo $this->name = 'Dan sat';
        }

    }
    
}

interface GunInterface{
    public function soundBoom(Gun $gun);
} 

# Các khẩu súng:Có tên, loại đạn, tiếng nổ

$Gun = new Gun(1,'AK 47', 14);
$Gun->soundBoom($Gun);
echo $Gun->getName();
echo $Gun->getCategoryName($Gun->getBulletTypeID());

echo "<br>";

$Gun2 = new Gun(2, 'M16', 12);
$Gun2->soundBoom($Gun2);
echo $Gun2->getName();
echo $Gun2->getCategoryName($Gun2->getBulletTypeID());
