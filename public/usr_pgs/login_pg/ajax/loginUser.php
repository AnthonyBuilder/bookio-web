<?php
    require "../../../../config.php";

    use app\models\User;

    $user_login = new User;

    $email_p = filter_input(INPUT_POST, 'email_login', FILTER_SANITIZE_STRING);
    $pass_p = filter_input(INPUT_POST, 'pass_login', FILTER_SANITIZE_STRING);

    echo json_encode($user_login->getUserDB($email_p, stringToBinary($pass_p)));

    function stringToBinary($string) {
        $characters = str_split($string);   

        $binary = [];        
        foreach ($characters as $character) {
            $data = unpack('H*', $character);
            $binary = base_convert($data[1], 16, 2);
        }
        
        return implode(' ', $binary);
    }

    echo stringToBinary('tony01ma');
?>