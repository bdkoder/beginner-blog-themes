<?php 






//here add jquery

	function Fname()
	{
		wp_enqueue_script('jquery');
	}
//...==========......jQuery link k HUK a deya hoyece..=========.........
add_action('wp_enqueue_scripts' ,'Fname');










//menu korar jonno..........akhankar code er satey home_template page er connection ase>>> Oikhane aro code lekha ase menu korar jonno.....

function our_menu_function(){
	register_nav_menus(
		array(

				'main_menu' => 'set main menu'
			)



		);
}

// menu k add korar jonno HUK a function name deya hoyece.........
add_action('init','our_menu_function');



add_theme_support('title-tag');
add_theme_support('custom-header');
add_theme_support('custom-background');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside','gallery','video'));











function custom_post_with_icon(){
	/*This for slider Custom Post*/

    register_post_type( 'slider',
        array(
            'labels' => array(
                'name' => __( 'Add Slider' ),
                'singular_name' => __( 'Add Slider' ),
                'add_new_item' => __( 'Add New  Slider' )
            ),
            'public' => true,
            'supports' => array('thumbnail'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'slider-item'),
        )
    );
    /*This for slider Custom Post*/

/*This for sliderdowntab Custom Post*/

    register_post_type( 'sliderdowntab',
        array(
            'labels' => array(
                'name' => __( 'Add Tabs' ),
                'singular_name' => __( 'Add Tab' ),
                'add_new_item' => __( 'Add New  Tab' )
            ),
            'public' => true,
            'supports' => array('thumbnail','editor','custom-fields','title'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'sliderdowntab-item'),
        )
    );
    /*This for sliderdowntab Custom Post*/


/*This for sliderdowntab Custom Post*/

    register_post_type( 'homepagedetails',
        array(
            'labels' => array(
                'name' => __( 'Add Home Page Details' ),
                'singular_name' => __( 'Add Page Detail' ),
                'add_new_item' => __( 'Add New Page Details' )
            ),
            'public' => true,
            'supports' => array('thumbnail','editor','custom-fields','title'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'homepagedetails-item'),
        )
    );
    /*This for sliderdowntab Custom Post*/

    /*This for homepageportfolio Custom Post*/

    register_post_type( 'homepageportfolio',
        array(
            'labels' => array(
                'name' => __( 'Add Home Page Portfolios' ),
                'singular_name' => __( 'Add Page Portfolio' ),
                'add_new_item' => __( 'Add New Page Portfolio' )
            ),
            'public' => true,
            'supports' => array('thumbnail','editor','custom-fields','title'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'homepageportfolio-item'),
        )
    );
    /*This for homepageportfolio Custom Post*/ 


       /*This for About Me page Main Post*/

    register_post_type( 'aboutmemainpost',
        array(
            'labels' => array(
                'name' => __( 'Add About Me Page Main Posts' ),
                'singular_name' => __( 'Add Main Post' ),
                'add_new_item' => __( 'Add New Main Post' )
            ),
            'public' => true,
            'supports' => array('thumbnail','editor','custom-fields','title'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'aboutmemainpost-item'),
        )
    );
    /*This for About Me page Main Post*/ 

       /*This for About Me page Skills Post*/

    register_post_type( 'aboutmeskills',
        array(
            'labels' => array(
                'name' => __( 'Add About Me Skills' ),
                'singular_name' => __( 'Add Skill' ),
                'add_new_item' => __( 'Add New Skill' )
            ),
            'public' => true,
            'supports' => array('editor','title','custom-fields'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'aboutmeskills-item'),
        )
    );
    /*This for About Me page Skills Post*/   

       /*This for About Me page Right Tab*/

    register_post_type( 'right-tab',
        array(
            'labels' => array(
                'name' => __( 'Add Right Tab Posts' ),
                'singular_name' => __( 'Add Post' ),
                'add_new_item' => __( 'Add New Post' )
            ),
            'public' => true,
            'supports' => array('editor','title','custom-fields'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'right-tab-item'),
        )
    );
    /*This for About Me page Right Tab*/


    /*This for About Me page Work Custom Post*/

    register_post_type( 'about-me-work',
        array(
            'labels' => array(
                'name' => __( 'Add About Page Works' ),
                'singular_name' => __( 'Add Page Work' ),
                'add_new_item' => __( 'Add New Page Work' )
            ),
            'public' => true,
            'supports' => array('thumbnail','editor','custom-fields','title'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'about-me-work-item'),
        )
    );
    /*This for  About Me page Work Custom Post*/

        /*This for About Us  page Main Post*/

    register_post_type( 'about-us-main-post',
        array(
            'labels' => array(
                'name' => __( 'Add About Us Main Posts' ),
                'singular_name' => __( 'Add Post' ),
                'add_new_item' => __( 'Add New Post' )
            ),
            'public' => true,
            'supports' => array('thumbnail','editor','custom-fields','title'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'about-us-main-post-item'),
        )
    );
     /*This for About Us  page Our Team*/


        /*This for About Us  page Main Post*/

    register_post_type( 'about-us-our-team',
        array(
            'labels' => array(
                'name' => __( 'Add About Us Page Our Teams' ),
                'singular_name' => __( 'Add Team' ),
                'add_new_item' => __( 'Add New Team' )
            ),
            'public' => true,
            'supports' => array('thumbnail','editor','custom-fields','title'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'about-us-our-team'),
        )
    );
     /*This for About Us  page Our Team*/

         /*This for About Us page Skills Post*/

    register_post_type( 'about-us-skills',
        array(
            'labels' => array(
                'name' => __( 'Add About Us Skills' ),
                'singular_name' => __( 'Add Skill' ),
                'add_new_item' => __( 'Add New Skill' )
            ),
            'public' => true,
            'supports' => array('editor','title','custom-fields'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'about-us-skills-item'),
        )
    );
 /*This for About Us page Skills Post*/

         /*This for About Us page Skills Right Post*/

    register_post_type( 'about-us-right-post',
        array(
            'labels' => array(
                'name' => __( 'Add About Us Skills Right Posts' ),
                'singular_name' => __( 'Add Post' ),
                'add_new_item' => __( 'Add New Post' )
            ),
            'public' => true,
            'supports' => array('editor','title','custom-fields'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'about-us-right-post-item'),
        )
    );
 /*This for About Us page Skills  Right Post*/  

// service page>>>>>>>>>>>>>>>>>

  /*This for Service page Service Post */

    register_post_type( 'service-post',
        array(
            'labels' => array(
                'name' => __( 'Add Service Page Service Posts' ),
                'singular_name' => __( 'Add Post' ),
                'add_new_item' => __( 'Add New Post' )
            ),
            'public' => true,
            'supports' => array('editor','title','custom-fields'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'service-post-item'),
        )
    );

 /*This for Service page Service Post */

  /*This for Service page Service Page Content */

    register_post_type( 'service-page-content',
        array(
            'labels' => array(
                'name' => __( 'Add Service Page Content Posts' ),
                'singular_name' => __( 'Add Post' ),
                'add_new_item' => __( 'Add New Post' )
            ),
            'public' => true,
            'supports' => array('editor','title','custom-fields','thumbnail'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'service-page-content-item'),
        )
    );

  /*This for Service page Service Page Content */


  /*This for Service page Why Us */

    register_post_type( 'service-page-why-us',
        array(
            'labels' => array(
                'name' => __( 'Add Service Page Why Us' ),
                'singular_name' => __( 'Add Post' ),
                'add_new_item' => __( 'Add New Post' )
            ),
            'public' => true,
            'supports' => array('editor','title','custom-fields'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'service-page-why-us'),
        )
    );

  /*This for Service page Why Us*/

  /*This for Service page Bottom Section */

    register_post_type( 'service-botom-sec',
        array(
            'labels' => array(
                'name' => __( 'Add Service Bottom Post' ),
                'singular_name' => __( 'Add Post' ),
                'add_new_item' => __( 'Add New Post' )
            ),
            'public' => true,
            'supports' => array('editor','title','custom-fields'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'service-botom-sec-item'),
        )
    );

  /*This for Service page Bottom Section*/

  /*  FAQ Page*/


  /*This for FAQ page Question Section */

    register_post_type( 'faq-page-question',
        array(
            'labels' => array(
                'name' => __( 'Add FAQ' ),
                'singular_name' => __( 'Add FAQ' ),
                'add_new_item' => __( 'Add New FAQ' )
            ),
            'public' => true,
            'supports' => array('editor','title','custom-fields'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'faq-page-question-item'),
        )
    );

  /*This for FAQ page Question Section*/


// Full Width page..............
   /*This for Full Width page main post */

    register_post_type( 'full-width-section',
        array(
            'labels' => array(
                'name' => __( 'Add Full Width Page Main Posts' ),
                'singular_name' => __( 'Add Post' ),
                'add_new_item' => __( 'Add New Post' )
            ),
            'public' => true,
            'supports' => array('editor','title','custom-fields','thumbnail'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'full-width-section-item'),
        )
    );

  /*This for Full Width page main post*/



}

