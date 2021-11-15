<h2 class="title">Sản phẩm nổi bật</h2>


<div class="row">
    <?php 
                $args = array(
                    'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                    'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
                    'showposts' => 4, // số lượng bài viết
                    'cat' => 8, // lấy bài viết trong chuyên mục có id là 8
                    'offset' => 1,
                );
    ?>
            <?php $getposts = new WP_query($args); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                
                <div class="col-4">
                    <a href="<?php the_permalink(); ?>"> <?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' =>'thumnail') ); ?></a>
                    <h4> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h4>
                    <div class="rating">

                    </div>
                    <p>Gia: 18000 vnd</p>
                </div>

            <?php endwhile; wp_reset_postdata(); ?>

</div>*/