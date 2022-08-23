<?php 

/*
Template Name: FAQ Page
*/

get_header(); ?>
                    <div class="container">
                        <!-- === END HEADER === -->
                        <!-- === BEGIN CONTENT === -->
                        <div class="row margin-vert-30">
                            <div class="col-md-12">
                                <h2>F.A.Q.</h2>
                                <p>Te lorem dolorum sadipscing vel, has in ullum dicunt, ea eos appetere placerat probatus. Vis eu movet elaboraret, eu scaevola tacimates sed, sint laoreet ex pri. Est dicat consetetur ei, quo mazim debet elitr ad. Vim indoctum
                                    expetendis ut, ut nostrud maluisset est. Ignota nemore cum an, voluptua expetenda dignissim eu mei. Pellentesque nec eros nulla. Vivamus nec ligula dolor. In facilisis suscipit gravida. Nunc malesuada.</p>
                                <hr class="margin-vert-40">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="tab-content">
                                            <div class="tab-pane active in fade" id="faq">
                                                <div class="panel-group" id="accordion">
                    
                <?php
        global $post;

            $args = array( 'posts_per_page' => -1, 'post_type'=> 'faq-page-question');
            $myposts = get_posts( $args );

        foreach( $myposts as $post ) : setup_postdata($post); ?>
  <!-- FAQ Item -->
                                                    <div class="panel panel-default panel-faq">
                                                        <div class="panel-heading">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#faq-<?php the_ID(); ?>">
                                                                <h4 class="panel-title">
                                                                   <?php the_title() ?>?
                                                                    <span class="pull-right">
                                                                        <i class="glyphicon glyphicon-plus"></i>
                                                                    </span>
                                                                </h4>
                                                            </a>
                                                        </div>
                                                        <div id="faq-<?php the_ID(); ?>" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <?php the_content() ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End FAQ Item -->
                                                   

        <?php endforeach; ?>
                                                                
                                                  
                                                    <!-- FAQ Item -->
                                                   <!--  <div class="panel panel-default panel-faq">
                                                        <div class="panel-heading">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#faq-sub">
                                                                <h4 class="panel-title">
                                                                    Vim reque aperiam tritani at?
                                                                    <span class="pull-right">
                                                                        <i class="glyphicon glyphicon-plus"></i>
                                                                    </span>
                                                                </h4>
                                                            </a>
                                                        </div>
                                                        <div id="faq-sub" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                Ut impetus oblique tacimates vis. Vim reque aperiam tritani at. Clita disputationi sed in. Ne etiam sententiae mel, vix graecis apeirian dissentiet ei. Ei habeo vitae qualisque sed, regione ornatus platonem at vis.
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- End FAQ Item -->
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h3>Could not find the answer?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in mauris tempor purus accumsan dignissim. Morbi risus nisl, adipiscing vel sagittis sit amet, condimentum vitae lectus. Pellentesque nec eros nulla. Vivamus
                                            nec ligula dolor. In facilisis suscipit gravida. Nunc malesuada.</p>
                                        <button type="button" class="btn btn-primary btn-sm">ASK A QUESTION</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- === END CONTENT === -->
                        <!-- === BEGIN FOOTER === -->
                    </div>
                  <?php get_footer() ?>