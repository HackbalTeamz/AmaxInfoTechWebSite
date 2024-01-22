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

   <section class="leaders-detail-main admin-detail container-fluid p-0">
    <div class="custom-container">
      <div class="row">
        <div class="col-md-4 col-12">
          <div class="profile-img-box admin-img">
                <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                <?php the_post_thumbnail('large'); ?>
                <?php endif; ?>
            <h4><?php the_title(); ?></h4>
            <h6><?php the_field('designation'); ?></h6>
          </div>
        </div>
        <div class="col-md-8 col-12 m-auto">
          <div class="profile-content">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();