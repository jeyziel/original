<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Orion - Criando sites profissionais passo a passo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/vendors/plugins.css">
        <link rel="stylesheet" href="css/vendors/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="css/vendors/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        <header id="top" class="container">
            <div class="content">
                <div class="logo-container">
                    <div class="logo-container__logo">
                        <img src="images/logo.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="search-container">
                    <form action="">
                        <input class="form-control search-container__input" type="text" placeholder="Pesquisar no site...">
                    </form>
                </div>
            </div>
        </header>
        <div id="navegacao">
            <div class="container">
                <div class="content">
                    <div id="navegacao__content">
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#top">Home</a></li>
                                    <li><a href="#servicos">Serviços</a></li>
                                    <li><a href="#produtos">Produtos</a></li>
                                    <li><a href="#blog">Blog</a></li>
                                    <li><a data-toggle="modal" data-target="#modalContato" href="#">Contato</a></li>          
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div id="slider" class="owl-carousel owl-theme">
            <div class="item">
                <img src="http://owlgraphic.com/owlcarousel/demos/assets/fullimage1.jpg" alt="The Last of us">
            </div>
            <div class="item">
                <img src="http://owlgraphic.com/owlcarousel/demos/assets/fullimage1.jpg" alt="The Last of us">
            </div>
        </div>

        <section class="container" id="servicos">
            <header class="content">
                <h2 class="heading">
                    <span></span>
                    Nossos Serviços
                </h2>
            </header>
            <div class="content" id="servicos__itens">
                <div class="servicos__item">
                    <a href="#">
                        <span class="icon icon--config"></span>
                        <span class="title">BANNERS</span>
                    </a>
                </div>
                <div class="servicos__item">
                    <a href="#">
                        <span class="icon icon--camera"></span>
                        <span class="title">BANNERS</span>
                    </a>
                </div>
                <div class="servicos__item">
                    <a href="#">
                        <span class="icon icon--image"></span>
                        <span class="title">BANNERS</span>
                    </a>
                </div>
                <div class="servicos__item">
                    <a href="#">
                        <span class="icon icon--pc"></span>
                        <span class="title">BANNERS</span>
                    </a>
                </div>
                <div class="servicos__item">
                    <a href="#">
                        <span class="icon icon--config"></span>
                        <span class="title">BANNERS</span>
                    </a>
                </div>
                <div class="servicos__item">
                    <a href="#">
                        <span class="icon icon--camera"></span>
                        <span class="title">BANNERS</span>
                    </a>
                </div>
                <div class="servicos__item">
                    <a href="#">
                        <span class="icon icon--image"></span>
                        <span class="title">BANNERS</span>
                    </a>
                </div>
                <div class="servicos__item">
                    <a href="#">
                        <span class="icon icon--pc"></span>
                        <span class="title">BANNERS</span>
                    </a>
                </div>
            </div>
        </section>

        <section class="container" id="produtos">
            <header class="content">
                <h2 class="heading">
                    <span></span>
                    Nossos Produtos
                </h2>
            </header>
            <div class="content" id="produtos__itens">
                <div class="produtos__item">
                    <img src="images/card02.jpg" class="img-responsive" alt="Produto" title="Produto">
                    <h2>Título do produto</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod...</p>
                    <a href="#" class="read-more">SAIBA +</a>
                </div>
                <div class="produtos__item">
                    <img src="images/card09.jpg" class="img-responsive" alt="Produto" title="Produto">
                    <h2>Título do produto</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod...</p>
                    <a href="#" class="read-more">SAIBA +</a>
                </div>
                <div class="produtos__item">
                    <img src="images/book06.jpg" class="img-responsive" alt="Produto" title="Produto">
                    <h2>Título do produto</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod...</p>
                    <a href="#" class="read-more">SAIBA +</a>
                </div>
                <div class="produtos__item">
                    <img src="images/card02.jpg" class="img-responsive" alt="Produto" title="Produto">
                    <h2>Título do produto</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod...</p>
                    <a href="#" class="read-more">SAIBA +</a>
                </div>
            </div>
        </section>

        <section class="container" id="blog">
            <header class="content">
                <h2 class="heading">
                    <span></span>
                    BLOG
                </h2>
            </header>
            <div class="content">
                <div id="posts">
                    <div class="posts__item clearfix">
                        <img src="images/bg-post.png" class="img-responsive" alt="Título da postagem" title="Título da postagem">
                        <h2>Título da postagem</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <a href="#" class="read-more">Continue lendo -></a>
                    </div>
                    <div class="posts__item clearfix">
                        <img src="images/bg-post.png" class="img-responsive" alt="Título da postagem" title="Título da postagem">
                        <h2>Título da postagem</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation llamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <a href="#" class="read-more">Continue lendo -></a>
                    </div>
                </div>
                <div id="sidebar">
                    <div class="widget">
                        <h3 class="widget__title">
                            <span></span> Título Widget
                        </h3>
                        <div class="widget__body">

                        </div>
                    </div>
                    <div class="widget">
                        <h3 class="widget__title">
                            <span></span> Título Widget
                        </h3>
                        <div class="widget__body">

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="content" id="footer-sidebar">
                    <div class="footer-widget footer-widget--about">
                        <a href="#" title="Criando sites profissionais passo a passo">
                            <img src="images/logorodape.png" class="img-responsive" alt="Criando sites profissionais passo a passo" title="Criando sites profissionais passo a passo">
                        </a>
                        <p>
                            Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scriptaset patrioque scribentur, at pro fugit erts verterem molestiae, sed et vivendo ali Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur...
                        </p>
                    </div>
                    <div class="footer-widget">
                        <h4 class="widget__title">
                            <span></span> Fotos
                        </h4>
                        <ul class="clearfix" id="fotos">
                            <li>
                                <a href="#" title="Fotos do rodapé">
                                    <img src="images/card01.jpg" class="img-responsive" alt="Fotos do rodapé" title="Fotos do rodapé">
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Fotos do rodapé">
                                    <img src="images/card01.jpg" class="img-responsive" alt="Fotos do rodapé" title="Fotos do rodapé">
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Fotos do rodapé">
                                    <img src="images/card01.jpg" class="img-responsive" alt="Fotos do rodapé" title="Fotos do rodapé">
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Fotos do rodapé">
                                    <img src="images/card01.jpg" class="img-responsive" alt="Fotos do rodapé" title="Fotos do rodapé">
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Fotos do rodapé">
                                    <img src="images/card01.jpg" class="img-responsive" alt="Fotos do rodapé" title="Fotos do rodapé">
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Fotos do rodapé">
                                    <img src="images/card01.jpg" class="img-responsive" alt="Fotos do rodapé" title="Fotos do rodapé">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-widget">
                        <h4 class="widget__title">
                            <span></span> Localização
                        </h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.307953558354!2d-46.189562099999975!3d-23.521423799999987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cdd83dfd10bbd9%3A0x7a904a3e6d7b06e9!2sR.+Bar%C3%A3o+de+Jacegua%C3%AD+-+Centro%2C+Mogi+das+Cruzes+-+SP!5e0!3m2!1spt-BR!2sbr!4v1440075997935" width="100%" height="125" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div id="redes-sociais">
                <div class="container">
                    <div class="content">
                        <div id="redes-sociais__container">
                            <ul id="redes-sociais__icons">
                                <li>
                                    <a href="#" class="icon icon--facebook" title=""></a>
                                </li>
                                <li>
                                    <a href="#" class="icon icon--twitter" title=""></a>
                                </li>
                                <li>
                                    <a href="#" class="icon icon--youtube" title=""></a>
                                </li>
                                <li>
                                    <a href="#" class="icon icon--gplus" title=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="modal fade" id="modalContato" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel">Contato</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="" name="contato">
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">Nome:</label>
                                <input type="text" name="nome" required class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">Email:</label>
                                <input type="email" name="email" required class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="control-label">Mensagem:</label>
                                <textarea required class="form-control" name="mensagem" id="message-text"></textarea>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <input type="submit" value="Enviar" class="btn btn-primary">
                    </div>
                    
                </div>
            </div>
        </div>

        <script src="js/vendors/jquery/jquery.min.js"></script>
        <script src="js/vendors/bootstrap/bootstrap.min.js"></script>
        <script src="js/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>