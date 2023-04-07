
<div class="mx-auto my-5 w-90">
    <div class="container mx-auto">
        <h1 class="text-center" style="color: orange;"><?php the_title();?></h1>
        <small class="text-center"><?php the_category(); ?></small>
        <p><?php the_tags();?></p>
        <small><?php echo get_the_date('F j, Y') ; ?></small>
        <div class="w-50">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
        </div>
        <p class="m-5"><?php the_content(); ?></p>
    </div>
</div>



