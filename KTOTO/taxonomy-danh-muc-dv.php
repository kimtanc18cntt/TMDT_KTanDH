<?php get_header(); ?>
		<!-- end lh-header -->
		<div class="module-product">
			<div class="container">
				<div class="bread-crumb">
					<a href="<?php bloginfo( 'url' ); ?>">Trang chủ</a>
					<span class="dot">/</span>
					<a href="<?php bloginfo( 'url' ); ?>/dv">Dịch vụ cửa hàng</a>
					<span class="dot">/</span>
					<span><?php single_cat_title(); ?> </span> <!-- hàm get danh mục sản phẩm -->
				</div>
			</div>
			<div class="container">
				<div class="row">
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
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
                                    p><?php the_excerpt();?></p>
									
								</div>
							</div>
						</div>
					<?php endwhile; else : ?>
						<p>Không có sản phẩm nào trong danh mục</p>
						<?php endif; ?>
						
				</div>
			</div>
		</div>
		<?php get_footer(); ?>