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
                
<!-- About section starts  -->

<div class="container overview-wrapper about-maxinfotech">
    <div class="row">
        <div class="col-lg-6 pr-lg-5"  data-aos="fade-right" data-aos-duration="3000">
            <span>
                <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                <?php the_post_thumbnail('large'); ?>
                <?php endif; ?> 
            </span>
        </div>
        <div class="col-lg-6 pl-lg-4 ab">
			<h4 class="page-heading">
				Get To Know <span>MAX !</span>
			</h4>
            <?php the_content(); ?>
			<div class="sq-abt aswing">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/max/sq.png" alt="max" decoding="async" loading="lazy">
			  </div>
        </div>
		
    </div>
</div>
 
<!-- About section ends  -->


<!-- company -->

<div class="about-page-middle">
        <div class="container">
			  <h4 class="page-heading">About <span>Company</span></h4>
			 <div class="sq-ab aswing">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/max/sq.png" alt="max" decoding="async" loading="lazy">
			  </div>
        <div class="row">
          
            <div class="col-lg-7 whychoosegh-wrap">
                <span>
                  
				    <p> <?php the_field('company'); ?>	</p>
                </span>
            </div>
			  <div class="col-lg-5" data-aos="fade-left" data-aos-duration="3000">
             <img src="<?php echo get_template_directory_uri();?>/assets/img/max/abtcmp.webp" alt="event-management" decoding="async" loading="lazy">
			</div>
        </div>
        </div>
    </div>

<!-- company -->


<!-- clients starts -->

<section class="clients">
<div class="container">
	<h4 class="page-heading">
		Major <span>Clients</span>
	</h4>
	  <div class="row">
            <?php query_posts('post_type=clients&order=ASC&showposts=100'); ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="c-box">
					    <p><?php the_title(); ?></p>
				</div>

            </div>
            <?php endwhile; ?>
            <?php wp_reset_query();?>
            
        </div>
	</div>
</section>

<!-- clients ends -->

<!-- testimonial section -->

 <div class="testimonials-wrap-gh inner-testi">
        <div class="container">
            <div class="home-headings-gh">
                <h2 class="page-heading">What Our Clients <span>Say !</span></h2>
            </div>

            <div class="testimonialscroll">
                <?php query_posts('post_type=testimonials&order=DEC&showposts=100'); ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-lg-12">
                        <div class="testimonials-item">
                            <span>
                            <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                    <?php endif; ?>
                            </span>
                            <?php the_content(); ?>
                            <font>
                                <h5><?php the_title(); ?></h5>
                            </font>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_query();?>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('.testimonialscroll').slick({
                slidesToShow: 2,
                slidesToScroll: 2,
                autoplay: true,
                autoplaySpeed: 4000,
                dots: true,
                infinite: true,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 770,
                        settings: {
                            arrows: false,
                            slidesToShow: 3,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 520,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            centerPadding: '0px',
                            dots: false,
                        }
                    }
                ]
            });
        });
    </script>

<!-- testimonial ends -->









<!-- Team section starts -->


<!-- <section class="leaders-list-main container-fluid adminlist">
    <div class="custom-container">
      <div class="row">
        <div class="col-12">
          <h4>Team</h4>
        </div>

        <?php query_posts('post_type=administrative&order=ASC&showposts=20'); ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-3 col-12">
          <a href="<?php the_permalink(); ?>">
            <div class="leader-box admin-box">
                <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                <?php the_post_thumbnail('large'); ?>
                <?php endif; ?>
              <div class="content">
                <h6><?php the_title(); ?></h6>
                <p><?php the_field('designation'); ?></p>
              </div>
            </div>
          </a>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_query();?>
        
        
      </div>
    </div>
  </section> -->


<!-- Team section ends -->




<?php
get_footer();