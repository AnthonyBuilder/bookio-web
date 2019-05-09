<?php
    require "../../../../config.php";

    use app\models\User;

    $user_create = new User;

    $name_fin = filter_input(INPUT_POST, 'nome_cr', FILTER_SANITIZE_STRING);
    $email_fin = filter_input(INPUT_POST, 'email_cr', FILTER_SANITIZE_STRING);
    $pass_fin = filter_input(INPUT_POST, 'pass_cr', FILTER_SANITIZE_STRING);

    $user_create->setUserDB($name_fin, $email_fin, $pass_fin); // Cadastra a senha criptografando em MD5


?>