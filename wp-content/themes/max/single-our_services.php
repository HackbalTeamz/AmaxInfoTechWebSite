<?php
/** 
 * The single post.<br>
 * This file works as display full post content page and its comments.
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

   <section class="service-detail-main container-fluid p-0">
    <div class="custom-container">
      <div class="row">
        <div class="col-md-6 col-12">
          <div class="service-img">
                <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                <?php the_post_thumbnail('large'); ?>
                <?php endif; ?>
           
          </div>
        </div>
        <div class="col-md-6 col-12">
          <div class="service-content">
			   <h4><?php the_title(); ?></h4>
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>





<?php
get_footer();