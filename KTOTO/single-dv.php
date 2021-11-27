<?php get_header(); ?>
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="module-news-detail">
			<div class="container">
				<div class="bread-crumb">
					<a href="<?php bloginfo( 'url' ); ?>">Trang chủ</a>
					<span class="dot">/</span>
					<a href="<?php bloginfo( 'url' ); ?>/dv">Dịch vụ cửa hàng</a>
					<span class="dot">/</span>
					<span class="name"><?php the_title(); ?></span>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="border">
							<p class="lh2-title1"><?php the_title(); ?></p>
							<div class="lh2-date"><i class="fas fa-calendar-alt"></i> Ngày đăng: <?php echo get_the_date('d/m/Y'); ?></div>
							
							<?php the_content(); ?>
							
							<div class="mau2-share-7ncn">
								<span>Chia sẻ: </span>
								<a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
								<a href="" target="_blank"><i class="fab fa-google-plus-g"></i></a>
								<a href="" target="_blank"><i class="fab fa-skype"></i></a>
								<?php the_tags(', '); ?>
							</div>
							
							<div class="block-product-other">
							<p class="title-other"><span>Dịch vụ liên quan liên quan</span></p>
							<div class="slider-product">
								<?php
									$terms = get_the_terms( get_the_ID(), 'danh-muc-dv' );
									$current_term = $terms[0] ->slug;
									if($current_term) {
											$args=array(
												'danh-muc-dv' => $current_term,
												'post__not_in' => array(get_the_id()),
												'showposts'=>5, // Số bài viết bạn muốn hiển thị.
												'caller_get_posts'=>1,
												'post_type' => 'dv'

											);
											$my_query = new wp_query($args);
											if( $my_query->have_posts() ) 
											{
												while ($my_query->have_posts())
												{
													$my_query->the_post();?>
													<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
													<div class="item-product ">
														<div class="bg">
															<div class="img-height">
																<a class="img" href="<?php the_permalink(); ?>">
																	<img class="img-fluid lh2-img" src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>">
																</a>
															</div>
															<div class="info-product">
																<a class="name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
																<p><?php the_excerpt();?></p>
															</div>
														</div>
													</div>
													<?php
												}
										}
									}
								?>
								

							</div>
							<button class="button-slider next"><i class="fas fa-chevron-right"></i></button>
							<button class="button-slider prev"><i class="fas fa-chevron-left"></i></button>
						</div>
						</div>
					</div>
					<div class="col-lg-3 d-none d-lg-block">
					<?php get_sidebar(); ?>
					</div>
				</div>
				
			</div>
		</div>
	<?php endwhile; else : ?>
	<p> Bài viết không có nội dung! </p>
	<?php endif; ?>
<?php get_footer(); ?>