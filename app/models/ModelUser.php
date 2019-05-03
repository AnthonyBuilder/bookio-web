<?php

    /** Modulo de conexão para realizar um login */

    namespace app\models;

    abstract class ModelUser {
        protected $connection;
        
        public function __construct() {
            $this->connection = Connection::connect();
        }
        
        public function getUserDB() {
            
            $sql = "SELECT email_u, pass_u FROM {$this->table}";
            
            $all_users = $this->connection->prepare($sql);
     
            $all_users->execute();
            return $all_users->fetchAll();            
        }
    }