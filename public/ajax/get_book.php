<?php 
    require "../../config.php";

    use app\models\Book;

    $book = new Book;

    echo json_encode($book->getBooks);

    ?>