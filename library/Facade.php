<?php
namespace Library;
use Library\BluePrint;
class Facade{
    public static function __callStatic($method, $arguments)
    {
        return call_user_func_array([new BluePrint(), $method], $arguments);
    }
}