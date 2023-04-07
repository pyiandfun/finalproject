<div class="row mb-100">
    <div class="col-md-4">
        <div id="ho_shad" class="">
            <h3><?php the_title();?></h3>
            <p><?php the_tags();?></p>
            <p><?php the_category();?></p>
            <figure><img src="<?php 
                the_post_thumbnail_url('thumbnail'); 
                ?>" alt="#"/></figure>
            <p>
            <?php
                the_excerpt();
            ?>
            </p>
        </div>
    </div>
</div>