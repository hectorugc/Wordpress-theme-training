<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <title> </title>
    <?php wp_head() ?>
</head>

<body>
    <?php wp_body_open();  ?>


      <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
		<!-- Header Area Start -->





		<div id="header-area" class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <a href="index.html" class="logo float-left">  <?php the_custom_logo() ?> </a>
                        <button class="menu-open float-right"><i class="ti-list"></i></button>
                    </div>
                </div>
            </div>
        </div>                                         
        <!-- Menu Area Start -->
        <div id="menu-area" class="menu-area">
            <div class="main-menu text-center">
                <button class="menu-close float-left"><i class="ti-close"></i></button>
                <nav>
                    <ul>
                        <li class="active"><a href="index.html">home</a>
                            <ul>
                                <li><a href="index.html">home one</a></li>
                                <li><a href="index-2.html">home two</a></li>
                                <li><a href="index-3.html">home three</a></li>
                            </ul>
                        </li>
                        <?php wp_nav_menu(
                       [
                           "menu" => "menu-principal"
                       ]
                   ) ?>
                    </ul>
                </nav>
            </div>
        </div>
		<!-- Header Area End -->
		<!-- Background Area Start -->
		<section id="slider" class="slider-area">	
		    <div class="slider-wrapper">
		        <div class="single-slide height-100vh" style="background-image: url(<?php echo get_template_directory_uri() .  '/assets/img/slider/slider1.jpg' ?> );">
                    <div class="slider-content">
                        <div class="text-content-wrapper">
                            <div class="text-content text-center">
                                <h5>Think Biger From Other</h5>
                                <h2>creative theme customizeable for all</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut dolore magna aliqua. Ut enim ad minimcommodo consequat. Duis aute irure dolor </p>
                                <a href="#" class="default-btn">read more</a>
                            </div>
                        </div>
                    </div>
		        </div>
		        <div class="single-slide height-100vh" style="background-image: url( <?php echo get_template_directory_uri() . '/assets/img/slider/slider2.jpg' ?> );">
                    <div class="slider-content">
                        <div class="text-content-wrapper">
                            <div class="text-content text-center">
                                <h5>Think Biger From Other</h5>
                                <h2>creative theme customizeable for all</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut dolore magna aliqua. Ut enim ad minimcommodo consequat. Duis aute irure dolor </p>
                                <a href="#" class="default-btn">read more</a>
                            </div>
                        </div>
                    </div>
		        </div>
		        <div class="single-slide height-100vh" style="background-image: url( <?php echo get_template_directory_uri() . '/assets/img/slider/slider3.jpg' ?> );">
                    <div class="slider-content">
                        <div class="text-content-wrapper">
                            <div class="text-content text-center">
                                <h5>Think Biger From Other</h5>
                                <h2>creative theme customizeable for all</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut dolore magna aliqua. Ut enim ad minimcommodo consequat. Duis aute irure dolor </p>
                                <a href="#" class="default-btn">read more</a>
                            </div>
                        </div>
                    </div>
		        </div>
		    </div>
		</section>
		<!-- Background Area End -->
        <!-- About Start -->
        <section class="about-area pt-100 pb-100 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="about-video">
                            <div class="video-bg">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/about/about.jpg'?>  " alt="about.jpg">  
                            </div>
                            <div class="video-icon video-hover">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=wFIzJQkeShM">
                                    <i class="ti-control-play"></i>
                                </a>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="about-content">
                            <div class="section-title"> 
                                <h3>about <span>us</span></h3>
                            </div>
                            <p class="bold">Lorem ipsum dolor sit amet, consectetur adimi scing eit, sed do eiusmod tempor incidid unt ut labore ealiqua.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempori nci didunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexer citation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dol in reprehenderit in </p>
                            <a href="#" class="default-btn">read more</a>
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <!-- About End -->
        <!-- Service Start -->
        <section id="service" class="service-area pt-100 pb-100 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-service">
                            <div class="single-service-icon">
                                <a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/img/icon/icon1.png' ?> " alt="service"></a>
                            </div>
                            <div class="single-service-content">
                                <h4>Unique Design</h4>
                                <p>Lorem ipsum dolor sit amet, eos qui rationeseqm eius mmagnam aliquam quaerat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-service">
                            <div class="single-service-icon">
                                <a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/img/icon/icon2.png'?>" alt="service"></a>
                            </div>
                            <div class="single-service-content">
                                <h4>Full Time Support</h4>
                                <p>Lorem ipsum dolor sit amet, eos qui rationeseqm eius mmagnam aliquam quaerat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-service">
                            <div class="single-service-icon">
                                <a href="#"><img src="<?php echo get_template_directory_uri()  . '/assets/img/icon/icon3.png' ?>" alt="service"></a>
                            </div>
                            <div class="single-service-content">
                                <h4>Design Development</h4>
                                <p>Lorem ipsum dolor sit amet, eos qui rationeseqm eius mmagnam aliquam quaerat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 hidden-sm col-xs-12">
                        <div class="single-service">
                            <div class="single-service-icon">
                                <a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/img/icon/icon4.png'?> " alt="service"></a>
                            </div>
                            <div class="single-service-content">
                                <h4>Graphic Design</h4>
                                <p>Lorem ipsum dolor sit amet, eos qui rationeseqm eius mmagnam aliquam quaerat.</p>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </section>
        <!-- Service Area End -->
        <!-- Fun Area Start -->
        <section id="fun" class="fun-area pt-100 pb-100 text-center">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-fun">
                            <div class="single-fun-content">
                                <span class="ti-comment"></span>
                                <h3 class="counter">300</h3>
                                <p>reviews</p> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-fun">
                            <div class="single-fun-content">
                                <span class="ti-crown"></span>
                                <h3 class="counter">90</h3>
                                <p>awards</p> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-fun">
                            <div class="single-fun-content">
                                <span class="ti-star"></span>
                                <h3 class="counter">100</h3>
                                <p>rating</p> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 hidden-sm col-xs-12">
                        <div class="single-fun">
                            <div class="single-fun-content">
                                <span class="ti-download"></span>
                                <h3 class="counter">500</h3>
                                <p>downloads</p> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fun Area End -->
        <!-- latest area start -->
        <div id="portfolio" class="latest-area text-center pt-95 pb-95">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="project-title text-left">
                            <h3>project work</h3> 
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="gallery_menu portfolio-menu">
                            <ul id="filter" class="filter-menu">
                                <li class="current_menu_item active" data-filter="*">View All</li>
                                <li data-filter=".graphic">graphic design</li>
                                <li data-filter=".print">corporate</li>
                                <li data-filter=".Branding">Web design</li>
                                <li data-filter=".app">Apps design</li>
                            </ul>
                        </div><!-- gallery_menu End -->
                    </div>
                </div>
                <div class="row">            
                    <div class="portfolio_gallery_area">
                        <div class="gallery"> 
                            <div class="gallery_items clearfix">
                                <div class="grid-item single-portfolio graphic Branding app">
                                    <div class="portfolio_effect single-portfolio-item">
                                        <img class="img-responsive" src=" <?php echo get_template_directory_uri() . '/assets/img/project/project1.jpg'?> " alt="gallery image 1">
                                        <div class="portfolio-detail">
                                            <a class="image-popup" href="<?php  echo get_template_directory_uri() . '/assets/img/project/project1b.jpg' ?> ">
                                                <span class="ti-fullscreen"></span>
                                            </a>
                                            <div class="portfolio-detail-info">
                                                <h5><a href="#">Graphic Design</a></h5>
                                                <h6>Business Card</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- grid-item End --> 
                                <div class="grid-item single-portfolio grid-item-1 graphic print Branding">
                                    <div class="portfolio_effect single-portfolio-item">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/assets/img/project/project2.jpg' ?> " alt="gallery image 1">
                                        <div class="portfolio-detail">
                                            <a class="image-popup" href="<?php echo get_template_directory_uri()  . '/assets/img/project/project1b.jpg' ?>">
                                                <span class="ti-fullscreen"></span>
                                            </a>
                                            <div class="portfolio-detail-info">
                                                <h5><a href="#">Graphic Design</a></h5>
                                                <h6>Business Card</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- grid-item End --> 
                                <div class="grid-item single-portfolio Branding app web">
                                    <div class="portfolio_effect single-portfolio-item">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/assets/img/project/projec3.jpg'?> " alt="gallery image 1">
                                        <div class="portfolio-detail">
                                            <a class="image-popup" href="<?php echo get_template_directory_uri() . '/assets/img/project/project3b.jpg' ?> ">
                                                <span class="ti-fullscreen"></span>
                                            </a>
                                            <div class="portfolio-detail-info">
                                                <h5><a href="#">Graphic Design</a></h5>
                                                <h6>Business Card</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- grid-item End --> 
                                <div class="grid-item single-portfolio grid-item-2 graphic Branding print web">
                                    <div class="portfolio_effect single-portfolio-item">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri()   . '/assets/img/project/project4.jpg'?>" alt="gallery image 1">
                                        <div class="portfolio-detail">
                                            <a class="image-popup" href="<?php echo get_template_directory_uri() . '/assets/img/project/project4b.jpg'?> ">
                                                <span class="ti-fullscreen"></span>
                                            </a>
                                            <div class="portfolio-detail-info">
                                                <h5><a href="#">Graphic Design</a></h5>
                                                <h6>Business Card</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- grid-item End --> 
                                <div class="grid-item single-portfolio grid-item-2 graphic print app web">
                                    <div class="portfolio_effect single-portfolio-item">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/assets/img/project/project5.jpg' ?> " alt="gallery image 1">
                                        <div class="portfolio-detail">
                                            <a class="image-popup" href="<?php echo get_template_directory_uri() . '/assets/img/project/project5b.jpg'?> ">
                                                <span class="ti-fullscreen"></span>
                                            </a>
                                            <div class="portfolio-detail-info">
                                                <h5><a href="#">Graphic Design</a></h5>
                                                <h6>Business Card</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- grid-item End --> 
                                <div class="grid-item single-portfolio web Branding">
                                    <div class="portfolio_effect single-portfolio-item">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri()  . '/assets/img/project/project6.jpg' ?>" alt="gallery image 1">
                                        <div class="portfolio-detail">
                                            <a class="image-popup" href="<?php echo get_template_directory_uri() . '/assets/img/project/project6b.jpg' ?> ">
                                                <span class="ti-fullscreen"></span>
                                            </a>
                                            <div class="portfolio-detail-info">
                                                <h5><a href="#">Graphic Design</a></h5>
                                                <h6>Business Card</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- grid-item End --> 
                            </div><!-- gallery-items End --> 
                        </div><!-- gallery End --> 
                    </div><!-- portfolio_gallery_area End -->  
                </div>  
            </div>
        </div>



    
                    


