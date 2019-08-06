<?php $origem = (@$_GET['utm_source'])?$_GET['utm_source']:'Site';?>
<!DOCTYPE html>
<html lang="pt-br" ng-app="app">
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title><?=$SEO_Title?></title>
        <!-- GOOGLE -->
        <!-- <meta name="theme-color" content="#D6181E"> -->
        <meta name="author" content="Agência Midia9">
        <meta name="title" content="<?=$GOOG_Title?>">
        <meta name="description" content="<?=$GOOG_Description?>">
        <meta name="keywords" content="<?=$GOOG_Keywords?>">
        <!-- FACEBOOK -->
        <meta property="og:locale" content="pt_BR">
        <meta property="og:site_name" content="<?=$FACE_Site_Name?>">
        <meta property="og:title" content="<?=$FACE_Title?>">
        <meta property="og:description" content="<?=$FACE_Description?>">
        <meta property="og:image" content="">
        <meta property="og:image:type" content="image/png">
        <meta property="og:type" content="website">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <!-- <link rel="apple-touch-icon" href="apple-touch-icon.html"> -->
        <link rel="shortcut icon" type="image/x-icon" href="<?=base_url('assets/'.THEME)?>/images/fav.png">
        <!-- bootstrap v3.3.7 css -->
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/'.THEME)?>/css/bootstrap.min.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/'.THEME)?>/css/font-awesome.min.css">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/'.THEME)?>/css/animate.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/'.THEME)?>/css/owl.carousel.css">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/'.THEME)?>/css/magnific-popup.css">
        <!-- Flat icon style css -->
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/'.THEME)?>/fonts/flaticon.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/'.THEME)?>/flat/flaticon.css">
        <!-- responsive Menu css -->
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/'.THEME)?>/css/stellarnav.css">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/'.THEME)?>/css/slick.css">
        <!-- slick theme css -->
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/'.THEME)?>/css/slick-theme.css">
        <!-- Switch style CSS -->
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/'.THEME)?>/css/color-style.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/'.THEME)?>/css/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/'.THEME)?>/css/responsive.css">
        <!-- midia9 -->
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/'.THEME)?>/css/midia9.css">
        <link rel="stylesheet" type="text/css" href="http://cdn.marketingmidia9.com.br/css/sweetalert2.css">
        <link rel="stylesheet" type="text/css" href="http://cdn.marketingmidia9.com.br/css/ngDialog.min.css">
    </head>
    <body class="home2" ng-controller="Lead">
        <!-- Preload -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- Preload -->
        <!-- HEADER -->
        <?=$header?>
        <!-- HEADER -->
        <!-- CONTEUDO -->
        <?=$content?>
        <!-- CONTEUDO -->
        <!-- FOOTER -->
        <footer id="rs-footer" class="rs-footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="about-widget">
                                <img src="<?=base_url('assets/'.THEME)?>/images/logo-midia9-white.svg" alt="Midia9">
                                <p class="justificado" id="font500">A <strong class="text-orange">Mídia9</strong> é o fruto de um conjunto de estratégias utilizados por
                                    uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus
                                    clientes, em Fortaleza. Nós oferecemos os melhores serviços online para a sua
                                    empresa. Afinal, a nossa ideia é potencializar o seu negócio.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <h3 class="footer-title">Contato</h3>
                            <div class="recent-post-widget">
                                <div class="post-item">
                                    <div class="post-desc">
                                        <h3 class="post-title white"><i class="fa fa-map-marker" aria-hidden="true"></i> Rua Nunes Valente, 1881, Aldeota Fortaleza CE</h3>
                                    </div>
                                </div>
                                <div class="post-item">
                                    <div class="post-desc">
                                        <h3 class="post-title white"><i class="fa fa-envelope" aria-hidden="true"></i> contato@agenciamidia9.com.br</h3>
                                    </div>
                                </div>
                                <div class="post-item">
                                    <div class="post-desc">
                                        <h3 class="post-title white"><i class="fa fa-phone" aria-hidden="true"></i>  (85) 3023 5515</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <h3 class="footer-title">Páginas</h3>
                            <ul class="sitemap-widget">
                                <li class="active"><a href="<?=base_url()?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Home</a></li>
                                <li class="active"><a href="sobre-a-midia9"><i class="fa fa-angle-right" aria-hidden="true"></i>Quem somos</a></li>
                                <li><a href="nossos-servicos"><i class="fa fa-angle-right" aria-hidden="true"></i>Serviços</a></li>
                                <li><a href="blog"><i class="fa fa-angle-right" aria-hidden="true"></i>Blog</a></li>
                                <li><a href="contato"><i class="fa fa-angle-right" aria-hidden="true"></i>Contato</a></li>
                            </ul>
                        </div>
                        <!-- <div class="col-md-3 col-sm-12 col-xs-12">
                            <h3 class="footer-title">Contato</h3>
                            <p>Deixei seu E-mail</p>
                            <form class="news-form">
                               <input type="text" class="form-input" placeholder="Enter Your Email">
                               <button type="submit" class="form-button"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                            </form>
                            </div> -->
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyright">
                                <p>© <?=Date('Y')?> <strong class="text-orange">Agência Mídia9</strong> | Todos os direitos reservados.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-right ft-bottom-right">
                                <div class="footer-bottom-share">
                                    <ul>
                                        <li><a href="https://www.facebook.com/Midia9/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://www.instagram.com/midia9group/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER -->
        <!-- SCROLL UP -->
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- SCROLL UP -->
        <!-- modernizr js -->
        <script src="<?=base_url('assets/'.THEME)?>/js/modernizr-2.8.3.min.js"></script>
        <!-- jquery latest version -->
        <script src="<?=base_url('assets/'.THEME)?>/js/jquery.min.js"></script>
        <!-- bootstrap js -->
        <script src="<?=base_url('assets/'.THEME)?>/js/bootstrap.min.js"></script>
        <!-- op nav js -->
        <script src="<?=base_url('assets/'.THEME)?>/js/jquery.nav.js"></script>
        <!-- owl.carousel js -->
        <script src="<?=base_url('assets/'.THEME)?>/js/owl.carousel.min.js"></script>
        <!-- isotope.pkgd.min js -->
        <script src="<?=base_url('assets/'.THEME)?>/js/isotope.pkgd.min.js"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="<?=base_url('assets/'.THEME)?>/js/imagesloaded.pkgd.min.js"></script>
        <!-- wow js -->
        <script src="<?=base_url('assets/'.THEME)?>/js/wow.min.js"></script>
        <!-- counter top js -->
        <script src="<?=base_url('assets/'.THEME)?>/js/waypoints.min.js"></script>
        <script src="<?=base_url('assets/'.THEME)?>/js/jquery.counterup.min.js"></script>
        <!-- Skill bar js -->
        <script src="<?=base_url('assets/'.THEME)?>/js/skill.bars.jquery.js"></script>
        <!-- magnific popup -->
        <script src="<?=base_url('assets/'.THEME)?>/js/jquery.magnific-popup.min.js"></script>
        <!-- plugins js -->
        <script src="<?=base_url('assets/'.THEME)?>/js/plugins.js"></script>
        <!-- contact form js -->
        <script src="<?=base_url('assets/'.THEME)?>/js/contact.form.js"></script>
        <!-- quote popup form js -->
        <script src="<?=base_url('assets/'.THEME)?>/js/quote.form.js"></script>
        <!-- Responsive Menu js -->
        <script src="<?=base_url('assets/'.THEME)?>/js/stellarnav.js"></script>
        <!-- Slick js -->
        <script src="<?=base_url('assets/'.THEME)?>/js/slick.js"></script>
        <!-- Switch js -->
        <script src="<?=base_url('assets/'.THEME)?>/js/color-style.js"></script>          
        <!-- main js -->
        <script src="<?=base_url('assets/'.THEME)?>/js/main.js"></script>
        <!-- moogle map js -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaCE0lajBw7b_VwZcfArapSO7WydItqKg"></script>
        <script src="<?=base_url('assets/'.THEME)?>/js/gmap.js"></script>
        <!-- integração -->
        <script src="http://cdn.marketingmidia9.com.br/js/angular.min.js"></script>
        <script src="http://cdn.marketingmidia9.com.br/js/angular-route.min.js"></script>
        <script src="http://cdn.marketingmidia9.com.br/js/ngMask.min.js"></script>
        <script src="http://cdn.marketingmidia9.com.br/js/ngDialog.min.js"></script>
        <script src='http://cdn.marketingmidia9.com.br/js/sweetalert.min.js'></script>
        <script src="<?=base_url('assets/'.THEME)?>/js/integracao.js"></script>
    </body>
</html>