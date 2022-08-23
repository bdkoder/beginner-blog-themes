<?php 

/*
Template Name: Services Page
*/

get_header(); ?>


                    <div class="container">
                        <!-- === END HEADER === -->
                        <!-- === BEGIN CONTENT === -->
                        <div class="row margin-vert-30">
                            <div class="col-md-12">
                                <h2 class="margin-bottom-30">Services</h2>
                                <!-- Top Panels -->
                                <div class="row">

<?php
global $post;

$args = array( 'posts_per_page' => -1, 'post_type'=> 'service-post');
$myposts = get_posts( $args );

foreach( $myposts as $post ) : setup_postdata($post); ?>

<?php 
$service_us_page_service_icon = get_post_meta($post->ID, 'service_us_page_service_icon', true);?>



<!-- Main Item -->
<div class="col-md-3">
<div class="panel panel-primary invert">
<div class="panel-heading">
<h3 class="panel-title text-center">
    <?php the_title() ?>
</h3>
</div>
<div class="panel-body text-center">
<?php the_content() ?>
</div>
<div class="panel-footer text-center">
<?php if ($service_us_page_service_icon) : ?>
<i class="fa fa-<?php echo $service_us_page_service_icon; ?> fa-4x"></i>
<?php else : ?>


No slogan available
<?php endif; ?>
</div>
</div>
</div>



<!-- //Main Item// -->


<?php endforeach; ?>
                                    


                                  <!--   <div class="col-md-3">
                                        <div class="panel panel-primary invert">
                                            <div class="panel-heading">
                                                <h3 class="panel-title text-center">
                                                    Bootstrap 3
                                                </h3>
                                            </div>
                                            <div class="panel-body text-center">
                                                Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima.
                                            </div>
                                            <div class="panel-footer text-center">
                                                <i class="fa fa-twitter fa-4x"></i>
                                            </div>
                                        </div>
                                    </div> -->
                                <!--     <div class="col-md-3">
                                        <div class="panel panel-primary invert">
                                            <div class="panel-heading">
                                                <h3 class="panel-title text-center">
                                                    Clean Code
                                                </h3>
                                            </div>
                                            <div class="panel-body text-center">
                                                Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima.
                                            </div>
                                            <div class="panel-footer text-center">
                                                <i class="fa fa-code fa-4x"></i>
                                            </div>
                                        </div>
                                    </div> -->
                                   <!--  <div class="col-md-3">
                                        <div class="panel panel-primary invert">
                                            <div class="panel-heading">
                                                <h3 class="panel-title text-center">
                                                    Loaded with Features
                                                </h3>
                                            </div>
                                            <div class="panel-body text-center">
                                                Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima.
                                            </div>
                                            <div class="panel-footer text-center">
                                                <i class="fa fa-list-ul fa-4x"></i>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                                <!-- End Top Panels -->
                                <hr>
                                <!-- Mission Statement / Why Us? -->
                                <div class="row">
                                    <div class="col-md-6">
<?php
global $post;

$args = array( 'posts_per_page' => -1, 'post_type'=> 'service-page-content');
$myposts = get_posts( $args );

foreach( $myposts as $post ) : setup_postdata($post); ?>

<!-- Main Item -->


<h2> <?php the_title() ?></h2>
<p> <?php the_content() ?></p>                   

<!-- //Main Item// -->


<?php endforeach; ?>
                                    </div>
                                    <div class="col-md-6">
                                        <h2>Why Us?</h2>
                                        <!-- <ul class="list-unstyled list-services"> -->
                                        <?php
global $post;

$args = array( 'posts_per_page' => -1, 'post_type'=> 'service-page-why-us');
$myposts = get_posts( $args );

foreach( $myposts as $post ) : setup_postdata($post); ?>

<!-- Main Item -->

<p> <?php the_content() ?></p>                   


<?php endforeach; ?>
                                
                                           
                                      <!--   </ul> -->
                                    </div>
                                </div>
                                <!-- End Mission Statement / Why Us? -->
                                <hr>
                                <!-- Bottom Panels -->
                                <div class="row margin-top-40">

                                <?php
global $post;

$args = array( 'posts_per_page' => -1, 'post_type'=> 'service-botom-sec');
$myposts = get_posts( $args );

foreach( $myposts as $post ) : setup_postdata($post); ?>

<?php 
$service_us_page_bottom_service_icon = get_post_meta($post->ID, 'service_us_page_bottom_service_icon', true);?>



<!-- Main Item -->




<div class="col-md-3">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h3 class="panel-title text-center">
                                                    <?php the_title() ?>
                                                </h3>
                                            </div>
                                            <div class="panel-body text-center">
                                                <?php the_content() ?>
                                            </div>
                                            <div class="panel-footer text-center">
                                            <?php if ($service_us_page_bottom_service_icon) : ?>
                                                <i class="fa fa-<?php echo $service_us_page_bottom_service_icon; ?> fa-4x"></i>
                                                <?php else : ?>


No slogan available
<?php endif; ?>
                                            </div>
                                        </div>
                                    </div>


</div>
</div>
</div>



<!-- //Main Item// -->


<?php endforeach; ?>
                                    <!-- <div class="col-md-3">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h3 class="panel-title text-center">
                                                    Packed with Features
                                                </h3>
                                            </div>
                                            <div class="panel-body text-center">
                                                Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima.
                                            </div>
                                            <div class="panel-footer text-center">
                                                <i class="fa fa-laptop fa-4x"></i>
                                            </div>
                                        </div>
                                    </div> -->
                                  
                                </div>
                                <!-- End Bottom Panels -->
                            </div>
                        </div>
                        <!-- === END CONTENT === -->
                        <!-- === BEGIN FOOTER === -->
                    </div>
                   <?php get_footer() ?>