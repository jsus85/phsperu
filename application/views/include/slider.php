     <section id="slider" class="home-slider clearfix">
                <div class="slider-wrapper">
                    <div class="flexslider clearfix">
                        <ul class="slides">

                            <?php 
                                foreach ($list as $value) {
                            ?>
                            <li class="slide-item clearfix" style="background-image: url(<?php echo base_url();?>assets/images/slider/<?php echo $value->imagen;?>);">

                                <div class="flex-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="caption-wrap">
                                                <div class="caption wow fadeInUp" data-wow-delay="0.5s">
                                                    <h1><?php echo $value->nombres;?></h1>
                                                </div> 
                                                <div class="caption wow fadeIn" data-wow-delay="1s">
                                                    <p><?php echo $value->descripcion;?></p>
                                                </div>
                                                <div class="caption wow fadeInUp" data-wow-delay="1.5s">
                                                    <a href="<?php echo $value->url;?>" class="button-normal">Leer más</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php }?>
                     
                        </ul>
                    </div>
                </div>
            </section>