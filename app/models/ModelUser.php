<?php

    /** Modulo de conexão para realizar um login */

    namespace app\models;

    abstract class ModelUser {

        protected $connection;
        
        public function __construct() {
            $this->connection = Connection::connect();
        }
        
        public function getUserDB($email_p, $pass_p) {
            $sql = "SELECT nome_user, email_u, pass_u FROM {$this->table} WHERE email_u = :email AND pass_u = :pass";
            
            $current_user = $this->connection->prepare($sql);
            $current_user->bindParam(':email', $email_p);
            $current_user->bindParam(':pass', md5($pass_p));

            $current_user->execute();

            return $current_user->fetch(); 
        }

        public function setUserDB($name_user, $email_user, $pass_user){
            $sql = "INSERT INTO {$this->table} (email_u, pass_u, nome_user) VALUES (:e_user, :p_user, :n_user)"; 
            
            $send_user = $this->connection->prepare($sql);

            
            $send_user->bindValue(':e_user', $email_user);
            $send_user->bindValue(':p_user', md5($pass_user)); 
            $send_user->bindValue(':n_user', $name_user);

            $send_user->execute();
        }
    }