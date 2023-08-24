<?php
namespace Classes;
use Classes\Query;
use Classes\Find;
class DB implements Find{
    // use Query;
    // public static $sefl = self::class;
    // public function 
    public static function connectDB(){
        echo 'ok';
    }
    public static function table($db){
        echo "<br>" . "table: " . $db;
        return new Query();
    }

    public static function dandelions(){
        echo '<br>' . 'dandelions';
    }

    public function dandelionsNotStatic(){
        $this->find();
        echo "<br>" . 'dandelions_not_static';
    }

    public static function sendText($text) {
        // send something
    }

    #interface
    public function find(){
        echo '<br>' . 'find';
    }
   
    // public function __call($name, $arguments)
    // {
    //     call_user_func([$this,'dandelions']);
    // }

    #for static function
    // public static function __callStatic($name, $arguments)
    // {
    //     call_user_func(array('DB', 'sendText'), $arguments[0]);
    //     echo "<br>" . "This is private method: " . $name; 
    // }
    // public static function __callStatic($name, $arguments)
    // {
    //     call_user_func_array(['DB'], $arguments[0]);
    // }
    
}