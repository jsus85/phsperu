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

        <title>Logitrans | Logistics & Transportation</title>
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

            <!-- SLIDER START
            ============================================= -->
       		 <?php $this->load->view('include/slider.php');?> 
            <!-- SLIDER END -->

            <!-- CONTENT START
            ============================================= -->
            <section id="content" class="clearfix">

                <!-- SERVICES START
                ============================================= -->
                <div class="services with-bg">
                    <div class="container">
                        <div class="row">

                            <!-- Service Quote -->
                            <div class="email-quote clearfix">
                                <h4>Request a Quote</h4>
                                <form method="post">
                                    <input class="col-md-6" type="text" placeholder="Your Email" name="search_query" value="">
                                    <div class="category_filter col-md-6">
                                        <select name="cate" id="cate">
                                            <option value="">Services</option>
                                            <option>Overland Network</option>
                                            <option>Ocean Network</option>
                                            <option>Air Freight</option>
                                            <option>Cargo</option>
                                            <option>Storage</option>
                                            <option>Warehouse</option>
                                        </select>
                                        <button type="submit" class="button-normal"><span>send now</span></button>
                                    </div>
                                </form>
                            </div>
                            <!-- Service Quote -->
                        </div>
                    </div>

					<!-- LISTADO DE SERVICIOS
	                ============================================= -->
                    <div class="section-title text-center wow fadeIn">
                        <h2>NUESTROS SERVICIOS</h2>
                    </div>

                    <div class="services-wrap-carousel">
                                        
					 <?php foreach ($servicios as $value) {
                            

					 		$nombre = seo_url($value->titulo);

					 	?>
                        <div class="item">
                            <div class="services-content">
                                <div class="services-image" style="background-image: url(<?php echo base_url();?>assets/images/contenidos/<?php echo $value->imagen;?>);"></div>
                                <div class="services-text">
                                    <h3 class="title"><?php echo $value->titulo;?></h3>
                                    <p><?php echo $value->resumen;?></p>
                                    <a href="<?php echo base_url();?>servicios/<?php echo strtolower($nombre);?>/<?php echo $value->id;?>" class="button-normal with-icon">
                                        Leer más
                                        <i class="icon icon-arrow-right"></i>
                                    </a>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
					 <?php } ?>
                    </div>        
                </div>
                <!-- SERVICES END -->


                <!-- FEATURES START
                ============================================= -->
                <div class="features wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="section-title text-center wow fadeIn">
                                <h2>Why Choose Us</h2>
                            </div>
                            
                            <div class="features-wrap row">
                                <div class="col-md-4">
                                    <div class="features-item wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="icon-wrap">
                                            <i class="icon icon-delivery"></i>
                                        </div>
                                        <div class="text">
                                            <h4>Ground Shipping</h4>
                                            <p>Lorem ipsum dolor sit amet, consec adip tesque tinciunt rutrum sapien, sed diam.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="features-item wow fadeInUp" data-wow-delay="0.8s">
                                        <div class="icon-wrap">
                                            <i class="icon icon-airplane"></i>
                                        </div>
                                        <div class="text">
                                            <h4>Air Delivery</h4>
                                            <p>Lorem ipsum dolor sit amet, consec adip tesque tinciunt rutrum sapien, sed diam.</p>
                                        </div>
                                    </div>
                                </div>

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
                                    <div class="features-item wow fadeInUp" data-wow-delay="1.3s">
                                        <div class="icon-wrap">
                                            <i class="icon icon-container"></i>
                                        </div>
                                        <div class="text">
                                            <h4>Forwarding Services</h4>
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
                    </div>
                </div>
                <!-- FEATURES END -->

                <!-- SERVICES CALCULATOR START
                ============================================= -->
                <div class="services-calculator bg-color">
                    <div class="container">
                        <div class="row">
                            <div class="services-calculator-wrap row">
                                <div class="intro-section col-md-6">
                                    <h3 class="title">Services Calculator</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    <div class="image">
                                        <img src="<?php echo base_url();?>assets/front/img/content/service-calculator-img.png" alt="" />
                                    </div>
                                </div>

                                <div class="form-section col-md-6">
                                    <form id="calculationform" onsubmit="return false;">
                                        <p class="intro">* Please fill all inquiry to get your total price</p>
                                        <fieldset>
                                            <label>Services</label>
                                            <select id="services_type" name='services_type' onchange="calculateTotal()">
                                                <option value="None">Select Services</option>
                                                <option value="Overland">Overland Network</option>
                                                <option value="Ocean">Ocean Network</option>
                                                <option value="Air">Air Freight</option>
                                                <option value="Cargo">Cargo</option>
                                                <option value="Storage">Storage</option>
                                                <option value="Warehousing">Warehousing</option>
                                            </select>

                                            <label>Type of Goods</label>
                                            <select id="goods_type" name='goods_type' onchange="calculateTotal()">
                                                <option value="None">Type of Goods</option>
                                                <option value="General">General Merchandise</option>
                                                <option value="Fragile">Fragile Goods</option>
                                                <option value="Fine">Fine Arts</option>
                                                <option value="Hazardous">Hazardous Goods</option>
                                            </select>

                                            <p class="extra-services">
                                                <label>Extra Services</label>
                                                <span>
                                                    <label for='expressdelivery'>Express Delivery</label>
                                                    <input type="checkbox" id="expressdelivery" name='expressdelivery' onclick="calculateTotal()" />
                                                </span>
                                                <span>
                                                    <label for='insurance'>Add Insurance</label>
                                                    <input type="checkbox" id="insurance" name='insurance' onclick="calculateTotal()" />
                                                </span>
                                                <span>
                                                    <label for='packaging'>Packaging</label>
                                                    <input type="checkbox" id="packaging" name='packaging' onclick="calculateTotal()" />
                                                </span>
                                            </p>

                                            <p class="fragile clearfix">
                                                <label>Fragile</label>
                                                <span>
                                                    <label for='fragileyes'>Yes</label>
                                                    <input type="checkbox" id="fragileyes" name='fragileyes' onclick="calculateTotal()" />
                                                </span>
                                            </p>
                                            
                                            <div id="totalPrice">
                                                Total Price = $
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SERVICE CALCULATOR END -->

                <!-- TESTIMONIAL START
                ============================================= -->
                <div class="testimonial wrapper with-bg">
                    <div class="container">
                        <div class="row">
                            <div class="section-title text-center wow fadeIn">
                                <h2>Testimonials</h2>
                            </div>
                            
                            <div class="owl-carousel wow fadeIn" data-wow-delay="0.5s">
                                <div class="testimonial-item">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

                                    <div class="client-info">
                                        <img src="<?php echo base_url();?>assets/front/img/content/client-photo-1.png" alt="" />
                                        <div class="client-details">
                                            <h3>John Doe</h3>
                                            <p>CEO of Candy's Heaven</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="testimonial-item">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

                                    <div class="client-info">
                                        <img src="<?php echo base_url();?>assets/front/img/content/client-photo-2.png" alt="" />
                                        <div class="client-details">
                                            <h3>Carol Linda</h3>
                                            <p>Branch Manager of KLM</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="testimonial-item">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

                                    <div class="client-info">
                                        <img src="<?php echo base_url();?>assets/front/img/content/client-photo-1.png" alt="" />
                                        <div class="client-details">
                                            <h3>Steven Smith</h3>
                                            <p>CTO of Minyak Telon</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="our-partner">
                                <div class="partner-logo col-md-15 wow fadeIn" data-wow-delay="0.3s">
                                    <img src="<?php echo base_url();?>assets/front/img/content/partner-01.png" alt="" />
                                </div>
                                <div class="partner-logo col-md-15 wow fadeIn" data-wow-delay="0.6s">
                                    <img src="<?php echo base_url();?>assets/front/img/content/partner-02.png" alt="" />
                                </div>
                                <div class="partner-logo col-md-15 wow fadeIn" data-wow-delay="0.9s">
                                    <img src="<?php echo base_url();?>assets/front/img/content/partner-03.png" alt="" />
                                </div>
                                <div class="partner-logo col-md-15 wow fadeIn" data-wow-delay="1.2s">
                                    <img src="<?php echo base_url();?>assets/front/img/content/partner-04.png" alt="" />
                                </div>
                                <div class="partner-logo col-md-15 wow fadeIn" data-wow-delay="1.5s">
                                    <img src="<?php echo base_url();?>assets/front/img/content/partner-05.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TESTIMONIAL END -->

                <!-- LATEST NEWS START
                ============================================= -->
                <div class="latest-post wrapper bg-color">
                    <div class="container">
                        <div class="row">
                            <div class="section-title text-center wow fadeIn">
                                <h2>Latest News</h2>
                            </div>

                            <div class="post-wrap wow fadeIn" data-wow-delay="0.5s">
                                <div class="post-item">
                                    <div class="post-thumb">
                                        <a href="single-post.html">
                                            <img src="<?php echo base_url();?>assets/front/img/content/latest-post-thumb-1.jpg" alt="" />
                                            <div class="overlay"></div>
                                        </a>
                                    </div>

                                    <div class="post-content">
                                        <div class="date">
                                            <span>20</span>
                                            <span>May</span>
                                        </div>
                                        <div class="content-wrap">
                                            <h4>Transformtive Donation For Main Philanthropy</h4>
                                            <div class="meta">
                                                <span class="author"><i class="fa fa-user"></i> mochreza</span>
                                                <span class="views"><i class="fa fa-eye"></i> 95 Views</span>
                                                <span class="comments last"><i class="fa fa-comment"></i> 2 Comments</span>
                                            </div>
                                            <p class="excerpt">Etiamt vehicula elit.Vivauedaus rutrum mi ut aliquam In hac habitasse platore dictum will Integer sagittis neque in porta semes.</p>
                                            <a href="single-post.html" class="button-normal with-icon">
                                                Read More
                                                <i class="icon icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="post-item">
                                    <div class="post-thumb">
                                        <a href="single-post.html">
                                            <img src="<?php echo base_url();?>assets/front/img/content/latest-post-thumb-2.jpg" alt="" />
                                            <div class="overlay"></div>
                                        </a>
                                    </div>

                                    <div class="post-content">
                                        <div class="date">
                                            <span>26</span>
                                            <span>May</span>
                                        </div>
                                        <div class="content-wrap">
                                            <h4>Corporate Meeting Turns Into a Photo Shooting</h4>
                                            <div class="meta">
                                                <span class="author"><i class="fa fa-user"></i> mochreza</span>
                                                <span class="views"><i class="fa fa-eye"></i> 95 Views</span>
                                                <span class="comments last"><i class="fa fa-comment"></i> 2 Comments</span>
                                            </div>
                                            <p class="excerpt">Etiamt vehicula elit.Vivauedaus rutrum mi ut aliquam In hac habitasse platore dictum will Integer sagittis neque in porta semes.</p>
                                            <a href="single-post.html" class="button-normal with-icon">
                                                Read More
                                                <i class="icon icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="post-item">
                                    <div class="post-thumb">
                                        <a href="single-post.html">
                                            <img src="<?php echo base_url();?>assets/front/img/content/latest-post-thumb-3.jpg" alt="" />
                                            <div class="overlay"></div>
                                        </a>
                                    </div>

                                    <div class="post-content">
                                        <div class="date">
                                            <span>30</span>
                                            <span>May</span>
                                        </div>
                                        <div class="content-wrap">
                                            <h4>Statistics and Analysis The Key To Success</h4>
                                            <div class="meta">
                                                <span class="author"><i class="fa fa-user"></i> mochreza</span>
                                                <span class="views"><i class="fa fa-eye"></i> 95 Views</span>
                                                <span class="comments last"><i class="fa fa-comment"></i> 2 Comments</span>
                                            </div>
                                            <p class="excerpt">Etiamt vehicula elit.Vivauedaus rutrum mi ut aliquam In hac habitasse platore dictum will Integer sagittis neque in porta semes.</p>
                                            <a href="single-post.html" class="button-normal with-icon">
                                                Read More
                                                <i class="icon icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- LATEST NEWS END -->

                <!-- COUNTER NUMBER START
                ============================================= -->
                <div class="counter-section wrapper">
                    <div class="container">
                        <div class="row">

                            <div class="counter-wrap row">
                                <div class="counter-item col-md-15 wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="counter">1,273</h2>
                                    <div class="counter-details">
                                        <p class="heading">Delivered Packages</p>
                                        <p>The core values are the guiding principles that dictate behavior and action.</p>
                                    </div>
                                </div>

                                <div class="counter-item col-md-15 wow fadeInUp" data-wow-delay="0.4s">
                                    <h2 class="counter">473,754</h2>
                                    <div class="counter-details">
                                        <p class="heading">KM Per Year</p>
                                        <p>The core values are the guiding principles that dictate behavior and action.</p>
                                    </div>
                                </div>

                                <div class="counter-item col-md-15 wow fadeInUp" data-wow-delay="0.6s">
                                    <h2 class="counter">25</h2>
                                    <div class="counter-details">
                                        <p class="heading">Years of Experience</p>
                                        <p>The core values are the guiding principles that dictate behavior and action.</p>
                                    </div>
                                </div>

                                <div class="counter-item col-md-15 wow fadeInUp" data-wow-delay="0.8s">
                                    <h2 class="counter">719</h2>
                                    <div class="counter-details">
                                        <p class="heading">Happy Clients</p>
                                        <p>The core values are the guiding principles that dictate behavior and action.</p>
                                    </div>
                                </div>

                                <div class="counter-item col-md-15 wow fadeInUp" data-wow-delay="1s">
                                    <h2 class="counter">4,234</h2>
                                    <div class="counter-details">
                                        <p class="heading">Tons of Goods</p>
                                        <p>The core values are the guiding principles that dictate behavior and action.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COUNTER NUMBER END -->

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