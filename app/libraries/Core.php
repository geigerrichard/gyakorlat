<?php
    // app - core class
    class Core{
        // store the current controller, method and params
        protected $currentController = 'Pages';
        protected $currentMethod = 'index';
        protected $params = [];

        public function __construct(){
            // getting the current URL
            $url = $this->getUrl();

            // check if the $url variable is not empty
            if(isset($url[0])){
                // looking for the first value in the 'controllers' folder
                if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php')){
                    $this->currentController = ucwords($url[0]);
                    unset($url[0]);
                }
            }

            // require the contoller 
            require_once '../app/controllers/' . $this->currentController . '.php';
            $this->currentController = new $this->currentController;

            if(isset($url[1])){
                // check for the method in Pages.php
                if(method_exists($this->currentController, $url[1])){
                    $this->currentMethod = $url[1];
                    unset($url[1]);
                }
            }

            // getting the parameters from the url (if it has any), otherwise we just set it to an empty array (again)
            $this->params = $url ? array_values($url) : [];
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
        }

        public function getUrl(){
            if(isset($_GET['url'])){
                $url = rtrim($_GET['url'], '/');
                // filtering variables as a string or a number, then explode it into an array
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);
                return $url;
            }
        }
    }
?>