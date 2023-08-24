<?php
namespace Models;

use Library\Schema;

class Home{
    public function select(){
        Schema::dropIfExists('abouts');
        Schema::dropColumn('status_sign');
    }
}