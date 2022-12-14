<?php 

/*
Template Name: Features Ac Tabs
*/

get_header(); ?>
                    <div class="container">
                        <!-- === END HEADER === -->
                        <!-- === BEGIN CONTENT === -->
                        <div class="row margin-vert-30">
                            <!-- Begin Sidebar Menu -->
                            <div class="col-md-3">
                                <ul class="list-group sidebar-nav" id="sidebar-nav">
                                    <!-- Typography -->
                                    <li class="list-group-item list-toggle">
                                        <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-typography">Typography</a>
                                        <ul id="collapse-typography" class="collapse">
                                            <li>
                                                <a href="<?php echo home_url() ?>/features-typo-basic.php">
                                                    <i class="fa fa-sort-alpha-asc"></i>Basic Typography</a>
                                            </li>
                                            <li>
                                                <a href="features-typo-blockquotes.html">
                                                    <i class="fa fa-magic"></i>Blockquotes</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- End Typography -->
                                    <!-- Components -->
                                    <li class="list-group-item list-toggle">
                                        <a class="accordion-toggle" href="#collapse-components" data-toggle="collapse">Components</a>
                                        <ul id="collapse-components" class="collapse">
                                            <li>
                                                <span class="badge">New</span>
                                                <a href="features-labels.html">
                                                    <i class="fa fa-tags"></i>Labels</a>
                                            </li>
                                            <li>
                                                <span class="badge">New</span>
                                                <a href="features-progress-bars.html">
                                                    <i class="fa fa-align-left"></i>Progress Bars</a>
                                            </li>
                                            <li>
                                                <a href="features-panels.html">
                                                    <i class="fa fa-columns"></i>Panels</a>
                                            </li>
                                            <li>
                                                <a href="features-pagination.html">
                                                    <i class="fa fa-arrows-h"></i>Pagination</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- End Components -->
                                    <!-- Icons -->
                                    <li class="list-group-item list-toggle">
                                        <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-icons">Icons</a>
                                        <ul id="collapse-icons" class="collapse">
                                            <li>
                                                <span class="badge badge-u">New</span>
                                                <a href="features-icons.html">
                                                    <i class="fa fa-chevron-circle-right"></i>Icon Styling</a>
                                            </li>
                                            <li>
                                                <a href="features-icons-font-awesome.html">
                                                    <i class="fa fa-chevron-circle-right"></i>Font Awesome Icons</a>
                                            </li>
                                            <li>
                                                <a href="features-icons-social.html">
                                                    <i class="fa fa-chevron-circle-right"></i>Social Icons</a>
                                            </li>
                                            <li>
                                                <a href="features-icons-glyphicons.html">
                                                    <i class="fa fa-chevron-circle-right"></i>Glyphicons</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- End Icons -->
                                    <!-- Testimonials -->
                                    <li class="list-group-item">
                                        <a href="features-testimonials.html">Testimonials</a>
                                    </li>
                                    <!-- End Testimonials -->
                                    <!-- Accordion and Tabs -->
                                    <li class="list-group-item">
                                        <a href="features-accordions-tabs.html">Accordions & Tabs</a>
                                    </li>
                                    <!-- End Accordion and Tabs -->
                                    <!-- Buttons -->
                                    <li class="list-group-item">
                                        <a href="features-buttons.html">Buttons</a>
                                    </li>
                                    <!-- End Buttons -->
                                    <!-- Carousels -->
                                    <li class="list-group-item">
                                        <a href="features-carousels.html">Carousels</a>
                                    </li>
                                    <!-- End Accordion and Tabs -->
                                    <!-- Animate On Scroll -->
                                    <li class="list-group-item">
                                        <a href="features-grid.html">Animate On Scroll</a>
                                    </li>
                                    <!-- End Animate On Scroll -->
                                    <!-- Grid System -->
                                    <li class="list-group-item">
                                        <a href="features-grid.html">Grid System</a>
                                    </li>
                                    <!-- End Grid System -->
                                </ul>
                            </div>
                            <!-- End Sidebar Menu -->
                            <div class="col-md-9">
                                <h2 class="margin-bottom-30">Tabs & Accordions</h2>
                                <!-- Accordion -->
                                <div id="accordion" class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle" href="#collapse-One" data-parent="#accordion" data-toggle="collapse">
                                                    Sample Heading 1
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse-One" class="accordion-body collapse in">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <img src="<?php echo get_template_directory_uri()?>/assets/img/frontpage/filler1.jpg" alt="filler image">
                                                    </div>
                                                    <div class="col-md-7">
                                                        <h3 class="no-margin no-padding">Humanitatis Per Seacula</h3>
                                                        <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus
                                                            dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothicas.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle" href="#collapse-Two" data-parent="#accordion" data-toggle="collapse">
                                                    Sample Heading 2
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse-Two" class="accordion-body collapse">
                                            <div class="panel-body">
                                                <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus,
                                                    qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.
                                                    Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle" href="#collapse-Three" data-parent="#accordion" data-toggle="collapse">
                                                    Sample Heading 3
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse-Three" class="accordion-body collapse">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <img src="<?php echo get_template_directory_uri()?>/assets/img/frontpage/filler3.jpg" alt="filler image">
                                                    </div>
                                                    <div class="col-md-7">
                                                        <h3 class="no-margin no-padding">Mirum Est Notare</h3>
                                                        <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus
                                                            dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothicas.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Accordion -->
                                <div class="margin-bottom-30">
                                    <hr>
                                </div>
                                <!-- Accordion - Alternative -->
                                <div id="accordion2" class="panel-group alternative">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle" href="#collapse2-One" data-parent="#accordion2" data-toggle="collapse">
                                                    Sample Heading 1
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse2-One" class="accordion-body collapse in">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <img src="<?php echo get_template_directory_uri()?>/assets/img/frontpage/filler1.jpg" alt="filler image">
                                                    </div>
                                                    <div class="col-md-7">
                                                        <h3 class="no-margin no-padding">Humanitatis Per Seacula</h3>
                                                        <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus
                                                            dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothicas.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle" href="#collapse2-Two" data-parent="#accordion2" data-toggle="collapse">
                                                    Sample Heading 2
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse2-Two" class="accordion-body collapse">
                                            <div class="panel-body">
                                                <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus,
                                                    qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.
                                                    Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle" href="#collapse2-Three" data-parent="#accordion2" data-toggle="collapse">
                                                    Sample Heading 3
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse2-Three" class="accordion-body collapse">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <img src="<?php echo get_template_directory_uri()?>/assets/img/frontpage/filler3.jpg" alt="filler image">
                                                    </div>
                                                    <div class="col-md-7">
                                                        <h3 class="no-margin no-padding">Mirum Est Notare</h3>
                                                        <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus
                                                            dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothicas.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Accordion - Alternative -->
                                <div class="margin-bottom-30">
                                    <hr>
                                </div>
                                <!-- Tab v1 -->
                                <div class="tabs">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#sample-1a" data-toggle="tab">Sample Heading 1</a>
                                        </li>
                                        <li>
                                            <a href="#sample-1b" data-toggle="tab">Sample Heading 2</a>
                                        </li>
                                        <li>
                                            <a href="#sample-1c" data-toggle="tab">Sample Heading 3</a>
                                        </li>
                                        <li>
                                            <a href="#sample-1d" data-toggle="tab">Sample Heading 4</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="sample-1a">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/frontpage/filler1.jpg" alt="filler image">
                                                </div>
                                                <div class="col-md-7">
                                                    <h3 class="no-margin no-padding">Humanitatis Per Seacula</h3>
                                                    <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus,
                                                        qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothicas.</p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade in" id="sample-1b">
                                            <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus,
                                                qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.
                                                Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="tab-pane fade in" id="sample-1c">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/frontpage/filler3.jpg" alt="filler image">
                                                </div>
                                                <div class="col-md-7">
                                                    <h3 class="no-margin no-padding">Mirum Est Notare</h3>
                                                    <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus,
                                                        qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothicas.</p>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="tab-pane fade in" id="sample-1d">
                                            <p>Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc.
                                                Pellentesque fermentum, ante ac interdum ullamcorper. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, consectetur id.</p>
                                            <ul>
                                                <li>Donec eget orci metus</li>
                                                <li>Ante ac interdum ullamcorper</li>
                                                <li>Vivamus imperdiet condimentum</li>
                                                <li>Pellentesque fermentum</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Tab v1 -->
                                <div class="margin-bottom-30">
                                    <hr>
                                </div>
                                <!-- Tab v2 -->
                                <div class="tabs alternative">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#sample-2a" data-toggle="tab">Sample Heading 1</a>
                                        </li>
                                        <li>
                                            <a href="#sample-2b" data-toggle="tab">Sample Heading 2</a>
                                        </li>
                                        <li>
                                            <a href="#sample-2c" data-toggle="tab">Sample Heading 3</a>
                                        </li>
                                        <li>
                                            <a href="#sample-2d" data-toggle="tab">Sample Heading 4</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="sample-2a">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/frontpage/filler1.jpg" alt="filler image">
                                                </div>
                                                <div class="col-md-7">
                                                    <h3 class="no-margin no-padding">Humanitatis Per Seacula</h3>
                                                    <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus,
                                                        qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothicas.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade in" id="sample-2b">
                                            <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus,
                                                qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.
                                                Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                        </div>
                                        <div class="tab-pane fade in" id="sample-2c">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/frontpage/filler3.jpg" alt="filler image">
                                                </div>
                                                <div class="col-md-7">
                                                    <h3 class="no-margin no-padding">Mirum Est Notare</h3>
                                                    <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus,
                                                        qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothicas.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade in" id="sample-2d">
                                            <p>Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc.
                                                Pellentesque fermentum, ante ac interdum ullamcorper. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, consectetur id.</p>
                                            <ul>
                                                <li>Donec eget orci metus</li>
                                                <li>Ante ac interdum ullamcorper</li>
                                                <li>Vivamus imperdiet condimentum</li>
                                                <li>Pellentesque fermentum</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Tab v2 -->
                                <div class="margin-bottom-40">
                                    <hr>
                                </div>
                                <!-- Tab v3 -->
                                <div class="row tabs">
                                    <div class="col-sm-3">
                                        <ul class="nav nav-pills nav-stacked">
                                            <li class="active">
                                                <a href="#sample-3a" data-toggle="tab">
                                                    <i class="fa fa-home"></i>Sample Heading 1</a>
                                            </li>
                                            <li>
                                                <a href="#sample-3b" data-toggle="tab">
                                                    <i class="fa fa-cloud"></i>Sample Heading 2</a>
                                            </li>
                                            <li>
                                                <a href="#sample-3c" data-toggle="tab">
                                                    <i class="fa fa-comments"></i>Sample Heading 3</a>
                                            </li>
                                            <li>
                                                <a href="#sample-3d" data-toggle="tab">
                                                    <i class="fa fa-gear"></i>Sample Heading 4</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="sample-3a">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <img src="<?php echo get_template_directory_uri()?>/assets/img/frontpage/filler1.jpg" alt="filler image">
                                                    </div>
                                                    <div class="col-md-7">
                                                        <h3 class="no-margin no-padding">Humanitatis Per Seacula</h3>
                                                        <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus
                                                            dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothicas.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade in" id="sample-3b">
                                                <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus,
                                                    qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.
                                                    Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                            </div>
                                            <div class="tab-pane fade in" id="sample-3c">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <img src="<?php echo get_template_directory_uri()?>/assets/img/frontpage/filler3.jpg" alt="filler image">
                                                    </div>
                                                    <div class="col-md-7">
                                                        <h3 class="no-margin no-padding">Mirum Est Notare</h3>
                                                        <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus
                                                            dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothicas.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade in" id="sample-3d">
                                                <p>Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing
                                                    nunc. Pellentesque fermentum, ante ac interdum ullamcorper. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, consectetur id.</p>
                                                <ul>
                                                    <li>Donec eget orci metus</li>
                                                    <li>Ante ac interdum ullamcorper</li>
                                                    <li>Vivamus imperdiet condimentum</li>
                                                    <li>Pellentesque fermentum</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab v3 -->
                            </div>
                        </div>
                        <!-- === END CONTENT === -->
                        <!-- === BEGIN FOOTER === -->
                    </div>
                  <?php get_footer() ?>