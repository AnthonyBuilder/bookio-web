<?php
    require "../../config.php";

    use app\models\Book;

    $book = new Book;

    $b_name = filter_input(INPUT_POST, 'b_name_in', FILTER_SANITIZE_STRING);
    $b_price = filter_input(INPUT_POST, 'b_price_in', FILTER_SANITIZE_STRING);
    $b_url_img = filter_input(INPUT_POST, 'b_url_img', FILTER_SANITIZE_STRING);

    $create = $book->createBooks($b_name, $b_price, $b_url_img);

    if ($create) {
        echo "Livro Cadastrado";
    } else {
        echo "Não foi possivel publicar o livro";
    }

    ?>