<?php get_header(); ?>

                    <div class="container">
                        <!-- === END HEADER === -->
                        <!-- === BEGIN CONTENT === -->
                        <div class="row margin-vert-30">
                            <!-- Main Column -->
                            <div class="col-md-9">







<?php if(have_posts()) : ?> <?php while(have_posts()) :the_post(); ?>

                                                        <!-- Blog Post -->
                                <div class="blog-post animate fadeIn">
                                    <!-- Blog Item Header -->
                                    <div class="blog-item-header">
                                        <!-- Date -->
                                        <div class="blog-post-date pull-left">
                                            <span class="day"> <?php the_time('D' ); ?> </span>
                                            <span class="month"> <?php the_time('m' ); ?> </span>
                                        </div>
                                        <!-- End Date -->
                                        <!-- Title -->
                                        <h2>
                                            <a href="<?php the_permalink() ?>">
                                               <?php the_title() ?></a>
                                        </h2>
                                        <!-- End Title -->
                                        <div class="blog-post-details">
                                            <!-- Author Name -->
                                            <div class="blog-post-details-item blog-post-details-item-left user-icon">
                                                <i class="fa fa-user"></i>
                                                <a href=""> <?php the_author() ?></a>
                                            </div>
                                            <!-- End Author Name -->
                                            <!-- Tags -->
                                            <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags tags-icon">
                                                <i class="fa fa-tag"></i>
                                                <a href="<?php echo get_tag_link($tag_id); ?>"><?php the_tags() ?></a>,
                                            
                                               <!--  <a href="#">CSS</a>,
                                                <a href="#">Grunt</a> -->

                                            </div>
                                            <!-- End Tags -->
                                            <!-- # of Comments -->
                                            <div class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last comments-icon">
                                                <a href="">
                                                    <i class="fa fa-comments"></i>
                                                    <?php comments_popup_link('No Comments','1 Comment','%Comments','class','none'); ?> <!-- Comments -->
                                                </a>
                                            </div>
                                            <!-- End # of Comments -->
                                        </div>
                                    </div>
                                    <!-- End Blog Item Header -->
                                    <!-- Blog Item Body -->
                                    <div class="blog">
                                        <div class="clearfix"></div>
                                        <div class="blog-post-body row margin-top-15">
                                            <div class="col-md-5">
                                          <style type="text/css">
.custom-post-pic{
    border: 5px solid rgb(221, 221, 221);
padding: 3px;
}
</style>
                 
                                          </style>      

 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumb', array('class' => 'pull-left custom-post-pic')); ?></a>

                                            </div>
                                            <div class="col-md-7">
                                              <p style="text-align:justify;">
                                                   <?php read_more('80'); ?>
                                              </p>
                                            </div>
                                        </div>
                                        <div class="blog-item-footer">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <hr>
                                                </div>
                                                <div class="col-md-2">
                                                    <!-- Read More -->
                                                    <div class="blog-post-details-item blog-post-details-item-right pull-right">
                                                        <a href="<?php the_permalink() ?>" class="btn btn-primary">
                                                            Read More
                                                            <i class="icon-chevron-right readmore-icon"></i>
                                                        </a>
                                                    </div>
                                                    <!-- End Read More -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Blog Item Body -->
                                </div>

<?php endwhile ?>

<?php else : ?>
<h1>Content Not Found........</h1>
<?php endif ?>

























                             
                                <!-- Pagination -->
                                <ul class="pagination">
<?php 

the_posts_pagination(array(
    'mid_size' =>2,
    'prev_text' =>__('Back'),
    'next_text' =>__('Next')
    ));

 ?>


                                   <!--  <li>
                                        <a href="#">&laquo;</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">1</a>
                                    </li>
                                    <li class="disabled">
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#">4</a>
                                    </li>
                                    <li>
                                        <a href="#">5</a>
                                    </li>
                                    <li>
                                        <a href="#">&raquo;</a>
                                    </li> -->
                                </ul>
                                <!-- End Pagination -->
                            </div>
                            <!-- End Main Column -->








                            <!-- Side Column -->
                            <div class="col-md-3 margin-top-30">

<?php get_sidebar() ?>
                              
                        </div>
                        <!-- === END CONTENT === -->
                        <!-- === BEGIN FOOTER === -->
                    </div>
                   

<?php get_footer(); ?>