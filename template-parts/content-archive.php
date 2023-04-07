
<div class="mx-auto my-5 w-90">
    <div class="mx-auto container">
        <h1 class="text-center text-bold" style="color: orange;"><?php the_title();?></h1>
        <small class="text-center"><?php the_category(); ?></small>
        <p><?php the_tags();?></p>
        <small><?php the_date(); ?></small>
        <p><?php the_category();?></p>
        <div class="w-50 h-50">
            <img src="<?php the_post_thumbnail_url(); ?>" class="d-flex justified-content-center" alt="">
        </div>
        <p><?php the_content(); ?></p>
    </div>
</div>