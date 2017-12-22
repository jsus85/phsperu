<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en-US"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en-US"> <![endif]-->
<!--[if gte IE 8]><html class="ie ie8" lang="en-US"> <![endif]-->

<html dir="ltr" lang="en-US">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- Google Fonts
        ============================================= -->
        <link href='https://fonts.googleapis.com/css?family=Lato:400,900,700,300' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

        <!-- Stylesheets
        ============================================= -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/plugin.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/style.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/responsive.css" type="text/css" />

        <!-- JavaScripts
        ============================================= -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/jquery.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <title><?php echo $servicio[0]['titulo'];?> | Logitrans | Logistics & Transportation</title>
    </head>

    <body onload="hideTotal()">
        
        <div id="preloader">
            <div id="status">
                <img src="<?php echo base_url();?>assets/front/img/logo.png" alt="" />
            </div>
        </div>

        <!-- MAIN WRAPPER
        ============================================= -->
        <div id="main-wrapper" class="clearfix">

            <!-- HEADER
            ============================================= -->
          	<?php $this->load->view('include/header.php');?>  
            <!-- HEADER END -->

                   <!-- PAGE TITLE START
            ============================================= -->
            <section class="page-title wrapper clearfix" style="background-image: url(<?php echo base_url();?>assets/front/img/about-page-bg.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="title-wrap wow fadeIn" data-wow-delay="1s">
                            <h1><?php echo $servicio[0]['titulo'];?></h1>
                            <div class="breadcrumbs">
                                <p>Estas aquí : 
                                <span><a href="<?php echo base_url();?>">Home</a></span>
                                <span class="arrow"><i class="icon icon-arrow-right"></i></span>
                                <span><a href="#">Servicos</a></span>
                                <span class="arrow"><i class="icon icon-arrow-right"></i></span>
                                <span><?php echo $servicio[0]['titulo'];?></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- PAGE TITLE END -->

             <!-- CONTENT START
            ============================================= -->
            <section id="content" class="clearfix">
                <!-- SINGLE SERVICES START
                ============================================= -->
                <div class="single-services wrapper bg-color">
                    <div class="container">
                        <div class="row">
                            <div class="single-services-wrap row">
                                <div class="single-content col-md-9">
                                    <img src="<?php echo base_url();?>assets/images/contenidos/<?php echo $servicio[0]['imagen'];?>" alt="<?php echo $servicio[0]['titulo'];?>" />
                                    <h3 class="title"><?php echo $servicio[0]['titulo'];?></h3>
                                    <div class="content-text">
                                        <?php echo $servicio[0]['descripcion'];?>
                                    </div>

                                    <div class="features-wrap row">
                                        <div class="col-md-4">
                                            <div class="features-item wow fadeInUp" data-wow-delay="1.2s">
                                                <div class="icon-wrap">
                                                    <i class="icon icon-cargo"></i>
                                                </div>
                                                <div class="text">
                                                    <h4>Sea Delivery</h4>
                                                    <p>Lorem ipsum dolor sit amet, consec adip tesque tinciunt rutrum sapien, sed diam.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="features-item wow fadeInUp" data-wow-delay="1.6s">
                                                <div class="icon-wrap">
                                                    <i class="icon icon-box-delivery"></i>
                                                </div>
                                                <div class="text">
                                                    <h4>Packaged Goods</h4>
                                                    <p>Lorem ipsum dolor sit amet, consec adip tesque tinciunt rutrum sapien, sed diam.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="features-item wow fadeInUp" data-wow-delay="1.9s">
                                                <div class="icon-wrap">
                                                    <i class="icon icon-storage"></i>
                                                </div>
                                                <div class="text">
                                                    <h4>Warehousing</h4>
                                                    <p>Lorem ipsum dolor sit amet, consec adip tesque tinciunt rutrum sapien, sed diam.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="sidebar col-md-3">
                                    <div class="widget other-services">
                                        <h4 class="title">Otros Servicios</h4>
                                        <ul>
                                             <?php foreach ($servicios as $value) {
                                                    $nombre = seo_url($value->titulo);
                                                ?>
                                                <li><a href="<?php echo base_url();?>servicios/<?php echo strtolower($nombre);?>/<?php echo $value->id;?>"><?php echo ucwords(strtolower($value->titulo));?></a></li>
                                            <?php }?>
                                        </ul>
                                    </div>
                                    <div class="widget pdf-download">
                                        <h4 class="title">PDF Download</h4>
                                        <ul>
                                            <li><a href="#"><span><i class="fa fa-file-pdf-o"></i></span>Annual Brochure 2015</a></li>
                                            <li><a href="#"><span><i class="fa fa-file-pdf-o"></i></span>Annual Brochure 2015 / EN</a></li>
                                            <li><a href="#"><span><i class="fa fa-file-pdf-o"></i></span>Annual Brochure Services</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="contact-us-banner text-center wow fadeIn" data-wow-delay="0.5s">
                                <h1>Are you ready to work with us?</h1>
                                <a href="contact.html" class="button-normal">Contact Us Now</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- SINGLE SERVICES END -->
            </section>
            <!-- CONTENT END -->
            
            <!-- FOOTER START
            ============================================= -->
            <?php $this->load->view('include/footer.php');?>  
            <!-- FOOTER END -->

        </div>
        <!-- MAIN WRAPPER END -->

        <!-- Footer Scripts
        ============================================= -->
        <!-- External -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/plugin.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/main.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/formcalculations.js"></script>
    </body>
</html>