<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema de Monitoreo</title>

    <!-- Bootstrap Core CSS -->
    <link href="fame-bootstrap-main/asset/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome CSS -->
    <link href="fame-bootstrap-main/css/font-awesome.min.css" rel="stylesheet">
    
    
    <!-- Animate CSS -->
    <link href="fame-bootstrap-main/css/animate.css" rel="stylesheet" >
    
    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="fame-bootstrap-main/css/owl.carousel.css" >
    <link rel="stylesheet" href="fame-bootstrap-main/css/owl.theme.css" >
    <link rel="stylesheet" href="fame-bootstrap-main/css/owl.transitions.css" >

    <!-- Custom CSS -->
    <link href="fame-bootstrap-main/css/style.css" rel="stylesheet">
    <link href="fame-bootstrap-main/css/responsive.css" rel="stylesheet">
    
    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="fame-bootstrap-main/css/color/green.css">
    
    
    
    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="fame-bootstrap-main/css/color/green.css" title="green">
    <link rel="stylesheet" type="text/css" href="fame-bootstrap-main/css/color/light-red.css" title="light-red">
    <link rel="stylesheet" type="text/css" href="fame-bootstrap-main/css/color/blue.css" title="blue">
    <link rel="stylesheet" type="text/css" href="fame-bootstrap-main/css/color/light-blue.css" title="light-blue">
    <link rel="stylesheet" type="text/css" href="fame-bootstrap-main/css/color/yellow.css" title="yellow">
    <link rel="stylesheet" type="text/css" href="fame-bootstrap-main/css/color/light-green.css" title="light-green">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    
    
    <!-- Modernizer js -->
    <script src="fame-bootstrap-main/js/modernizr.custom.js"></script>

    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="index">
    
    
    <!-- Styleswitcher
================================================== -->
        <!--div class="colors-switcher">
            <a id="show-panel" class="hide-panel"><i class="fa fa-tint"></i></a>        
                <ul class="colors-list">
                    <li><a title="Light Red" onClick="setActiveStyleSheet('light-red'); return false;" class="light-red"></a></li>
                    <li><a title="Blue" class="blue" onClick="setActiveStyleSheet('blue'); return false;"></a></li>
                    <li class="no-margin"><a title="Light Blue" onClick="setActiveStyleSheet('light-blue'); return false;" class="light-blue"></a></li>
                    <li><a title="Green" class="green" onClick="setActiveStyleSheet('green'); return false;"></a></li>
                    
                    <li class="no-margin"><a title="light-green" class="light-green" onClick="setActiveStyleSheet('light-green'); return false;"></a></li>
                    <li><a title="Yellow" class="yellow" onClick="setActiveStyleSheet('yellow'); return false;"></a></li>
                    
                </ul>

        </div-->  
