<?php 
    namespace app\models;

    /**
     * Driver de conexão com Mysql - PDO
     */

     use PDO;

    class Connection {
        function connect() {
            $pdo = new PDO("mysql:host=localhost;dbname=bookiodb", "root", "");
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            return $pdo;
        }
    }
?>