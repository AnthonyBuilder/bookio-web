<?php
    require "../../../config.php";

    use app\models\User;

    $user_login = new User;

    $email_p = filter_input(INPUT_POST, 'email_login', FILTER_SANITIZE_STRING);
    $pass_p = filter_input(INPUT_POST, 'pass_login', FILTER_SANITIZE_STRING);

    echo json_encode($user_login->getUserDB($email_p, $pass_p));
?>