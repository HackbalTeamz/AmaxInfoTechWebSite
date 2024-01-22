<?php
/** 
 * The page template file.<br>
 * This file works as display page content (post type "page") and its comments.
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
            <h2><font><?php the_title(); ?></font></h2>
            <?php if ( function_exists('yoast_breadcrumb') ) { 
            yoast_breadcrumb('<h6 id="breadcrumbs">','</h6>'); 
            } ?>
            </div>
        </div>
</div>
                

<div class="container innerpage-content-wrap">
    <?php the_content(); ?>

    <div class="row">
        <?php query_posts('post_type=team&order=ASC&showposts=100'); ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-lg-3 col-md-4">
        <div class="ourteam-item">
            <font><i class="fas fa-user"></i></font>
            <span>
                <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                <?php the_post_thumbnail('large'); ?>
                <?php endif; ?> 
            </span>
            <div class="team-content">
                <h5><?php the_title(); ?></h5>
                <h6><?php the_field('designation'); ?></h6>
            </div>
        </div>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_query();?>
    </div>
</div>

<?php
get_footer();