add_action('init','custom_post_with_icon');


add_theme_support( 'post-thumbnails', array(    'slider',
                                                'sliderdowntab',
                                                'homepagedetails',
                                                'homepageportfolio',
                                                'aboutmemainpost',
                                                'aboutmeskills',
                                                'right-tab',
                                                'about-me-work',
                                                'about-us-main-post',
                                                'about-us-skills',
                                                'about-us-right-post',
                                                'service-post',
                                                'service-page-content',
                                                'service-page-why-us',
                                                'service-botom-sec',
                                                'full-width-section'


                                                ) );


/*This for Tab*/
//add_image_size( 'slider-item, 560, 360');
/*This for Tab*/




add_image_size( 'post-thumb', 380, 380 );
add_image_size( 'side-post-thumb', 70, 82 );
add_image_size( 'sliderdowntab-thumb', 70, 82 );
add_image_size( 'homepagedetails-thumb', 466, 330 );
add_image_size( 'homepageportfolio-thumb', 230, 150 );
add_image_size( 'aboutmemainpost-thumb', 410, 270 );
add_image_size( 'about-us-our-team-thumb', 250, 200 );





function register_sidebar_recent_post() {
    register_sidebar( array(
        'name'          => 'Sidebar Widget',
        'id'            => 'sidebar-1',
        'description'   => 'Add widgets here to appear in your sidebar',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => ''
    ) ); 
    register_sidebars( array(
        'name'          => 'Sidebar Widget2',
        'id'            => 'sidebar-2',
        'description'   => 'Add widgets here to appear in your sidebar',
        'before_widget' => '<div class="recent-posts">',
        'after_widget'  => '</span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                     
                                       
                                       
                                    </ul>
                                </div>',
        'before_title'  => '<a href="#" class="posts-list-title">',
        'after_title'   => '/a>
                                                <br>
                                                <span class="recent-post-date">'
    ) );
}
add_action( 'widgets_init', 'register_sidebar_recent_post' );





