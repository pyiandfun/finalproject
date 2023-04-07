
<div class="row mb-100">
    <div class="col-md-4">
        <div id="ho_shad" class="services_box text_align_left">
            <h3><?php the_title();?></h3>
            <figure><img src="<?php 
                the_post_thumbnail_url('thumbnail'); 
                ?>" alt="#"/></figure>
            <p><?php the_category();?></p>
            <p><?php the_tags();?></p>
            <?php
                the_excerpt();
            ?>
            </p>
        </div>
    </div>
</div>
