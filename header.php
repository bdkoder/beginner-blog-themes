

<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <title><?php bloginfo( 'name' ); ?></title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open Sans:300,400" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Source Sans Pro:300,400" />
   

     <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
       
<!-- for mobile menu -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery.sidr.light.css">

<!-- for mobile menu -->
        <link rel="stylesheet" href=" <?php bloginfo('stylesheet_url' ); ?>">
<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="body_bg">






        
            <div id="container_header" class="container">
                <div id="header" class="row">
                    <div class="col-md-12 margin-top-15">
                        <!-- Header Social Icons -->
                        <ul class="social-icons circle pull-right">
                            <li class="social-twitter">
                                <a href="#" target="_blank" title="Twitter"></a>
                            </li>
                            <li class="social-facebook">
                                <a href="#" target="_blank" title="Facebook"></a>
                            </li>
                            <li class="social-googleplus">
                                <a href="#" target="_blank" title="GooglePlus"></a>
                            </li>
                            <li class="social-twitter">
                                <a href="#" target="_blank" title="GooglePlus"></a>
                            </li>
                        </ul>
                        <!-- End Header Social Icons -->
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="primary-container-group">
                <!-- Background -->
                <div class="primary-container-background">
                    <div class="primary-container"></div>
                    <div class="clearfix"></div>
                </div>
                <!--End Background -->
                <div class="primary-container">
                    <div id="container_hornav" class="container no-padding">
                        <!-- Logo -->
                        <div class="logo">
                           


                  

                               <?php
                    the_custom_logo(); 
                ?>
                        </div>
                        <!-- End Logo -->
                        <!-- Slogan -->
                        <p class="site-slogan">A BOOTSTRAP TEMPLATE</p>
                        <!-- End Slogan -->
                        <!-- Top Menu -->




                        <div class="row">
                            <div class="hornav-block">
                                <div id="hornav" class="pull-right">


                
                    
            <?php    /**
                * Displays a navigation menu
                * @param array $args Arguments
                */
               $defaultss = array(
                    'theme_location' => 'main_menu',
                    'menu' => '',
                    'container' => false,
                    'container_class' => '',
                    'container_id' => 'hornav ',
                    'menu_class' => 'nav navbar-nav',
                    'menu_id' => 'hornav',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                    'depth' => 0
                    //'walker' => new nav_menu()
                );
            
                wp_nav_menu( $defaultss ); ?>

                

                                   <!--  <ul id="hornavmenu" class="nav navbar-nav ">
                                        <li>
                                            <a href="index.html">Home</a>
                                        </li>
                            
                                        <li>
                                            <a href="contact.html">Contact</a>
                                        </li>
                                    </ul> -->
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Top Menu -->
                    </div>
                        