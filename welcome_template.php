<?php 

/*
Template Name: Welcome Template
*/

get_header(); ?>


<div class="container no-padding secondary">
                        <!-- === END HEADER === -->
                        <!-- === BEGIN CONTENT === -->

<div class="row">
    <!-- Carousel Slideshow -->
    <div id="carousel-example" class="carousel slide" data-ride="carousel">
        <!-- Carousel Indicators -->
      <!--   <ol class="carousel-indicators">
            <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example" data-slide-to="1"></li>
            <li data-target="#carousel-example" data-slide-to="2"></li>
        </ol> -->
        <!-- End Carousel Indicators -->
        <!-- Carousel Images -->
        <div class="carousel-inner">


      <?php
            global $post;

                $args = array( 'posts_per_page' => -1, 'post_type'=> 'slider');
                $myposts = get_posts( $args );

            foreach( $myposts as $post ) : setup_postdata($post); ?>

 <div class="item ">


    <?php the_post_thumbnail('slider-thumb',//eta function pic thum thekey asce...
// ekhane class add kora hoyece.........
                                            array('class'=>'a',

                                            )); ?>
 </div>

            <?php endforeach; ?>



                                </div>


<script type="text/javascript">

jQuery("documnet").ready(function (){

//jQuery("ul.nav li:first-child").addClass("active")
jQuery("div.carousel div.item:first-child").addClass("active")

});

</script>
                                <!-- End Carousel Images -->
                                <!-- Carousel Controls -->
                                <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                                <!-- End Carousel Controls -->
                            </div>

                            <!-- End Carousel Slideshow -->
                            <!-- Tabs -->
                            <div class="tabs-dark" style="padding:0;">
                                <!-- Tab Navigation -->


                                <ul class="nav nav-tabs">


            <?php
            global $post;

                $args = array( 'posts_per_page' => 7, 'post_type'=> 'sliderdowntab');
                $myposts = get_posts( $args );

            foreach( $myposts as $post ) : setup_postdata($post); ?>
                    
 <li class="">
                                        <a href="#home-<?php the_ID(); ?>" data-toggle="tab"><?php the_title(); ?></a>
                                    </li>
            <?php endforeach; ?>

                                   
                                    <!-- <li>
                                        <a href="#profile" data-toggle="tab">Profile</a>
                                    </li>
                                    <li>
                                        <a href="#messages" data-toggle="tab">Messages</a>
                                    </li> -->
                                </ul>
                                <!-- End Tab Navigation -->
                                <!-- Tab Panes -->
                                <div class="tab-content">

      <?php
            global $post;

                $args = array( 'posts_per_page' => 7, 'post_type'=> 'sliderdowntab');
                $myposts = get_posts( $args );

            foreach( $myposts as $post ) : setup_postdata($post); ?>
                    

                                     <div class="tab-pane fade in" id="home-<?php the_ID(); ?>">
                        <style>
.img-responsive{
    float: left; margin-right: 25px; margin-bottom: 10px;
}
                        </style>
                                        
  <?php the_post_thumbnail('sliderdowntab-thumb',//eta function pic thum thekey asce...
// ekhane class add kora hoyece.........
                                            array('class'=>'img-responsive',

                                            )); ?>
                                        <h3><?php the_title(); ?></h3>
                                        <p><?php the_content(); ?></p>
                                    </div>


            <?php endforeach; ?>

                                   



                              
                                </div>
                                <!-- End Tab Panes -->
                            </div>
                            <!-- End Tabs -->
                        </div>
                    </div>
<script type="text/javascript">
    
    jQuery("documnet").ready(function (){
       
            jQuery("div.tabs-dark ul.nav li:first-child").addClass("active")
            jQuery("div.tab-content div.tab-pane:first-child").addClass("active")
       
    });

</script>                   
                    <div class="container">
                        <div class="row">
                            <!-- Main Article -->
      <?php
            global $post;

                $args = array( 'posts_per_page' => 7, 'post_type'=> 'homepagedetails');
                $myposts = get_posts( $args );

            foreach( $myposts as $post ) : setup_postdata($post); ?>
                    

                              
                            <div class="col-md-12 margin-top-30">
                                <h2 class="item-title">
                                   <?php the_title(); ?>
                                </h2>
                                
                                     
  <?php the_post_thumbnail('homepagedetails-thumb',//eta function pic thum thekey asce...
// ekhane class add kora hoyece.........
                                            array('class'=>'animate fadeInRight home-right',

                                            )); ?>
                                    <?php the_content(); ?>
                            </div>


            <?php endforeach; ?>
 <style>
                                    .home-right{
                                        float: right;
                                    }
                                  </style>
     

                            <div class="clearfix"></div>
                            <!-- End Main Article -->
                        </div>
                    </div>

                    <div class="container no-padding gridgallery">
                        <!-- Portfolio Header Text -->
                        <div class="row">
                            <div class="col-md-12 padding-vert-30">
                                <h2 class="subtitle text-center">Defining Style for the Joomla Based Website of Today</h2>
                                <h3 class="subtitle text-center">Fiant tation qui fiant lius nisl. Est nam eros videntur eros at.</h3>
                            </div>
                        </div>
                        <!-- End Portfolio Header Text -->
                        <!-- Portfolio Images -->
                        <div class="portfolio-group">

                <?php
        global $post;

            $args = array( 'posts_per_page' => -1, 'post_type'=> 'homepageportfolio');
            $myposts = get_posts( $args );

        foreach( $myposts as $post ) : setup_postdata($post); ?>
<!-- Portfolio Item -->
                            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                                <div class="image-hover">
                                    <a href="<?php the_permalink(); ?>">
                                        <figure>
                                           
                                            
  <?php the_post_thumbnail('homepageportfolio-thumb',//eta function pic thum thekey asce...
// ekhane class add kora hoyece.........
                                            array('class'=>'',

                                            )); ?>

                                            <figcaption>
                                                <h3><?php the_title(); ?></h3>
                                                <span><?php the_content(); ?></span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- //Portfolio Item// -->
      

        <?php endforeach; ?>

        
                        
                         
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Portfolio Images -->
                        <!-- Portfolio Footer Text -->
                        <div class="row">
                            <div class="col-12-md">
                                <p class="text-center padding-bottom-30" style="max-width:690px; margin:0 auto;">Mirum est notare quam littera gothica, quam nunc putamus. Cras non sem sem, at eleifend mi. Vivamus sit amet ante est, sit amet rutrum augue. Cras non sem sem, at eleifend mi. Nam liber tempor cum soluta nobis eleifend
                                    option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                            </div>
                        </div>
                        <!-- End Portfolio Footer Text -->
                        <!-- === END CONTENT === -->
                        <!-- === BEGIN FOOTER === -->
                    </div>

              


      
 <?php get_footer(); ?>
                   