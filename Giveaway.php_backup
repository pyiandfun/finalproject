
<?php get_header();?>
<article class="content px-3 py-5 p-md-5">

      <div class="col-md-4">
         <?php
            $args = array(
              'post_type'=> 'giveaways',
              'post_status' => 'publish',
              'order' => 'DESC',
            );
            $the_query = new WP_Query($args);
            if($the_query -> have_posts() ) {
              while ($the_query -> have_posts() ) {
                $the_query -> the_post();
               get_template_part('templates/content','giveaway');
              }
            }
          ?>
      </div>
   </article>
<?php get_footer();?>