// function register_sidebar_recent_post() {
//     register_sidebar( array(
//         'name'          => 'Sidebar Widget',
//         'id'            => 'sidebar-1',
//         'description'   => 'Add widgets here to appear in your sidebar',
//         'before_widget' => '<ul class="blog-tags"> <li>  <a href="#" class="blog-tag">',
//         'after_widget'  => '</a></li> </ul> </div>',
//         'before_title'  => '<div class="blog-tags"><h3>',
//         'after_title'   => '</h3><ul class="blog-tags"> <li> <a href="#" class="blog-tag">'
//     ) );
// }
// add_action( 'widgets_init', 'register_sidebar_recent_post' );

// Start Limit Post Content

function read_more($key){
    $postdata=explode(" ", get_the_content());
    $lesscontet=array_slice($postdata,0, $key);
    echo implode(" ", $lesscontet);
}

// End Limit Post Content

// for index page....
 read_more('80'); 







// // Start Author Details Box



// function wpb_author_info_box( $content ) {
 
// global $post;
 
// // Detect if it is a single post with a post author
// if ( is_single() && isset( $post->post_author ) ) {
 
// // Get author's display name 
// $display_name = get_the_author_meta( 'display_name', $post->post_author );
 
// // If display name is not available then use nickname as display name
// if ( empty( $display_name ) )
// $display_name = get_the_author_meta( 'nickname', $post->post_author );
 
