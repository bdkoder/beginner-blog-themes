  <!-- Blog Tags -->
    <?php dynamic_sidebar('Sidebar Widget');?>
                                <div class="blog-tags">
                                
                                    <h3>Tags</h3>
                                    <ul class="blog-tags">
                                        <li>
                                            <a href="#" class="blog-tag">HTML</a>
                                        </li>
                                        <li>
                                            <a href="#" class="blog-tag">CSS</a>
                                        </li>
                                        <li>
                                            <a href="#" class="blog-tag">JavaScript</a>
                                        </li>
                                        <li>
                                            <a href="#" class="blog-tag">jQuery</a>
                                        </li>
                                        <li>
                                            <a href="#" class="blog-tag">PHP</a>
                                        </li>
                                        <li>
                                            <a href="#" class="blog-tag">Ruby</a>
                                        </li>
                                        <li>
                                            <a href="#" class="blog-tag">CoffeeScript</a>
                                        </li>
                                        <li>
                                            <a href="#" class="blog-tag">Grunt</a>
                                        </li>
                                        <li>
                                            <a href="#" class="blog-tag">Bootstrap</a>
                                        </li>
                                        <li>
                                            <a href="#" class="blog-tag">HTML5</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Blog Tags -->
                                <!-- Recent Posts -->
                                <div class="recent-posts">
                                
                                    <h3>Recent Posts</h3>
                                    <ul class="posts-list margin-top-10">

<?php if(have_posts()) : ?> <?php while(have_posts()) :the_post(); ?>

                                        <li>
                                            <div class="recent-post">
                                                <a href="<?php the_permalink() ?>">
                                                    <img class="pull-left" height="56" width="67" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/thumbs/thumb1.jpg" alt="thumb1">
                                                </a>
                                                <a href="<?php the_permalink() ?>" class="posts-list-title"><?php the_title() ?></a>
                                                <br>
                                                <span class="recent-post-date">
                                              <!--       July 30, 2013 -->
                                                    <?php the_date('M d,Y') ?>
                                                </span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li> 

<?php endwhile ?>

<?php else : ?>
<h1>Content Not Found........</h1>
<?php endif ?>




                                        <!--  <li>
                                            <div class="recent-post">
                                                <a href="">
                                                    <img class="pull-left" height="56" width="67" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/thumbs/thumb1.jpg" alt="thumb1">
                                                </a>
                                                <a href="#" class="posts-list-title">Sidebar post example</a>
                                                <br>
                                                <span class="recent-post-date">
                                                    July 30, 2013
                                                </span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li> -->
                                   
                                      
                                    </ul>
                                </div>
                                <!-- End Recent Posts -->
                            
                            <!-- End Side Column -->



                            <style>

            
                            </style>