

<?php get_header(); ?>

<!-------------------------------------------->

<?php get_template_part('trinhdon') ?>

<!-------------------------------------------->
<div class="small-container">
    
    <!--------------->



    <!--------------->
    <h2 class="title">Danh mục sản phẩm</h2>




    <div class="row">



        <?php
            $tax_query[] = array(
                'taxonomy' => 'product_visibility',
                'field'    => 'name',
                'terms'    => 'featured',
                'operator' => 'IN',
            );
        ?>
        <?php $args = array( 'post_type' => 'product','posts_per_page' => 12,'ignore_sticky_posts' => 1, 'tax_query' => $tax_query); ?>
        <?php $getposts = new WP_query( $args);?>
        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
        <?php global $product; ?>

            <div class="col-4">
                <a href="<?php the_permalink(); ?>"> <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array( 'class' =>'thumnail') ); ?></a>
                <h4><a href=""> <?php the_title(); ?> </a></h4>
                <br>
                <p> <?php echo $product->get_price_html(); ?> </p>
                <a href="" class="btn">Mua ngay</a>
                
            </div>

        <?php endwhile; wp_reset_postdata(); ?>
        


    </div>


</div>

<!--------------->

<?php get_template_part('quangcaosp') ?>

<!--------------->

<?php get_template_part('quangcaologo') ?>

<!--------------->

<?php get_footer(); ?>





