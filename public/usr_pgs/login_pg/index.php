<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../style_usr_cs/main.css">
    <link rel="stylesheet" href="../../assets/fonts/font.css">
    <title>Login - Bookio</title>
</head>
<body>

    <div class="wrapper-login-contents">
         <div class="title-login">
            <h2 id="title-log" style="font-weight: 100;">login<h2>
            <h2 id="title-user">Book.io</h2>
        </div>
    
        <form method="POST" name="myForm" class="form-book">
            <input type="email" name="email_login" id="email-login" class="input-login" placeholder="Email">
            <input type="password" name="pass_login" id="pass-login" class="input-login" placeholder="Senha">
        </form>
        <input type="button" value="Logar" class="btn" onclick="loginUser();">
    </div>

</body>
<script src="script_login/main.js"></script>
<script src="../../assets/script/xhttp.js"></script>
</html>