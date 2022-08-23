<?php 

/*
Template Name: About Me
*/

get_header(); ?>
                    <div class="container">
                        <!-- === END HEADER === -->
                        <!-- === BEGIN CONTENT === -->
                        <div class="row margin-vert-30">
                            <div class="col-md-12">
                                <h2>About Me</h2>
                               


                <?php
        global $post;

            $args = array( 'posts_per_page' => 1, 'post_type'=> 'aboutmemainpost');
            $myposts = get_posts( $args );

        foreach( $myposts as $post ) : setup_postdata($post); ?>
<!-- Main Item -->
              <div class="row">
                                    <div class="col-md-5">

  <?php the_post_thumbnail('aboutmemainpost-thumb',//eta function pic thum thekey asce...
// ekhane class add kora hoyece.........
                                            array('class'=>'',

                                            )); ?>
                                            </div>
                                    <div class="col-md-7">
                                        <h3> <?php the_title() ?>
                                            <small>- Manager</small>
                                        </h3>
                                        <ul class="list-inline about-me-icons">
                                            <li>
                                                <a href="#">
                                                    <i class="fa-lg fa-border fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa-lg fa-border fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa-lg fa-border fa-dribbble"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa-lg fa-border fa-google-plus"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <p style="text-align: justify;"><?php the_content() ?></p>
                                    </div>
                                </div>               
 <!-- //Main Item// -->
      

        <?php endforeach; ?>


                                <!-- <div class="row">
                                    <div class="col-md-5">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/image6.jpg" alt="about-me">
                                    </div>
                                    <div class="col-md-7">
                                        <h3>Maria
                                            <small>- Manager</small>
                                        </h3>
                                        <ul class="list-inline about-me-icons">
                                            <li>
                                                <a href="#">
                                                    <i class="fa-lg fa-border fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa-lg fa-border fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa-lg fa-border fa-dribbble"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa-lg fa-border fa-google-plus"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae.</p>
                                        <p>Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                                            aut odit aut fugit, sed quia consequuntur magni.</p>
                                    </div>
                                </div> -->
                                <hr class="margin-bottom-40">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- My Skills -->
                                        <h3 class="margin-bottom-10">My Skills</h3>
             <?php
        global $post;

            $args = array( 'posts_per_page' => -1, 'post_type'=> 'aboutmeskills');
            $myposts = get_posts( $args );

        foreach( $myposts as $post ) : setup_postdata($post); ?>
<!-- Main Item -->
                     <h3 class="progress-label"><?php the_title() ?>
                                            <span class="pull-right"><?php the_content() ?></span>
                                        </h3>

                                         <?php 
                                $about_me_skill_percent = get_post_meta($post->ID, 'about_me_skill_percent', true);
                            ?>
                            
                            <?php if ($about_me_skill_percent) : ?>
                               
                           
                            
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $about_me_skill_percent; ?>">
                                            </div>
                                        </div>
                                         <?php else : ?>
                                No slogan available
                            <?php endif; ?>
 <!-- //Main Item// -->
      

        <?php endforeach; ?>




                                      


                                   <!--      <h3 class="progress-label">Marketing
                                            <span class="pull-right">82%</span>
                                        </h3>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" style="width: 82%">
                                            </div>
                                        </div>

                                        <h3 class="progress-label">SEO
                                            <span class="pull-right">74%</span>
                                        </h3>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width: 74%">
                                            </div>
                                        </div>

                                        <h3 class="progress-label">Programming
                                            <span class="pull-right">78%</span>
                                        </h3>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                                            </div>
                                        </div> -->


                                        <!-- End My Skills -->
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Accordion -->
                                        <div id="accordion" class="panel-group">

      <?php
            global $post;

                $args = array( 'posts_per_page' => -1, 'post_type'=> 'right-tab');
                $myposts = get_posts( $args );

            foreach( $myposts as $post ) : setup_postdata($post); ?>
<div class="panel panel-default">
<div class="panel-heading">
    <h4 class="panel-title">
        <a class="accordion-toggle" href="#collapse-<?php the_ID(); ?>" data-parent="#accordion" data-toggle="collapse">
            <?php the_title(); ?>
        </a>
    </h4>
</div>

<div id="collapse-<?php the_ID(); ?>" class="accordion-body collapse">
    <div class="panel-body">
        <?php the_content(); ?>
    </div>
</div>


</div> 
            <?php endforeach; ?>

                            <script type="text/javascript">
    
    jQuery("documnet").ready(function (){
       
            jQuery("div.panel-group div.panel:first-child div.collapse").addClass("in")
           // jQuery("div.tab-content div.tab-pane:first-child").addClass("active")
       
    });

</script>                                     

                                           <!--  <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" href="#collapse-Two" data-parent="#accordion" data-toggle="collapse">
                                                            Claritas est etiam processus
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse-Two" class="accordion-body collapse in">
                                                    <div class="panel-body">
                                                        <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus
                                                            dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta
                                                            decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                                    </div>
                                                </div>
                                            </div> -->
                                   <!--          <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" href="#collapse-Three" data-parent="#accordion" data-toggle="collapse">
                                                            Investigationes demonstraverunt
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse-Three" class="accordion-body collapse">
                                                    <div class="panel-body">
                                                        <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus
                                                            dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothicas.</p>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                        <!-- End Accordion -->
                                    </div>
                                </div>
                                <hr>
                                <!-- My Work -->
                                <h3>My Work</h3>
                                <div class="row">
                                    <div class="portfolio-group margin-top-20">


                                                   <?php
        global $post;

            $args = array( 'posts_per_page' => -1, 'post_type'=> 'about-me-work');
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
                                      
                                        










                                        <!-- Portfolio Item -->
                                       <!--  <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                                            <div class="image-hover">
                                                <a href="#">
                                                    <figure>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/image8.jpg" alt="image8">
                                                        <figcaption>
                                                            <h3>Quam putamus</h3>
                                                            <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</span>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                        </div> -->
                                        <!-- //Portfolio Item// -->
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <!-- End My Work -->
                            </div>
                        </div>
                        <!-- === END CONTENT === -->
                        <!-- === BEGIN FOOTER === -->
                    </div>


                    <?php get_footer() ?>