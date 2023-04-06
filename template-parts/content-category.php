<div class="col-lg-4 col-md-6">
    <div class="single-latest-news">
        <a href="#"><div><img src="<?php the_post_thumbnail_url('thumbnail'); ?>"  class="border-rounded" alt="Thumbnail"></div></a>
        <div class="news-text-box">
            <h3><a href="#"><?php the_title(); ?></a></h3>
            <span><?php the_category(); ?></span>
            <span><?php the_tags(); ?></span>
            <span class="date"><i class="fas fa-calendar"></i><?php the_date(); ?></span>
            <p class="excerpt"><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
</div>
