<?php

use Classes\Car;
use Classes\Database;
use Classes\Products;
use Classes\DB;
use Classes\Query;
use Classes\Users;

require_once 'autoload.php';
$autoload = new Autoload();
$autoload->autoload(["Database", "Query", "Products", "Car", "Phone", "Find", "DB", "test", "Users"], "classes");
$autoload->autoload([ "ProductsController"], "controllers");
// use Classes\Products;

$cars = new Car("Car1", "Blackpink", "Car");
$cars->pastLives();

#connect database
$database = new Database();
echo "<br>";

#db extends where of query class
// $db = DB::table('asd')->where();

#products class extends where condition of query class
// $testProduct = Users::about();

$userStatic = new Users('abc', 11);
$userStatic->setStep(11);
echo $userStatic->getStep();

// $query = Query::where();
// $db2 = DB::where();
// $db3 = DB::whereIn();

#new practice
// $staticMethod = DB::what();

#new test
// $newTest = test::sendText('abc')->where2();
// $bd2 = new DB();
// $bd2->where();
//  DB::table('users')->where('asd');

// $products = new Products("Border", "pink", "");
// $products->print();
// echo "<br>";
// $products1 = new Products("Border 1", "blackpink");
// $products1->print();
// echo "<br>";

// $car = new Car("Car");
// $car->setType("5 chỗ");
// $car->print();