// // Get author's biographical information or description
// $user_description = get_the_author_meta( 'user_description', $post->post_author );
 
// // Get author's website URL 
// $user_website = get_the_author_meta('url', $post->post_author);
 
// // Get link to the author archive page
// $user_posts = get_author_posts_url( get_the_author_meta( 'ID' , $post->post_author));
  
// if ( ! empty( $display_name ) )
 
// $author_details = '<p class="author_name">About ' . $display_name . '</p>';
 
// if ( ! empty( $user_description ) )
// // Author avatar and bio
 
// $author_details .= '<p class="author_details">' . get_avatar( get_the_author_meta('user_email') , 90 ) . nl2br( $user_description ). '</p>';
 
// $author_details .= '<p class="author_links"><a href="'. $user_posts .'">View all posts by ' . $display_name . '</a>';  
 
// // Check if author has a website in their profile
// if ( ! empty( $user_website ) ) {
 
// // Display author website link
// $author_details .= ' | <a href="' . $user_website .'" target="_blank" rel="nofollow">Website</a></p>';
 
// } else { 
// // if there is no author website then just close the paragraph
// $author_details .= '</p>';
// }
 
// // Pass all this info to post content  
// $content = $content . '<footer class="author_bio_section" >' . $author_details . '</footer>';
// }
// return $content;
// }
 
// // Add our function to the post content filter 
// add_action( 'the_content', 'wpb_author_info_box' );
 
// // Allow HTML in author bio section 
// remove_filter('pre_user_description', 'wp_filter_kses');



// // End Author Details Box



function theme_prefix_setup() {
    
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-width' => true,
    ) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );
function theme_prefix_the_custom_logo() {
    
    if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    }

}












// Start Search page er Search Key gulo k High Light Korar Jonno...........
//functions Add++ Search page thekey Code replace ++ Header Page a Style add kortey hobey........
function search_excerpt_highlight() {
    $excerpt = get_the_excerpt();
    $keys = implode('|', explode(' ', get_search_query()));
    $excerpt = preg_replace('/(' . $keys .')/iu', '<strong class="search-highlight">\0</strong>', $excerpt);

    echo '<p>' . $excerpt . '</p>';
}
function search_title_highlight() {
    $title = get_the_title();
    $keys = implode('|', explode(' ', get_search_query()));
    $title = preg_replace('/(' . $keys .')/iu', '<strong class="search-highlight">\0</strong>', $title);

    echo $title;
}
// and this another search function code
function search_content_highlight() {
    $content = get_the_content();
    $keys = implode('|', explode(' ', get_search_query()));
    $content = preg_replace('/(' . $keys .')/iu', '<strong class="search-highlight">\0</strong>', $content);

    echo '<p>' . $content . '</p>';
}


// End Search page er Search Key gulo k High Light Korar Jonno...........





// Start Add Logo


    add_theme_support( 'custom-logo', array(
        'height'      => 44,
        'width'       => 244,
        'flex-height' => true,
    ) );

// End Add Logo


