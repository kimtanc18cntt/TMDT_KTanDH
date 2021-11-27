<?php get_template_part('quangcao');	 ?>
		<div class="footer-bg">
			<div class="block-footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
							<p class="title">GIỚI THIỆU</p>
							<p class="caption"> Ô TÔ KIM TÂN của hàng bán các loại xe 4 chỗ của các thương hiệu BMW, HONDA, TOYOTA.</p>
							<a href="" class="logo"><img class="img-fluid" src="<?php bloginfo('template_directory') ?>/img/lgo.png" alt=""></a>	
							<p></p>
							<p><i class="fas fa-map-marker-alt"></i> 244 Trần Phú, P.7, TP Tuy Hoà, Phú Yên</p>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
							<p class="title">Danh mục Dịch vụ</p>
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
						<div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
							<p class="title">Danh mục sản phẩm</p>
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
						
						

						<div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
							<p class="title">GỬI LIÊN HỆ</p>
							<p>Liên hệ ngay với chúng tôi để nhận được những ưu đãi mới nhất</p>
							<p><i class="fas fa-phone"></i> 0988 888 898</p>
							<p><i class="fas fa-envelope"></i> Email: lekimtan0610@gmail.com</p>
							<input type="" name="" placeholder="Nhập email của bạn">
							<button type="">Gửi</button>
							<p class="title">Kết nối</p>
							<ul class="lh2-ul share-h2">
								<li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-skype"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="block-copyright">
				<div class="container">
					<p>Copyright © Kim Tân Dc18cntt-Thương mại điện tử.</p>
				</div>
			</div>
		</div>
		<a class="btn-top" id="bttop" href="javascript:void(0);" title="Top" style="display: inline;"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
	</div>
	<!-- Javascript -->
  	<script src="<?php bloginfo('template_directory') ?>/js/tether.min.js"></script>
  	<script src="<?php bloginfo('template_directory') ?>/js/jquery.min.js"></script>
  	<script src="<?php bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>
  	<script src="<?php bloginfo('template_directory') ?>/js/wow.min.js"></script>
  	<script src="<?php bloginfo('template_directory') ?>/js/jquery.mmenu.all.js"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/slick.js"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/smoothscroll.js"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/lightslider.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/lightGallery.js"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/main.js"></script>
	 <?php wp_footer();?>
	 
</body>
</html>