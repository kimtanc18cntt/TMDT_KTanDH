
<div class="block-partner">
			<div class="container">
				<div class="responsive">
			
					<!---->
				<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=6&post_type=quang-cao'); ?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
							<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                            <div class="col-2 item-partner">
						<div class="bg">
							<img class="img-fluid" src="<?php echo $featured_img_url;?>" alt="">
						</div>
					</div>
                        <?php endwhile; wp_reset_postdata(); ?>		
					
					
						</div>
							<button class="button-slider next"><i class="fas fa-chevron-right"></i></button>
							<button class="button-slider prev"><i class="fas fa-chevron-left"></i></button>
						</div>
		</div>