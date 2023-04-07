<?php
    function my_Register_styles() {
        wp_enqueue_style('my_style',get_template_directory_uri().'/style.css',array(),'1.0','all');
        wp_enqueue_style('my_bootstrapMin',get_template_directory_uri().'/assets/css/all.min.css',array(),'1.0','all');
        wp_enqueue_style('followendrew_bootstrap_cdn','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css',array(),'4.4.1','all');
      }

      add_action('wp_enqueue_scripts','my_Register_styles');

      function my_Register_scripts() {
        wp_enqueue_script('my_script',get_template_directory_uri().'/assets/js/bootstrap.min.js',true);
      }
      add_action('wp_enqueue_scripts','my_Register_scripts');

      function my_menus() {
        $locations = array(
          'primary' => 'Desktop Primary Left Sidebar',
          'footer'  => 'Footer Menu Items'
        );
        register_nav_menus($locations);
      }
      add_action('init','my_menus');
      
      add_theme_support('post-thumbnails');



      function example_cats_related_post() {

        $post_id = get_the_ID();
        $cat_ids = array();
        $categories = get_the_category( $post_id );
    
        if(!empty($categories) && is_wp_error($categories)):
            foreach ($categories as $category):
                array_push($cat_ids, $category->term_id);
            endforeach;
        endif;
    
        $current_post_type = get_post_type($post_id);
        $query_args = array( 
    
            'category__in'   => $cat_ids,
            'post_type'      => $current_post_type,
            'post__not_in'    => array($post_id),
            'posts_per_page'  => '3'
    
    
         );
    
        $related_cats_post = new WP_Query( $query_args );
    
        if($related_cats_post->have_posts()):
             while($related_cats_post->have_posts()): $related_cats_post->the_post(); ?>
                <ul>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                        <?php the_content(); ?>
                    </li>
                </ul>
            <?php endwhile;
    
            // Restore original Post Data
            wp_reset_postdata();
         endif;
    }

    function my_widget_area() {
      register_sidebar (
        array(
          'before_title' => '<h2>',
          'after_title' => '</h2>',
          'before_widget' => '',
          'after_widget' => '',
          'name' => 'Sidebar Area',
          'id' => 'sidebar-1',
          'description' => 'Sidebar Widget Area'
        ),
        array(
          'name' => 'Sidebar Area1',
          'id' => 'sidebar-1',
          'description' => 'Sidebar Widget Area'
        )
      );
      register_sidebar (
        array(
          'before_title' => '<h2>',
          'after_title' => '</h2>',
          'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
          'after_widget' => '</ul>',
          'name' => 'Footer Area',
          'id' => 'footer-1',
          'description' => 'Foooter Widget Area'
        ),
        array(
          'name' => 'Footer Area2',
          'id' => 'footer-1',
          'description' => 'Foooter Widget Area'
        )
      );
    }
   
    add_action('widgets_init','my_widget_area');


    function giveaways_post_type() {
      register_post_type( 'giveaways',
      array(
          'labels' =>array(
            'name' => __('Giveaways'),
            'singular_name' => __('giveaway')
        ),
        'public' => true,
          'has_archive' => True,
          'rewrite' => array('slug' => 'giveaways'),
          'supports' => array('title', 'editor', 'thumbnail'),
      ));
    }
    
    add_action('init','giveaways_post_type');

?>

