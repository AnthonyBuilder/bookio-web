<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book.io</title>

    <link rel="stylesheet" href="assets/style/main.css">
    <link rel="stylesheet" href="assets/fonts/font.css">

</head>

<body>

    <nav>
        <ul class="ul-nav-main">
            <li>
                <div class="nav-itm-title">
                    <h1>Book.io</h1>
                </div>
            </li>
            <li>
                <div class="nav-itm">
                    <h2>Alugar</h2>
                </div>
            </li>
            <li>
                <div class="nav-itm">
                    <h2>Explorar</h2>
                </div>
            </li>
            <li>
                <div class="nav-itm">
                    <a href="/public/usr_pgs/login_pg/index.php"><h2>Login</h2></a>
                </div>
            </li>
            <li>
                <div class="nav-itm">
                    <a href="/public/usr_pgs/create_usr_pg/index.php"><h2>Cadastrar</h2></a>
                </div>
            </li>
        </ul>
    </nav>

    
    <article>
        <h1>Book.io</h1>
        <h2>Um lugar para alugar livros</h2>
    </article>

    <div class="post-livro">
        <div class="container-form-b">
            <div class="wrapper-form-b wrapper">
                <div class="b-content">
                    <div class="title-products-container">
                        <h1>Publique seu Livro</h1>
                    </div>

                    <iframe style="display:none;" name="sender"></iframe>
                    <form method="POST" name="sender" class="form-book">
                        <input class="in-b-form" type="text" name="b_name_in" placeholder="Nome do livro" />
                        <input class="in-b-form" type="number" name="b_price_in" placeholder="Preço" min="0.00" max="10000.00" step="any"/>
                        <input class="in-b-form " type="text" name="b_url_img" placeholder="URL Imagem" />
                    </form>
                    <button class="btn-send-book" onclick="createBook()">Enviar</button>
                </div>
            </div>
        </div>
    </div>


    <div class="container-products">
        <div class="wrapper">
            <div class="title-products-container">
                <h1>Livros para Alugar</h1>
            </div>
            <div class="row-products">
                <div class="card-product-book">
                    <div class="content-card-product">
                        <div class="title-card-usr-name">
                            <h2>Anthony José</h2>
                        </div>
                        <img src="assets/img/jobs_book.jpg" alt="Steve Jobs">
                        
                    </div>
                    <div class="rw-card-bottom-content">
                        <div class="title-card-product">
                            <h1>Steve Jobs</h1>
                            <h2>By Walter Isaacson</h2>
                        </div>

                    </div>
                </div>

                <div class="card-product-book">
                    <div class="content-card-product">
                        <img src="assets/img/top_walter.jpg" alt="Book Mockup">
                    </div>
                    <div class="rw-card-bottom-content">
                        <div class="title-card-product">
                            <h1>Stars Book</h1>
                            <h2>Replace This</h2>
                        </div>

                    </div>
                </div>

                <div class="card-product-book">
                    <div class="content-card-product">
                        <img src="assets/img/rainbow_shot.jpg" alt="Steve Jobs">
                    </div>
                    <div class="rw-card-bottom-content">
                        <div class="title-card-product">
                            <h1>Rainbow Shot</h1>
                            <h2>Supreme Colors</h2>
                        </div>

                    </div>
                </div>

                <div class="card-product-book">
                    <div class="content-card-product">
                        <img src="assets/img/xr_img.jpg" alt="Steve Jobs">
                    </div>
                    <div class="rw-card-bottom-content">
                        <div class="title-card-product">
                            <h1>iPhone XR</h1>
                            <h2>By Walter Isaacson</h2>
                        </div>

                    </div>
                </div>

                <div class="card-product-book">
                    <div class="content-card-product">
                        <img src="assets/img/walter_maps.jpg" alt="Steve Jobs">
                    </div>
                    <div class="rw-card-bottom-content">
                        <div class="title-card-product">
                            <h1>Steve Jobs</h1>
                            <h2>By Walter Isaacson</h2>
                        </div>

                    </div>
                </div>
            </div>
     

        </div>
    </div>

    </div>
</body>
<script src="assets/script/main.js"></script>
<script src="assets/script/xhttp.js"></script>
<script src="assets/script/bookConstructor.js"></script>
</html>