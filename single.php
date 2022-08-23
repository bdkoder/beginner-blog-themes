<?php get_header() ?>


 <div class="container">
                        <!-- === END HEADER === -->
                        <!-- === BEGIN CONTENT === -->
                        <div class="row margin-vert-30">
                            <!-- Main Column -->
                            <div class="col-md-9">
                                <div class="blog-post">









<?php if(have_posts()) : ?> <?php while(have_posts()) :the_post(); ?>



                                    <div class="blog-item-header">
                                        <div class="blog-post-date pull-left">
                                            <span class="day"> <?php the_time('D' ); ?> </span>
                                            <span class="month"> <?php the_time('m' ); ?></span>
                                        </div>
                                        <h2>
                                            <a href="<?php the_permalink() ?>">
                                                <?php the_title() ?>
                                            </a>
                                        </h2>
                                        <div class="blog-post-details">
                                            <!-- Author Name -->
                                            <div class="blog-post-details-item blog-post-details-item-left user-icon">
                                                <i class="fa fa-user"></i>
                                                <a href=""><?php the_author() ?></a>
                                            </div>
                                            <!-- End Author Name -->
                                            <!-- Tags -->
                                            <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags tags-icon">
                                                <i class="fa fa-tag"></i>
                                                   <a href="<?php echo get_tag_link($tag_id); ?>"><?php the_tags() ?></a>,
                                            </div>
                                            <!-- End Tags -->
                                            <!-- # of Comments -->
                                            <div class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last comments-icon">
                                                <a href="">
                                                    <i class="fa fa-comments"></i>
                                                    <!-- 3 Comments -->
                                                     <?php wp_count_comments( post_id ); ?> 
                                                </a>
                                            </div>
                                            <!-- End # of Comments -->
                                        </div>
                                    </div>


                                    <div class="blog-item">
                                        <div class="clearfix"></div>
                                        <div class="blog-post-body row margin-top-15">
                                            
                                            <div class="col-md-12">

                                            <div class="col-md-5">
                                            <style type="text/css">
                                            .custom-post-pic{
    border: 5px solid rgb(221, 221, 221);
padding: 3px;
}
</style>
                                              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumb', array('class' => 'pull-left custom-post-pic')); ?></a>

                                            </div>
                                                <p style="line-height: 32px;"><?php the_content() ?></p>
                                            </div>
                                           
                                        </div>

<?php endwhile ?>
<?php else : ?>
<h1>Content Not Found........</h1>
<?php endif ?>






















                                        <div class="blog-item-footer">
                                            <!-- About the Author -->
                                           <!--  <div class="blog-author panel panel-default margin-bottom-30">
                                                <div class="panel-heading">
                                                    <h3>About the Author</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <img class="pull-left" src="assets/img/profiles/87.jpg" alt="image1">
                                                        </div>
                                                        <div class="col-md-10">

                                                       
                                                            <label>John Doe</label>
                                                            <p>Lorem ipsum dolor sit amet, in pri offendit ocurreret. Vix sumo ferri an. pfs adodio fugit delenit ut qui. Omittam suscipiantur ex vel,ex audiam intellegat gfIn labitur discere eos, nam an feugiat
                                                                voluptua.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- End About the Author -->
                                            <!-- Comments -->
                                            <div class="blog-recent-comments panel panel-default margin-bottom-30">
                                                <div class="panel-heading">
                                                    <h3>Comments</h3>
                                                </div>
                                                <ul class="list-group">
                                                    
                                                   <div class="custom-comments">
<?php comments_template() ?>
</div>
                                                  
                                             
                                                </ul>
                                            </div>


                                            <!-- End Comments -->
                                        </div>
                                    </div>



                                </div>
                                <!-- End Blog Post -->
                            </div>
                            <!-- End Main Column -->
                            <!-- Side Column -->
                            <div class="col-md-3 margin-top-30">
                                <!-- Blog Tags -->
                               <?php get_sidebar() ?>
                                <!-- End Recent Posts -->
                                <!-- End Side Column -->
                            </div>
                        </div>
                        <!-- === END CONTENT === -->
                        <!-- === BEGIN FOOTER === -->
                    </div>


                   <?php get_footer() ?>