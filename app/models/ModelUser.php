<?php

    /** Modulo de conexão para realizar um login */

    namespace app\models;

    abstract class ModelUser {
        protected $connection;
        
        public function __construct() {
            $this->connection = Connection::connect();
        }

        public function loginUser($i_email, $i_pass) {
            $sql = 'SELECT * FROM {$this->table} WHERE email_u = :i_em and pass_u = :i_pa';
            $getUser = $this->connection->prepare($sql);
            
            $getUser->bindValue(':i_em', i_email);
            $getUser->bindValue(':i_pa', i_pass);

            $getUser->execute();

            return $getUser->fetchAll();

        }
    }