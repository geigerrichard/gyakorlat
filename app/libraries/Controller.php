<?php
    // app - controller class
    class Controller {
        // load the module
        public function model($model){
            // requiring the model file then returning with that model
            require_once('../app/models/' . $model . '.php');
            return new $model();
        }

        // checks for the view, then if it exists load the file and send the (optional) data in the second parameter
        public function view($view, $data = []){
            if(file_exists('../app/views/' . $view . '.php')){
                require_once('../app/views/' . $view . '.php');
            }else{
                die("The view does not exists!");
            }
        }
    }

?>