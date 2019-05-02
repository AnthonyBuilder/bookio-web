<?php
    require "../../config.php";

    use app\models\User;

    $user = new User;

    $i_email = filter_input(INPUT_POST, 'email_login', FILTER_SANITIZE_STRING);
    $i_pass = filter_input(INPUT_POST, 'pass_login', FILTER_SANITIZE_STRING);
    
    $user->loginUser($i_email, $i_pass);    