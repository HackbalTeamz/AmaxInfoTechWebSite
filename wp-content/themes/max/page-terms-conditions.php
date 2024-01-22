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
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/privacypolicy.webp" alt="event-management">
        <div class="pageheading-middle">
            <div>
            <h2><font><?php the_title(); ?></font></h2>
            <?php if ( function_exists('yoast_breadcrumb') ) { 
            yoast_breadcrumb('<h6 id="breadcrumbs">','</h6>'); 
            } ?>
            </div>
        </div>
</div>
                
<div class="container innerpage-wrap">
        <div class="row">
            <div class="col-lg-12 pr-lg-5">
                <?php the_content(); ?>
                </div>
 </div>
 </div>




<?php
get_footer();