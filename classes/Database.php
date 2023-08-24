<?php
namespace Classes;
class Database{
    public static $conn;

    public function __construct()
    {
        if(static::$conn == null){
            static::$conn = new \mysqli("localhost","root", "", "laravel_website", 3306) or die('Connection Failed: ' . mysqli_connect_error());
        }

        return static::$conn;
    }
}