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
            <h2 id="title-log" style="font-weight: 100;">Cadastro<h2>
            <h2 id="title-user">Book.io</h2>
        </div>
    
        <form method="POST" class="form-book">
            <input type="text" name="nome_cr" id="nome-cadastro" placeholder="Nome" required>
            <input type="email" name="email_cr" id="email-cadastro" placeholder="Email">
            <input type="password" name="pass_cr" id="pass-cadastro" placeholder="Senha"  minlength="8">
        </form>
        <button class="btn">Cadastrar</button>
    </div>

</body>
<script src="script_create/main.js"></script>
<script src="../assets/script/xhttp.js"></script>
</html>