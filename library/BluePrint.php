<?php
namespace Library;
class BluePrint{
    public function dropIfExists($table){
        echo 'Thuc hien 1 viec gi do' . PHP_EOL;
        echo $table;
        echo "<br>";
    }
    public function dropColumn($column){
        echo 'Thuc hien xóa cột' . PHP_EOL;
        echo $column;
        echo "<br>";
    }
}