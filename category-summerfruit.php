<?php get_header();?>
<div class="latest-news mt-150 mb-150">
    <div class="container">
      <h1 class="text-bold">Latest Items</h1>
      <hr class="hr hr-dark mb-5">
      <div class="row">
<?php
    $summerfruit = new WP_Query(
        array(
            'category_in' => wp_get_post_categories($post->ID),
            'posts_per_page' => 3,
            'category_name' => 'summerfruit',
            'post_not_in' => array($post->ID)
        )
    );
      if($summerfruit->have_posts() ) {
        while ($summerfruit -> have_posts() ) {
          $summerfruit -> the_post();
          get_template_part('template-parts/content','category');
        }
      }
    ?>
      </div>
    </div>
  </div>
  <?php get_footer();?>