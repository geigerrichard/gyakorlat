<?php
    class User{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        // getting all users from the 'users' table then return with the result records
        public function getUsers(){
            $this->db->query("SELECT * FROM users");
            $result = $this->db->resultSet();
            return $result;
        }
    }
?>