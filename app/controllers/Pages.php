<?php
    class Pages extends Controller{
        // initializing the object properties with construct
        public function __construct(){
            $this->userModel = $this->model('User');
            $this->advertisementModel = $this->model('Advertisement');
        }

        // if the param is URL/pages/index or everything else what is NOT (users, advertisements) - handled in .htaccess
        public function index(){
            $this->view('pages/index');
        }

        // if the param is URL/pages/users we will load the users.php with the passed users data
        public function users(){
            $users = $this->userModel->getUsers();

            $data = [
                'users' => $users
            ];
            $this->view('pages/users', $data);
        }

        // if the param is URL/pages/advertisements we will load the advertisements.php with the passed advertisements data
        public function advertisements(){
            $advertisements = $this->advertisementModel->getAdvertisements();

            $data = [
                'advertisements' => $advertisements
            ];
            $this->view('pages/advertisements', $data);
        }
    }
?>