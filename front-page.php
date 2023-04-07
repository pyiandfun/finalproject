
<?php get_header(); ?>             
	<!-- latest news -->
	
	<div class="latest-news mt-150 mb-150">
		<div class="container">
			<h1 class="text-bold">Latest Items</h1>
			<hr class="hr hr-dark mb-5">
			<div class="row">
				<?php if(have_posts()):
					 while(have_posts()) :
						the_post();?>
						<div class="col-lg-4 col-md-6">
							<div class="single-latest-news">
								<a href="#"><div><img src="<?php the_post_thumbnail_url('thumbnail'); ?>"  class="border-rounded" alt="Thumbnail"></div></a>
								<div class="news-text-box">
									<h3><a href="#"><?php the_title(); ?></a></h3>
									<span><?php the_category(); ?></span>
									<span><?php the_tags(); ?></span>
									<p><?php echo get_the_date('F j, Y') ; ?></p>
									<p class="excerpt"><?php the_excerpt(); ?></p>
									<a href="<?php the_permalink(); ?>" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
								</div>
							</div>
						</div>
					<?php endwhile;
				endif;?>
		</div>
	</div>
	<!-- end latest news -->
 <?php get_footer(); ?>