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
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/max/inner-ban.jpg" alt="event-management">
        <div class="pageheading-middle">
            <div>
            <h2><font><?php the_title(); ?></font></h2>
            <?php if ( function_exists('yoast_breadcrumb') ) { 
            yoast_breadcrumb('<h6 id="breadcrumbs">','</h6>'); 
            } ?>
            </div>
        </div>
</div>
                

<div class="container innerpage-content-wrap solution-page services">
    <div class="row">
            <?php query_posts('post_type=our_services&order=ASC&showposts=100'); ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="col-lg-3 col-md-4">
                <a href="<?php the_permalink(); ?>" class="solution-item">
                    <span>
                        <i class="fas fa-link"></i>
                        <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                        <?php the_post_thumbnail('large'); ?>
                        <?php endif; ?> 
                    </span>
                    <h4><font><?php the_title(); ?></font></h4>
                </a>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_query();?>
            
        </div>
</div>


<?php
get_footer();