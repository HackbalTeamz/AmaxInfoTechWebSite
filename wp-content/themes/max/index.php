<?php
/**
 * The main template file.
 * 
 * To override home page (for listing latest post) add home.php into the theme.<br>
 * If front page displays is set to static, the index.php file will be use.<br>
 * If front-page.php exists, it will be override any home page file such as home.php, index.php.<br>
 * To learn more please go to https://developer.wordpress.org/themes/basics/template-hierarchy/ .
 * 
 * @package bootstrap-basic4
 */


// begins template. -------------------------------------------------------------------------
get_header();
?> 

<div class="innerpage-header">
     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inner-banner-golden-horca.webp" alt="event-management">
        <div class="pageheading-middle">
            <div>
            <h2><font>Latest News</font></h2>
            <?php if ( function_exists('yoast_breadcrumb') ) { 
            yoast_breadcrumb('<h6 id="breadcrumbs">','</h6>'); 
            } ?>
            </div>
        </div>
</div>
                

<div class="container innerpage-content-wrap blog-page">
    <div class="row">
    <?php query_posts('post_type=post&order=Dec&showposts=50'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="col-lg-4 col-md-4">
                        <a href="<?php the_permalink(); ?>" class="blog-item">
                            <span>
                                <i class="fas fa-link"></i>
                                <div class="date-div">
                                    <h2><?php echo get_the_date( 'd' ); ?></h2>
                                    <h5><?php echo get_the_date( 'M Y' ); ?></h5>
                                </div>
                                <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                                <?php the_post_thumbnail('large'); ?>
                                <?php endif; ?> 
                            </span>
                            <h6><?php the_title(); ?></h6>
                        </a>
                    </div>
                    <?php endwhile; ?>
    	            <?php wp_reset_query();?>
    </div>
</div>

<?php
get_footer();