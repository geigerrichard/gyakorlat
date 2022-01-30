<?php
    // app - database class
    class Database{
        // set the variable values from the config/config.php constant values
        private $dbHost = DB_HOST;
        private $dbUser = DB_USER;
        private $dbPass = DB_PASS;
        private $dbName = DB_NAME;

        // variables for the PDO query and to handle errors
        private $statement;
        private $ddHandler;
        private $error;

        public function __construct(){
            $conn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName;
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            // try to connect to the database via PDO with the given parameters
            try{
                $this->dbHandler = new PDO($conn, $this->dbUser, $this->dbPass, $options);
            }catch(PDOException $e){
                // handling the error message if the connection is failed, make it visible for the user
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }

        // allows us to write queries
        public function query($sql){
            $this->statement = $this->dbHandler->prepare($sql);
        }

        // execute the prepared statement
        public function execute(){
            return $this->statement->execute();
        }

        // return an array 
        public function resultSet(){
            $this->execute();
            return $this->statement->fetchAll(PDO::FETCH_OBJ);
        }
    }
?>