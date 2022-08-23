<?php 

/*
Template Name: About Us
*/

get_header(); ?>
                    <div class="container">
                        <!-- === END HEADER === -->
                        <!-- === BEGIN CONTENT === -->
                        <div class="row margin-vert-30">
                            <div class="col-md-12">
                                <h2>About Us</h2>
                                <div class="row">
                                    <div class="col-md-6">



                <?php
        global $post;

            $args = array( 'posts_per_page' => 1, 'post_type'=> 'about-us-main-post');
            $myposts = get_posts( $args );

        foreach( $myposts as $post ) : setup_postdata($post); ?>
<!-- Main Item -->

<?php the_content() ?>             
 <!-- //Main Item// -->
      

        <?php endforeach; ?>
                                       
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Carousel -->
                                        <div id="carousel-example-1" class="carousel slide" data-ride="carousel">
                                            <!-- Indicators -->
                                            <ol class="carousel-indicators">
                                              <!--   <li data-target="#carousel-example-1" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-example-1" data-slide-to="1"></li>
                                                <li data-target="#carousel-example-1" data-slide-to="2"></li>
                                             -->
                                            </ol>
                                            <!-- Wrapper for slides -->
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
   <style>
                .a{
                    min-height: 325px;
                }
            </style>
                                 <script type="text/javascript">
    
    jQuery("documnet").ready(function (){
       
            //jQuery("ul.nav li:first-child").addClass("active")
            jQuery("div.carousel div.item:first-child").addClass("active")
       
    });

</script>
          
                                            <!-- Controls -->
                                            <a class="left carousel-control" href="#carousel-example-1" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                            </a>
                                            <a class="right carousel-control" href="#carousel-example-1" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                            </a>
                                        </div>
                                        <!-- End Carousel -->
                                    </div>
                                </div>
                                <hr class="margin-vert-40">
                                <!-- Meet the Team -->
                                <h2 class="margin-vert-20">Meet the Team</h2>
                                <div class="row margin-bottom-30">
                               
             <?php
            global $post;

                $args = array( 'posts_per_page' => -1, 'post_type'=> 'about-us-our-team');
                $myposts = get_posts( $args );

            foreach( $myposts as $post ) : setup_postdata($post); ?>

   <!-- Person Details -->
                                    <div class="col-sm-3 person-details">
                                        <figure>
                                          
    <?php the_post_thumbnail('about-us-our-team-thumb',//eta function pic thum thekey asce...
// ekhane class add kora hoyece.........
                                            array('class'=>'',

                                            )); ?>
                                            <figcaption>
                                                <h3><?php the_title() ?>
                                                    <small>- Graphic Design</small>
                                                </h3>
                                                <span><?php the_content() ?></span>
                                            </figcaption>
                                            <ul class="list-inline person-details-icons">
                                                <li>
                                                    <a href="#">
                                                        <i class="fa-lg fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa-lg fa-linkedin"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa-lg fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa-lg fa-dribbble"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa-lg fa-google-plus"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </figure>
                                    </div>
                                    <!-- //Portfolio Item// -->
            <?php endforeach; ?>                        
                                    <!-- Person Details -->
                                    <div class="col-sm-3 person-details">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/theteam/image4.jpg" alt="image4">
                                            <figcaption>
                                                <h3>Chris
                                                    <small>- Graphic Design</small>
                                                </h3>
                                                <span>Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper.</span>
                                            </figcaption>
                                            <ul class="list-inline person-details-icons">
                                                <li>
                                                    <a href="#">
                                                        <i class="fa-lg fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa-lg fa-linkedin"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa-lg fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa-lg fa-dribbble"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa-lg fa-google-plus"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </figure>
                                    </div>
                                    <!-- //Portfolio Item// -->     


                                     <!-- Person Details -->
                                    <!-- <div class="col-sm-3 person-details">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/theteam/image4.jpg" alt="image4">
                                            <figcaption>
                                                <h3>Chris
                                                    <small>- Graphic Design</small>
                                                </h3>
                                                <span>Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper.</span>
                                            </figcaption>
                                            <ul class="list-inline person-details-icons">
                                                <li>
                                                    <a href="#">
                                                        <i class="fa-lg fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa-lg fa-linkedin"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa-lg fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa-lg fa-dribbble"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa-lg fa-google-plus"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </figure>
                                    </div> -->
                                    <!-- //Portfolio Item// -->
                                </div>
                                <hr class="margin-vert-60">
                                <!-- End Meet the Team -->
                                <!-- Our Skills -->
                                <h2>Our Skills</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                                 <?php
        global $post;

            $args = array( 'posts_per_page' => -1, 'post_type'=> 'about-us-skills');
            $myposts = get_posts( $args );

        foreach( $myposts as $post ) : setup_postdata($post); ?>
<!-- Main Item -->
                     <h3 class="progress-label"><?php the_title() ?>
                                            <span class="pull-right"><?php the_content() ?></span>
                                        </h3>

                                         <?php 
                                $about_us_skill_percent = get_post_meta($post->ID, 'about_us_skill_percent', true);
                            ?>
                            
                            <?php if ($about_us_skill_percent) : ?>
                               
                           
                            
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $about_us_skill_percent; ?>">
                                            </div>
                                        </div>
                                         <?php else : ?>
                                No slogan available
                            <?php endif; ?>
 <!-- //Main Item// -->
      

        <?php endforeach; ?> 
                                      <!--   <h3 class="progress-label">Programming
                                            <span class="pull-right">78%</span>
                                        </h3>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="col-md-6">

                                   

                                               <?php
        global $post;

            $args = array( 'posts_per_page' => 3, 'post_type'=> 'about-us-right-post');
            $myposts = get_posts( $args );

        foreach( $myposts as $post ) : setup_postdata($post); ?>
<!-- Main Item -->
 <h3 class="margin-bottom-10"> <?php the_title() ?></h3>
                   <?php the_content() ?>
                            
                                       
 <!-- //Main Item// -->
      

        <?php endforeach; ?>


                                    </div>
                                </div>
                                <!-- End Our Skills -->
                            </div>
                        </div>
                        <!-- === END CONTENT === -->
                        <!-- === BEGIN FOOTER === -->
                    </div>
                   <?php get_footer() ?>