<!-- Styleswitcher End
================================================== -->

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <img src="img/logotipos/header.png" width="300">
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                       
                    </li>
                   
                    <li>
                        <a class="page-scroll" href="#reportesFinancieros">Reportes financieros</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#logistica">Logística</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#indicadores">Indicadores</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#serviceStation">Service Station</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Salir
                        </a> &nbsp;

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    
    
    
    <!-- Start Home Page Slider -->
    <section id="page-top">
        <!-- Carousel -->
        <div id="main-slide" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                <li data-target="#main-slide" data-slide-to="1"></li>
                <li data-target="#main-slide" data-slide-to="2"></li>
            </ol>
            <!--/ Indicators end-->

            <!-- Carousel inner -->
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="img/body.png" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <div class="container" style="border: #555 6px solid;height: 530px;border-radius: 10px;padding-left: 15px;">
                                  <div class="row">
                                      <div class="col-md-7" >
                                          <div style="margin:10px;height: 350px;width:90%;background: url(img/fotografias/Oktan.jpg);background-size: cover;background-position: 0px -30px;border:#666 3px solid;border-radius:10px; "></div>
                                      </div>
                                      <div class="col-md-5" ><img src="img/chart.JPG" style="width: 100%;"></div>
                                  </div>
                                    <div class="row">
                                        <div class="col-md-4 text-left">
                                                <center>12%</center>
                                                <div class="row">
                                                    <div class="col-md-3"><img src="img/tanque_verde.JPG" width="70px;"></div>
                                                    <div class="col-md-9">
                                                        Volumen = 2989<br>
                                                        Por llenar = 94167<br>
                                                        95% Por llenar = 89458<br>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="col-md-4 text-left">
                                                <center>56%</center>
                                                <div class="row">
                                                    <div class="col-md-3"><img src="img/tanque_rojo.JPG" width="70px;"></div>
                                                    <div class="col-md-9">
                                                        Volumen = 1987<br>
                                                        Por llenar = 38123<br>
                                                        95% Por llenar = 36118<br>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="col-md-4 text-left">
                                            <center>12%</center>
                                                <div class="row">
                                                    <div class="col-md-3"><img src="img/tanque_negro.JPG" width="70px;"></div>
                                                    <div class="col-md-9">
                                                        Volumen = 40938<br>
                                                        Por llenar = 9327<br>
                                                        95% Por llenar = 6814<br>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                            </div>
                            <!--h1 class="animated3">
                                <span><strong>MOVIMIENTO</strong> for the highest</span>
                            </h1>
                            <p class="animated2">At vero eos et accusamus et iusto odio dignissimos<br> ducimus qui blanditiis praesentium voluptatum</p>   
                            <a href="#feature" class="page-scroll btn btn-primary animated1">Read More</a-->
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
                
                <div class="item">
                    <img class="img-responsive" src="img/body.png" alt="slider">
                    
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <div class="container" style="border: #555 6px solid;height: 530px;border-radius: 10px;padding-left: 15px;">
                                  <div class="row">
                                      <div class="col-md-7" >
                                          <div style="margin:10px;height: 350px;width:90%;background: url(img/fotografias/Remdu.png);background-size: cover;background-position: 0px -30px;border:#666 3px solid;border-radius:10px; "></div>
                                      </div>
                                      <div class="col-md-5" ><img src="img/chart.JPG" style="width: 100%;"></div>
                                  </div>
                                    <div class="row">
                                        <div class="col-md-4 text-left">
                                                <center>12%</center>
                                                <div class="row">
                                                    <div class="col-md-3"><img src="img/tanque_verde.JPG" width="70px;"></div>
                                                    <div class="col-md-9">
                                                        Volumen = 2989<br>
                                                        Por llenar = 94167<br>
                                                        95% Por llenar = 89458<br>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="col-md-4 text-left">
                                                <center>56%</center>
                                                <div class="row">
                                                    <div class="col-md-3"><img src="img/tanque_rojo.JPG" width="70px;"></div>
                                                    <div class="col-md-9">
                                                        Volumen = 1987<br>
                                                        Por llenar = 38123<br>
                                                        95% Por llenar = 36118<br>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="col-md-4 text-left">
                                            <center>12%</center>
                                                <div class="row">
                                                    <div class="col-md-3"><img src="img/tanque_negro.JPG" width="70px;"></div>
                                                    <div class="col-md-9">
                                                        Volumen = 40938<br>
                                                        Por llenar = 9327<br>
                                                        95% Por llenar = 6814<br>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                            </div>
                            <!--h1 class="animated3">
                                <span><strong>MOVIMIENTO</strong> for the highest</span>
                            </h1>
                            <p class="animated2">At vero eos et accusamus et iusto odio dignissimos<br> ducimus qui blanditiis praesentium voluptatum</p>   
                            <a href="#feature" class="page-scroll btn btn-primary animated1">Read More</a-->
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
                
                <!--div class="item">
                    <img class="img-responsive" src="img/body.png" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated2">
                                <span>The way of <strong>Success</strong></span>
                            </h1>
                            <p class="animated1">At vero eos et accusamus et iusto odio dignissimos<br> ducimus qui blanditiis praesentium voluptatum</p>   
                             <a class="animated3 slider btn btn-primary btn-min-block" href="#">Get Now</a><a class="animated3 slider btn btn-default btn-min-block" href="#">Live Demo</a>
                                
                        </div>
                    </div>
                </div-->
                <!--/ Carousel item end -->
            </div>
            <!-- Carousel inner end-->

            <!-- Controls -->
            <a class="left carousel-control" href="#main-slide" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
            </a>
            <a class="right carousel-control" href="#main-slide" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
            </a>
        </div>
        <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->

    
    

    <section id="contact" class="contact">
        
        <footer class="style-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <img src="img/logotipos/logo.png" width="40%">
                    </div>
                    <!--div class="col-md-4 col-xs-12">
                        <div class="footer-social text-center">
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="footer-link">
                            <ul class="pull-right">
                                <li><a href="#">Privacy Policy</a>
                                </li>
                                <li><a href="#">Terms of Use</a>
                                </li>
                            </ul>
                        </div>
                    </div-->
                </div>
            </div>
        </footer>
    </section>


    <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>

    

    <!-- jQuery Version 2.1.1 -->
    <script src="fame-bootstrap-main/js/jquery-2.1.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="fame-bootstrap-main/asset/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="fame-bootstrap-main/js/jquery.easing.1.3.js"></script>
    <script src="fame-bootstrap-main/js/classie.js"></script>
    <script src="fame-bootstrap-main/js/count-to.js"></script>
    <script src="fame-bootstrap-main/js/jquery.appear.js"></script>
    <script src="fame-bootstrap-main/js/cbpAnimatedHeader.js"></script>
    <script src="fame-bootstrap-main/js/owl.carousel.min.js"></script>
    <script src="fame-bootstrap-main/js/jquery.fitvids.js"></script>
    <script src="fame-bootstrap-main/js/styleswitcher.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="fame-bootstrap-main/js/jqBootstrapValidation.js"></script>
    <script src="fame-bootstrap-main/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="fame-bootstrap-main/js/script.js"></script>

</body>

</html>
