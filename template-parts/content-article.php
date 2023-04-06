
<div class="mx-auto my-5 w-90">
    <div class="mx-auto">
        <h1 class="text-center" style="color: orange;"><?php the_title();?></h1>
        <small class="text-center"><?php the_category(); ?></small>
        <h1><?php the_tags();?></h1>
        <small><?php the_date(); ?></small>
        <div>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
        </div>
        <p><?php the_content(); ?></p>
    </div>
</div>



