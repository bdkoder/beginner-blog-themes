<?php 

/*
Template Name: Page Full Width
*/

get_header(); ?>
                    <div class="container">
                        <!-- === END HEADER === -->
                        <!-- === BEGIN CONTENT === -->
                        <div class="row margin-vert-30">
                            <!-- Main Column -->
                            <div class="col-md-12">
                                       <?php
        global $post;

            $args = array( 'posts_per_page' => -1, 'post_type'=> 'full-width-section');
            $myposts = get_posts( $args );

        foreach( $myposts as $post ) : setup_postdata($post); ?>
  <!-- Start Item -->
<h2><?php the_title() ?></h2>



<?php the_content() ?>
 <!-- End Item -->
                                                   

        <?php endforeach; ?>
                                
                                
                            </div>
                            <!-- End Main Column -->
                        </div>
                        <!-- === END CONTENT === -->
                        <!-- === BEGIN FOOTER === -->
                    </div>
                   <?php get_footer() ?>