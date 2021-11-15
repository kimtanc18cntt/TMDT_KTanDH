<div class="offer">
            <div class="small-container">

            <?php 
                $args = array(
                    'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                    'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
                    'showposts' => 1, // số lượng bài viết
                    'cat' => 8, // lấy bài viết trong chuyên mục có id là 8
                );
            ?>
            <?php $getposts = new WP_query($args); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                
                <div class="row">
                    <div class="col-2">
                        
                        <a href="<?php the_permalink(); ?>"> <?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' =>'offer-img') ); ?></a>
                        
                        
                    </div>
                    <div class="col-2">
                        <p>Sản phẩm có của Rolex </p>
                        
                        <h1> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h1>
                        <small><?php the_excerpt(); ?></small>
                        <br>
                        <span>Ngày đăng: <?php echo get_the_date(); ?></span>
                        <br>
                        <span>Lượt mua: 25</span>
                        <br>
                        <a href="" class="btn"> Mua ngay &#8594 </a>
                    </div>
                </div>

            <?php endwhile; wp_reset_postdata(); ?>




            </div>
</div>