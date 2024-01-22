<?php
/**
 * The theme header.
 * 
 * @package bootstrap-basic4
 */

$container_class = apply_filters('bootstrap_basic4_container_class', 'container');
if (!is_scalar($container_class) || empty($container_class)) {
    $container_class = 'container';
}
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Teko:wght@300;400;500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Condensed:wght@100;200;300;400;500&display=swap" rel="stylesheet">
        
	     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		
	
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script> 
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.js"></script> 
<!-- 		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/aos.js"></script> -->
			



		
		
		
        <?php wp_head(); ?> 
    </head>
    <body <?php body_class(); ?>>
    <a href="https://api.whatsapp.com/send?phone=+96629207699&amp;text=Welcome to Max" target="_blank" class="whatsapp-iconbtn"><i class="fab fa-whatsapp"></i></a>
        
        <div class="page-container">

        <div class="header-wrapper navbar-fixed-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 col-md-3 col-9">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/max/mlogo.png" alt="max-logo"></a>
                    </div>
                    <div class="col-lg-7 col-md-8 col-3"><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></div>
                </div>
            </div>
        </div>
            


