<?php

    class Database {
        private $host = 'localhost';
        private $user = 'root';
        private $password = '';
        private $database = 'croobly_arcelor2';

        public function connect(){
            $host = $this->host;
            $user = $this->user;
            $password = $this->password;
            $database = $this->database;
            
            $mysqli = new mysqli($host, $user, $password, $database);
            if($mysqli->connect_errno) {
                throw new Exception ("Falha ao se conectar com o banco de dados, contate um administrador: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
            }
            else return $mysqli;
            
        }

        
    }


?>