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

<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>

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
                

<div class="container innerpage-content-wrap testimonials-page">
    
    <div class="row" data-masonry='{"percentPosition": true }'>
        <?php query_posts('post_type=testimonials&order=DEC&showposts=12'); ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="col-lg-6">
                <div class="testimonial-item">
                    <span>
                        <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                        <?php the_post_thumbnail('medium'); ?>
                        <?php endif; ?> 
                    </span>
                    <?php the_content(); ?>
                    <h6><?php the_title(); ?></h6>
                </div>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_query();?>
    </div>

</div>

<?php
get_footer();