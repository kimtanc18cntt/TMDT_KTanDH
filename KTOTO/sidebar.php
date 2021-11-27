
<div class="box-cate">
							<p class="title-sidebar"><i class="fas fa-bars"></i>Danh mục sản phẩm</p>
							<div class="box-border">
							<div class="box-border">
								<!-- Get category -->
								<?php $args = array( 
									'hide_empty' => 0,
									'taxonomy' => 'danh-muc',
									'showposts'=>5, 
									'post_type' => 'san-pham'
									); 
									$cates = get_categories( $args ); 
									foreach ( $cates as $cate ) {  ?>
									<ul class="lh2-ul">										
										<li><a href="<?php echo get_term_link($cate->slug, 'danh-muc'); ?>"><i class="fas fa-caret-right"></i><?php echo $cate->name ?></a></li>
									</ul>
								<?php } ?>
							
							</div>
						</div>
						<div class="box-cate">
							<p class="title-sidebar"><i class="fas fa-bars"></i>Danh mục Dịch vụ</p>
							<div class="box-border">
							<div class="box-border">
								<!-- Get category -->
								<?php $args = array( 
									'hide_empty' => 0,
									'taxonomy' => 'danh-muc-dv',
									'showposts'=>5, 
									'post_type' => 'dv'
									); 
									$cates = get_categories( $args ); 
									foreach ( $cates as $cate ) {  ?>
									<ul class="lh2-ul">										
										<li><a href="<?php echo get_term_link($cate->slug, 'danh-muc-dv'); ?>"><i class="fas fa-caret-right"></i><?php echo $cate->name ?></a></li>
									</ul>
								<?php } ?>
							
							</div>
						</div>
						<div class="box-contact">
							<p class="title-sidebar"><i class="fas fa-bars"></i>Hỗ trợ trực tuyến</p>
							<div class="box-border">
								<ul class="lh2-ul">
								<a href="" class="logo"><img class="img-fluid" src="<?php bloginfo('template_directory') ?>/img/lgo.png" alt=""></a>
									<li>Hotline: 0111 222 333</li>
									<li>Email: kimtan@gmail.com</li>
								</ul>
							</div>
						</div>
						<div class="box-hightlight-news">
							<p class="title-sidebar"><i class="fas fa-bars"></i>Tin nỗi bật</p>
							<div class="box-border">
								<ul>
								<?php $args = array( 
									'post_status' => 'publish',
									'post-tye' => 'post',
									'showposts'=>6, 
									 'cat'=>1
									);
								?> 	
								<?php $getposts = new WP_query($args); ?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
								<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
								<div class="list-news">
									<a class="img" href=""><img class="img-fluid lh2-img" src="<?php echo $featured_img_url; ?>" alt="<?php the_title();?>"></a>
									<div class="right-list">
										<a href="<?php the_permalink();?>"><?php the_title();?></a>
										<div class="lh2-date"><i class="fas fa-calendar-alt"></i> <?php echo get_the_date('d/m/Y'); ?></div>
									</div>
								</div>
						<?php endwhile; wp_reset_postdata(); ?>		
								</ul>
							
								
							</div>
						</div>
					<!--Đưa wiget ra ngoài-->
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) : ?><?php endif; ?>
						