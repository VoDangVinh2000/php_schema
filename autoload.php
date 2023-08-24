<?php

    class Autoload{
        public function __construct()
        {
            spl_autoload_register(array($this,'autoload'));
        }
        public function autoload($file = [],$folder = ''){
            if($folder == 'config'){
                foreach($file as $item){
                    $path = "config/" . $item . ".config.php";
                     if(file_exists($path)) require_once $path;
                }   
                
            }
            if($folder == 'classes'){
                foreach($file as $item){
                    $path = "classes/" . $item . ".php";
                     if(file_exists($path)) require_once $path;
                }   
            }
            if($folder == 'app'){
                foreach($file as $item){
                    $path = "app/" . $item . ".php";
                     if(file_exists($path)) require_once $path;
                }   
            }
            if($folder == 'library'){
                foreach($file as $item){
                    $path = "library/" . $item . ".php";
                     if(file_exists($path)) require_once $path;
                }   
            }
            if($folder == 'models'){
                foreach($file as $item){
                    $path = "models/" . $item . ".php";
                     if(file_exists($path)) require_once $path;
                }   
            }
            if($folder == 'controllers'){
                foreach($file as $item){
                    $path = "classes/" . $item . ".php";
                     if(file_exists($path)) require_once $path;
                }   
            }

            if($folder == 'includes/library/'){
                foreach($file as $item){
                    $path = $folder . $item . ".php";
                    #"classes/" . $item . ".class.php";
                     if(file_exists($path)) require_once $path;
                }   
            }

            if($folder == 'includes/lang/'){
                foreach($file as $item){
                    $path = $folder . $item . ".php";
                    #"classes/" . $item . ".class.php";
                     if(file_exists($path)) require_once $path;
                }   
            }

            
        }
    }
   
