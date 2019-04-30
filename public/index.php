<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book.io</title>

    <link rel="stylesheet" href="assets/style/main.css">
    <link rel="stylesheet" href="assets/fonts/font.css">

    <!--Slick-->
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>

    <link rel="stylesheet" href="    https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css">

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
                    <h2>Login</h2>
                </div>
            </li>
            <li>
                <div class="nav-itm">
                    <h2>Cadastrar</h2>
                </div>
            </li>
        </ul>
    </nav>

    
    
    <div class="post-livro">
        <div class="container-form-b">
            <div class="wrapper-form-b wrapper">
                <div class="b-content">
                    <div class="title-products-container">
                        <h1>Alugue seu Livro</h1>
                    </div>

                    <iframe style="display:none;" name="sender"></iframe>
                    <form method="POST" name="sender" class="form-book">
                        <input class="in-b-form" type="text" name="b_name_in" placeholder="Nome do livro" />
                        <input class="in-b-form" type="text" name="b_price_in" placeholder="Preco" />
                        <input class="in-b-form " type="text" name="b_url_img" placeholder="URL Imagem" />
                    </form>
                    <button class="btn-send-book" onclick="createBook()">Enviar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="marcas">
        <div class="wrapper">
            <div class="title-products-container">
                <h1>Marcas</h1>
            </div>

            <div class="row-marcas-crd">
                <ul class="ul-fluid">
                    <li>
                        <div class="card-marcas">
                            <div class="content-img">
                                <figure>
                                    <img src="https://images.livrariasaraiva.com.br/estatico/2017/site/pagina-de-marcas/intrinseca/images/intrinseca.png"
                                        alt="">
                                </figure>
                            </div>
                        </div>

                    </li>


                    <li>
                        <div class="card-marcas">
                            <div class="content-img">
                                <figure>
                                    <img src="https://images.livrariasaraiva.com.br/estatico/2018/site/widgets/marcas/papelaria/faber-castell.png?sc"
                                        alt="">
                                </figure>
                            </div>
                        </div>

                    </li>
                    <div class="card-marcas">
                        <div class="content-img">
                            <figure>
                                <img src="https://images.livrariasaraiva.com.br/estatico/2017/site/pagina-de-marcas/cia-das-letras/images/cia-das-letras.png"
                                    alt="">
                            </figure>
                        </div>
                    </div>

                    <li>
                        <div class="card-marcas">
                            <div class="content-img">
                                <figure>
                                    <img src="https://images.livrariasaraiva.com.br/estatico/2018/site/widgets/marcas/livros/rocco.png"
                                        alt="">
                                </figure>
                            </div>
                        </div>
                    </li>



                    <li>
                        <div class="card-marcas">
                            <div class="content-img">
                                <figure>
                                    <img src="https://images.livrariasaraiva.com.br/estatico/2017/site/pagina-de-marcas/images/sextante.png"
                                        alt="">
                                </figure>
                            </div>
                        </div>
                    </li>



                    <li>
                        <div class="card-marcas">
                            <div class="content-img">
                                <figure>
                                    <img src="https://images.livrariasaraiva.com.br/estatico/2018/site/widgets/marcas/papelaria/bic.png?sc"
                                        alt="">
                                </figure>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="card-marcas">
                            <div class="content-img">
                                <figure>
                                    <img src="https://images.livrariasaraiva.com.br/estatico/2018/site/widgets/marcas/papelaria/bic.png?sc"
                                        alt="">
                                </figure>
                            </div>
                        </div>
                    </li>



                    <li>
                        <div class="card-marcas">
                            <div class="content-img">
                                <figure>
                                    <img src="https://images.livrariasaraiva.com.br/estatico/2018/site/widgets/marcas/papelaria/bic.png?sc"
                                        alt="">
                                </figure>
                            </div>
                        </div>
                    </li>





                    <li>
                        <div class="card-marcas">
                            <div class="content-img">
                                <figure>
                                    <img src="https://images.livrariasaraiva.com.br/estatico/2018/site/widgets/marcas/papelaria/bic.png?sc"
                                        alt="">
                                </figure>
                            </div>
                        </div>
                    </li>


                    <li>
                        <div class="card-marcas">
                            <div class="content-img">
                                <figure>
                                    <img src="https://images.livrariasaraiva.com.br/estatico/2018/site/widgets/marcas/papelaria/bic.png?sc"
                                        alt="">
                                </figure>
                            </div>
                        </div>
                    </li>


                    <li>
                        <div class="card-marcas">
                            <div class="content-img">
                                <figure>
                                    <img src="https://images.livrariasaraiva.com.br/estatico/2018/site/widgets/marcas/papelaria/bic.png?sc"
                                        alt="">
                                </figure>
                            </div>
                        </div>
                    </li>


                    <li>
                        <div class="card-marcas">
                            <div class="content-img">
                                <figure>
                                    <img src="https://images.livrariasaraiva.com.br/estatico/2018/site/widgets/marcas/papelaria/bic.png?sc"
                                        alt="">
                                </figure>
                            </div>
                        </div>
                    </li>



                </ul>
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

                <div class="card-product-book">
                    <div class="content-card-product">
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
                        <img src="assets/img/jobs_book.jpg" alt="Steve Jobs">
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
</html>