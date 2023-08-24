<?php

namespace Classes;
class Query{
    public function where(){
        echo  "<br>" . 'where - ok';   
    }
    public static function whereIn(){
        echo 'where in';
    }
    public function whereNotStatic(){
        echo 'ok_static';
    }
}