<?php

require_once 'autoload.php';
$autoload = new Autoload();
$autoload->autoload(['HomeController'], 'app');
$autoload->autoload(['BluePrint','Facade','Schema'], 'library');
$autoload->autoload(['Home'], 'models');
// $autoload->autoload([ "ProductsController"], "controllers");

#Home controller
use App\HomeController;
$HomeController = new HomeController();
$HomeController->index();
