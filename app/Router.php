<?php
    namespace App;

    abstract class Router
    {
        
        public static function handleRequest($get){
            $ctrlname = "Controller\HomeController";
            
            $method = "index";
            
            if(isset($get['ctrl'])){
                $ctrlname = "Controller\\".ucfirst($get['ctrl'])."Controller";
                // ucfirst — Met le premier caractère en majuscule
            }
            
            $ctrl = new $ctrlname();

            if(isset($get['method']) && method_exists($ctrl, $get['method'])){
                $method = $get['method'];
            }
            
            return $ctrl->$method();
        }

        public static function redirectTo($ctrl = null, $method = null){

            header("Location:?ctrl=".$ctrl."&method=".$method);
            die();
           
        }

    }

    