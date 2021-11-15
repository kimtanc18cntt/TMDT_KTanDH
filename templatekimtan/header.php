<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style.css">
        <link rel="preconnect" href="<?php bloginfo('template_directory') ?>/https://fonts.googleapis.com">
        <link rel="preconnect" href="<?php bloginfo('template_directory') ?>/https://fonts.gstatic.com" crossorigin>
        <link href="<?php bloginfo('template_directory') ?>/https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,400;1,500&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">

        <?php wp_head(); ?>

    </head>

    <body>
        <div class="header">
            <div class="container">
                <div class="navbar">
                    <div class="logo">                       
                        <a href="<?php bloginfo('url'); ?>" > <img src="<?php bloginfo('template_directory') ?>/images/lgrl.png" width="135px"></a>
                    </div>
                    <nav>
                        <?php wp_nav_menu( 
                            array( 
                                'theme_location' => 'topmenu', 
                                'container' => 'false', 
                                'menu_id' => 'top-menu', 
                                'menu_class' => 'top-menu'
                            ) 
                        ); ?>
                    </nav> 
                    <img src="<?php bloginfo('template_directory') ?>/images/cart.png" width="25px" height="25px">
                    <img src="<?php bloginfo('template_directory') ?>/images/menuicon.png" class="menu-icon">
                </div>  
            <did class="nen">
            <img src="<?php bloginfo('template_directory') ?>/images/baba.jpg" width="1250px" height="250px">
            </did>
                <div class="row">
                    <div class="col-2">
                        <h1>ROLEX <br> SUBMARINER</h1>
                        <p> Đẳng cấp thương gia.<br>Chuẩn mực đồng hồ của thợ lặn</p>
                        <a href="" class="btn">Xem chi tiết &#8594</a>
                    </div>
                    <div class="col-2">
                        <img src="<?php bloginfo('template_directory') ?>/images/101.jpg">
                    </div>
                </div>

            </div>
        </div>