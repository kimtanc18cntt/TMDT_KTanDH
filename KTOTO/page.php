<?php get_header(); ?>
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="module-news-detail">
			<div class="container">
				<div class="bread-crumb">
					<a href="<?php bloginfo( 'url' ); ?>">Trang chủ</a>
					<span class="dot">/</span>
					<span class="name"><?php the_title(); ?></span>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="border">
							<p class="lh2-title1"><?php the_title(); ?></p>
							
							
							<?php the_content(); ?>
							
							<div class="mau2-share-7ncn">
								<span>Chia sẻ: </span>
								<a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
								<a href="" target="_blank"><i class="fab fa-google-plus-g"></i></a>
								<a href="" target="_blank"><i class="fab fa-skype"></i></a>
								<?php the_tags(', '); ?>
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