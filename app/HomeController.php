<?php
namespace App;
use Library\Schema;
use Models\Home;
class HomeController{
    public function index(){
        $modelHome = new Home();
        $modelHome->select();
    }
}