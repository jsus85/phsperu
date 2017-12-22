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

        <title><?php echo $blog_detalle[0]['titulo'];?> | Logitrans | Logistics & Transportation</title>
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
                            <h1><?php echo $blog_detalle[0]['titulo'];?></h1>
                            <div class="breadcrumbs">
                                <p>Estas aquí : 
                                <span><a href="<?php echo base_url();?>">Home</a></span>
                                <span class="arrow"><i class="icon icon-arrow-right"></i></span>
                                <span><a href="#">Blog</a></span>
                                <span class="arrow"><i class="icon icon-arrow-right"></i></span>
                                <span><?php echo $blog_detalle[0]['titulo'];?></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- PAGE TITLE END -->


            <!-- CONTENT START
            ============================================= -->
            <section id="content" class="clearfix">
                <!-- SERVICES START
                ============================================= -->
                <div class="blog single-post wrapper bg-color">
                    <div class="container">
                        <div class="row">
                            <div class="blog-wrap row">
                                <div class="post col-md-9">
                                    <div class="post-item">
                                        <div class="post-thumb">
                                            <a href="single-post.html">
                                                <img src="img/content/blog-md-1.jpg" alt="" />
                                                <div class="overlay"></div>
                                            </a>
                                        </div>

                                        <a href="single-post.html" class="post-title">
                                            <h3><?php echo $blog_detalle[0]['titulo'];?></h3>
                                        </a>

                                        <div class="meta">
                                            <span class="author"><i class="fa fa-user"></i> mochreza</span>
                                            <span class="date"><i class="fa fa-calendar"></i> 30 May 2015</span>
                                            <span class="views"><i class="fa fa-eye"></i> 95 Views</span>
                                            <span class="comments"><i class="fa fa-comment"></i> 2 Comments</span>
                                            <span class="tags last"><i class="fa fa-tag"></i> Business, Warehouse</span>
                                        </div>

                                        <div class="text-contet">
                                            <?php echo $blog_detalle[0]['descripcion'];?>
                                        </div>

                                        <div class="share">
                                            <span>Share : </span>
                                            <ul>
                                                <li><a href="http://facebook.com"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="http://twitter.com"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="http://tumblr.com"><i class="fa fa-tumblr"></i></a></li>
                                                <li><a href="http://vimeo.com"><i class="fa fa-vimeo"></i></a></li>
                                                <li><a href="http://linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="sidebar col-md-3">
                                    <div class="widget recent-post">
                                        <h4 class="title">Recientes Entradas</h4>
                                        <div class="recent-post">
                                            
                                            <?php 
                                             foreach ($blog as $value) {                                    
                                            $nombre = str_replace(" ", "-", $value->titulo);
?>
                                            <div class="post-item">
                                                <a href="single-post.html">
                                                    <div class="post-thumb">
                                                        <img width="50" height="50" src="<?php echo base_url();?>assets/images/contenidos/<?php echo $value->imagen;?>" alt="" />
                                                        <div class="overlay"></div>
                                                    </div>
                                                </a>
                                                <div class="post-content">
                                                    <a href="<?php echo base_url();?>blog/<?php echo strtolower($nombre);?>/<?php echo $value->id;?>">
                                                        <h4><?php echo $value->titulo;?></h4>
                                                    </a>
                                                    <div class="meta">
                                                        <span class="date">02 August, 2015</span>
                                                    </div>
                                                </div>
                                            </div>

                                          <?php 
                                                }
                                          ?>

                                        </div>
                                    </div>

                                    <div class="widget archives">
                                        <h4 class="title">Tags</h4>
                                        <ul>
                                            <li><a href="blog.html">September 2015</a></li>
                                            <li><a href="blog.html">October 2015</a></li>
                                            <li><a href="blog.html">November 2015</a></li>
                                            <li><a href="blog.html">Desember 2015</a></li>
                                        </ul>
                                    </div>

                                    <div class="widget tags last">
                                        <h4 class="title">Archives</h4>
                                        <div class="tag">
                                            <a href="blog.html">Warehouse</a>
                                            <a href="blog.html">Shipping</a>
                                            <a href="blog.html">Packaging</a>
                                            <a href="blog.html">Transport</a>
                                            <a href="blog.html">Truck</a>
                                            <a href="blog.html">Company</a>
                                            <a href="blog.html">Tips</a>
                                            <a href="blog.html">Business</a>
                                            <a href="blog.html">Courier</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SERVICES END -->
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