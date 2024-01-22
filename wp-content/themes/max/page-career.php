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
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/max/inner-ban.jpg" alt="max">
        <div class="pageheading-middle">
            <div>
            <h2><font><?php the_title(); ?></font></h2>
            <?php if ( function_exists('yoast_breadcrumb') ) { 
            yoast_breadcrumb('<h6 id="breadcrumbs">','</h6>'); 
            } ?>
            </div>
        </div>
</div>
                

<div class="container innerpage-content-wrap contact-page career-page">
    <div class="row">
		<div class="col-12 contact-messg">
			<h3 class="page-heading">
				Let's Grow <span>Together!</span>
			</h3>
			<p>
				Embark on a journey with us, where your contributions matter, and your growth is our priority. Together, let's redefine possibilities and create solutions that propel us into the future of IT innovation
			</p>
		</div>
		
	

		 <div class="col-lg-6 career-form-pge">
                	
            <h3 align="center">Forge Your Path: Career Information Form</h3>
            <?php echo do_shortcode('[contact-form-7 id="4c7f65c" title="career"]'); ?>
        </div>
         <div class="col-lg-6" data-aos="fade-left" data-aos-duration="3000">
            <span>
                <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                <?php the_post_thumbnail('large'); ?>
                <?php endif; ?> 
            </span>
        </div>

				 </div>
		</div>
				 
			 </div>
            
			
           




<?php
get_footer();