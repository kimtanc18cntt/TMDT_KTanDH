<?php get_header(); ?>
	<?php get_template_part('slider');	 ?>

	<?php get_template_part('intro');	 ?>
	
		
		<!-- get san pham xe toyota -->
		<div class="block-product">
			<div class="container">
				<p class="lh2-title"> <span>Bán xe TOYOTA</span></p>
				<div class="row">
						<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=6&post_type=san-pham&danh-muc=toyota'); ?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
								<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
							<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="bg">
									<div class="img-height">
										<a class="img" href="<?php the_permalink(); ?>">
											<img class="img-fluid lh2-img" src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>">
										</a>
									</div>
									<div class="info-product">
										<a class="name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> <?php the_field('gia_sp') ?></p><!-- sử dụng hàm custom field-->
										<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b><?php the_field('cho_ngoi') ?></p>
										<p><b><i class="fas fa-car"></i>Thương hiệu:</b> <?php the_field('thuong_hieu') ?></p>
									</div>
								</div>
							</div>
						<?php endwhile; wp_reset_postdata(); ?>		
										
				</div>
			</div>
		</div>
<!-- get san pham xe honda -->
<div class="block-product">
			<div class="container">
				<p class="lh2-title"> <span>Bán xe Honda</span></p>
				<div class="row">
						<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=6&post_type=san-pham&danh-muc=honda'); ?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
								<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
							<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="bg">
									<div class="img-height">
										<a class="img" href="<?php the_permalink(); ?>">
											<img class="img-fluid lh2-img" src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>">
										</a>
									</div>
									<div class="info-product">
										<a class="name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> <?php the_field('gia_sp') ?></p><!-- sử dụng hàm custom field-->
										<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b><?php the_field('cho_ngoi') ?></p>
										<p><b><i class="fas fa-car"></i>Thương hiệu:</b> <?php the_field('thuong_hieu') ?></p>
									</div>
								</div>
							</div>
						<?php endwhile; wp_reset_postdata(); ?>		
										
				</div>
			</div>
		</div>
<!-- get san pham xe BMW -->
<div class="block-product">
			<div class="container">
				<p class="lh2-title"> <span>Bán xe BMW</span></p>
				<div class="row">
						<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=6&post_type=san-pham&danh-muc=bmw'); ?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
								<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
							<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="bg">
									<div class="img-height">
										<a class="img" href="<?php the_permalink(); ?>">
											<img class="img-fluid lh2-img" src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>">
										</a>
									</div>
									<div class="info-product">
										<a class="name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> <?php the_field('gia_sp') ?></p><!-- sử dụng hàm custom field-->
										<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b><?php the_field('cho_ngoi') ?></p>
										<p><b><i class="fas fa-car"></i>Thương hiệu:</b> <?php the_field('thuong_hieu') ?></p>
									</div>
								</div>
							</div>
						<?php endwhile; wp_reset_postdata(); ?>		
										
				</div>
			</div>
		</div>
		<!-- get san pham xe Mes -->
<div class="block-product">
			<div class="container">
				<p class="lh2-title"> <span>Bán xe Mercedes</span></p>
				<div class="row">
						<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=6&post_type=san-pham&danh-muc=mercedes'); ?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
								<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
							<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="bg">
									<div class="img-height">
										<a class="img" href="<?php the_permalink(); ?>">
											<img class="img-fluid lh2-img" src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>">
										</a>
									</div>
									<div class="info-product">
										<a class="name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> <?php the_field('gia_sp') ?></p><!-- sử dụng hàm custom field-->
										<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b><?php the_field('cho_ngoi') ?></p>
										<p><b><i class="fas fa-car"></i>Thương hiệu:</b> <?php the_field('thuong_hieu') ?></p>
									</div>
								</div>
							</div>
						<?php endwhile; wp_reset_postdata(); ?>		
										
				</div>
			</div>
		</div>
			<!-- get san pham xe Mes -->
<div class="block-product">
			<div class="container">
				<p class="lh2-title"> <span>Bán xe Lamborghini</span></p>
				<div class="row">
						<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=6&post_type=san-pham&danh-muc=lamboghini'); ?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
								<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
							<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="bg">
									<div class="img-height">
										<a class="img" href="<?php the_permalink(); ?>">
											<img class="img-fluid lh2-img" src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>">
										</a>
									</div>
									<div class="info-product">
										<a class="name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> 
											<?php if(get_field('gia_sp')) { ?>
												<?php the_field('gia_sp'); ?>
											<?php } else { ?>
												 Liên hệ
											<?php } ?></p><!-- sử dụng hàm custom field-->
										<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b><?php the_field('cho_ngoi') ?></p>
										<p><b><i class="fas fa-car"></i>Thương hiệu:</b> <?php the_field('thuong_hieu') ?></p>
									</div>
								</div>
							</div>
						<?php endwhile; wp_reset_postdata(); ?>		
										
				</div>
			</div>
		</div>
		
<?php get_footer(); ?>