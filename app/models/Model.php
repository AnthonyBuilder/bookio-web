<?php 

    namespace app\models;

    /**
     * Modulo de conexão ao driver
     * 
     * @Model - CRUD livros users
     * @Book - Extend this Model and set table var
     * 
     */

    abstract class Model {

        protected $connection;

        public function __construct() {
            $this->connection = Connection::connect();
        }

        public function getBooks() {
            $sql = "SELECT * FROM {$this->table}";
            
            $all_books = $this->connection->prepare($sql);
            $all_books->execute();
            
            return $all_books->fetchAll();
        }

        public function createBooks($book_name, $book_price, $book_img_url) {
            $sql = "INSERT INTO {$this->table} (book_name, book_price, book_img) values (:b_name, :b_price, :b_img)";
            $create = $this->connection->prepare($sql);

            $create->bindValue(':b_name', $book_name);
            $create->bindValue(':b_price', $book_price);
            $create->bindValue(':b_img', $book_img_url);

            $create->execute();

            return $this->connection->lastInsertId();
        }
    }