<?php
    class Advertisement{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        // getting all advertisement title and the username (which table is joined by using INNER JOIN) then return with the result records
        public function getAdvertisements(){
            $this->db->query("SELECT advertisements.title, users.name FROM advertisements INNER JOIN users ON advertisements.userid = users.id");
            $result = $this->db->resultSet();
            return $result;
        }
    }
?>