<?php
namespace Classes;
class Users extends Database{
    public static $id;
    public static $data;
    public static $step = 5;
    public function __construct($data, $step)
    {
        #auto find by id and return data
        // var_dump($this->getData());
        self::$data = $data;
    }

    public static function find($id){
        echo '<br>' . 'ID: ' . $id;
        $data = mysqli_query(Database::$conn, "SELECT * FROM `users` WHERE `id` = ".$id." ");
        // static::$id = $id;
        $rowData = [];
        while($item = mysqli_fetch_assoc($data)){
            $dataNew = [];
            $dataNew['id'] = $item['id'];
            $dataNew['username'] = $item['username'];
            array_push($rowData, $dataNew);
        }
        static::$data = $rowData;
        
        // return self;
    }

    private static function getUserById(){
        echo 'My life: getUserById';
    }

    public function toJson(){
        #convert array data to json
    }

    public function getData(){
        return static::$data;
    }

    public static function __callStatic($name, $arguments)
    {   
        echo "<br>" . "Call: " . $name;
    }
    public function getStep(){
        return self::$step;
    }
    public function setStep($value){
        self::$step = $value;
    }
}