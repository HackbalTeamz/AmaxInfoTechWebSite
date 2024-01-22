<?php
/** 
 * The page template file.<br>
 * 
 */


get_header();
?> 



<!-- banner section starts -->

 <div class="home-banner-wrap">
        <?php query_posts('post_type=banner&order=ASC&showposts=6'); ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="banner-item banner-imagecon">
            <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
            <?php the_post_thumbnail('full'); ?>
            <?php endif; ?>
            <div class="banner-caption">
                <div class="container-fluid">
                <div class="row bannerslider-item">
                    <div class="col-lg-6 swing">
                        <span>
                        <h2><font><?php the_title(); ?></font>
							<h3 class="color"><?php the_field('color_head'); ?></h3>
						<p><?php the_field('sub_heading'); ?></p>
	 </h2>     
                        </span>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    	<?php wp_reset_query();?>
    </div>



 <script>
        $(document).ready(function () {
            $('.home-banner-wrap').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2500,
        dots: true,
        fade: true,
        infinite: true,
        cssEase: 'ease-in-out',
        arrows: false,
        responsive: [
            {
                breakpoint: 770,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 520,
                settings: {
                    slidesToShow: 1,
                    centerPadding: '0px',
                    dots: true,
                    slidesToScroll: 1,
                }
            }
        ]
    });
        });
    </script>

<!-- banner section ends -->

<!-- About Section Starts -->

      <section class="about-wrapper">
        <div class="container">
            <div class="row">
                 <div class="col-lg-5 col-12" data-aos="fade-right" data-aos-duration="3000">
                    <span class="about-image aswing">
                        <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                        <?php the_post_thumbnail('large'); ?>
                        <?php endif; ?> 
                    </span>
                </div>
                <div class="col-lg-7 col-12 aboutmax"  data-aos="fade-left" data-aos-duration="3000">
                    <h1 class="page-heading"><font>About <span>MAX</span> </font></h1>
                    <?php the_content(); ?>
            <a href="<?php echo get_template_directory_uri();?>/about/" class="readmore-btn aboutus-btn">Read More <i class="fa-solid fa-arrow-right"></i></a>
					<div class="sq1 aswing">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/max/sq.png" alt="max" decoding="async" loading="lazy">
					</div>
                </div>
            </div>
        </div>
      </section>

<!-- About Section Ends -->

<!-- service section starts -->

  <div class="ourservice-wrapper">
	  <div class="container">
        <h6 class="page-heading">OUR <span>SERVICES</span></h6>
	  <p class="service-sub"><?php the_field('serv-sub'); ?></p>
	  
	  <div class="row service-box">
		  <div class="col-lg-2 col-12">
			  
		  </div>
		  <div class="col-lg-10 col-12">
			  <div class="ser-right-cnt">
				  <h2>
					  Data Networks
				  </h2>
				  <p><?php the_field('s1'); ?></p>
			  </div>
			  <div class="sr-img" data-aos="fade-left" data-aos-duration="3000">
				  <img src="<?php echo get_template_directory_uri();?>/assets/img/max/s1.jpg" alt="max" decoding="async" loading="lazy">
			  </div>
			  <div class="sqr aswing">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/max/sq.png" alt="max" decoding="async" loading="lazy">
			  </div>
			  
		  </div>
		  </div>
		  
		  <div class="row service-box">
		  <div class="col-lg-10 col-12">
			  <div class="ser-left-cnt">
				  <h2>
					  Unified Communication
				  </h2>
				  <p><?php the_field('s2'); ?></p>
			  </div>
			  <div class="sl-img" data-aos="fade-right" data-aos-duration="3000">
				  <img src="<?php echo get_template_directory_uri();?>/assets/img/max/s2.jpg" alt="max" decoding="async" loading="lazy">
			  </div>
			  <div class="sql aswing">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/max/sq.png" alt="max" decoding="async" loading="lazy">
			  </div>
			  
		  </div>
		  <div class="col-lg-2 col-12">
			  
		  </div>
			  </div>
		  
		  <div class="row service-box">
		    <div class="col-lg-2 col-12">
			  
		  </div>
		  <div class="col-lg-10 col-12">
			  <div class="ser-right-cnt">
				  <h2>
					  Security System
				  </h2>
				  <p><?php the_field('s3'); ?></p>
			  </div>
			  <div class="sr-img" data-aos="fade-left" data-aos-duration="3000">
				  <img src="<?php echo get_template_directory_uri();?>/assets/img/max/s3.jpg" alt="max" decoding="async" loading="lazy">
			  </div>
			  <div class="sqr aswing">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/max/sq.png" alt="max" decoding="async" loading="lazy">
			  </div>
		  </div>
			  </div>
		  
		  <div class="row service-box">
		   <div class="col-lg-10 col-12">
			  <div class="ser-left-cnt">
				  <h2>
					  Wireless Network
				  </h2>
				  <p><?php the_field('s4'); ?></p>
			  </div>
			   <div class="sl-img" data-aos="fade-right" data-aos-duration="3000">
				  <img src="<?php echo get_template_directory_uri();?>/assets/img/max/s4.jpg" alt="max" decoding="async" loading="lazy">
			  </div>
			  <div class="sql aswing">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/max/sq.png" alt="max" decoding="async" loading="lazy">
			  </div>
		  </div>
		  <div class="col-lg-2 col-12">
			  
		  </div>
		  </div>

 
	  <a href="<?php echo get_template_directory_uri();?>/services/" class="readmore-btn aboutus-btn">View More <i class="fa-solid fa-arrow-right"></i></a> 
</div>
</div>

    <script>
        $(document).ready(function () {
            $('.servicescroll').slick({
                slidesToShow: 3,
                slidesToScroll: 3,
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


<!-- Service Section Ends -->

<!-- service-btm starts -->

<div class="service-btm-bar">
        <div class="container">
			<div class="row">
				<div class="col-lg-7 col-12">
					<div class="cnslt">
						<h1>
							Ready to Get Free Consultation <br>For Any Kind of IT Solutions ?
						</h1>
					</div>
				</div>
				<div class="col-lg-5 col-12">
					<div class="sbtm-btn">
						<div>
							  <a href="<?php echo get_template_directory_uri();?>/contact-us/" class="qbtn">Get a Quote</a> 
						</div>
						<div>
							  <a href="<?php echo get_template_directory_uri();?>/about-us/" class="srmbtn">Read More</a> 
						</div>
					</div>
				</div>
			</div>
       
        </div>
    </div>

<script>
    var a = 0;
$(window).scroll(function() {

  var oTop = $('#counter').offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $('.counter-value').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {

          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));


          },
          complete: function() {
            $this.text(this.countNum);
          }

        });
    });
    a = 1;
  }

});

</script>

<!-- service-btm ends -->


<!-- testimonial section starts -->

<section class="testimonial">

	<div class="container">
		<h5>
			TESTIMONIALS
		</h5>
		   <h6 class="page-heading">What Our Clients <span> Say?</span></h6>
		<div class="row">
		<div class="col-lg-6 col-12">
			 <div class="testimonialscroll">
                <?php query_posts('post_type=testimonials&order=DEC&showposts=2'); ?>
                <?php while (have_posts()) : the_post(); ?>
				 <div class="row">
					  <div class="col-lg-12">
                        <div class="testimonials-item">
                            <span class="t-img">
                            <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                    <?php endif; ?>
                            </span>
							  <div class="qt">
								  <img src="<?php echo get_template_directory_uri();?>/assets/img/max/quote.png" alt="max" decoding="async" loading="lazy">
							</div>
							<div class="t-cnt">
								 <?php the_content(); ?>
								  <h4><?php the_title(); ?></h4>
							</div>
                              
                            
                        </div>
                    </div>
					
				 </div>
                   
                <?php endwhile; ?>
                <?php wp_reset_query();?>
			</div>
			
		</div>
		<div class="col-lg-6 col-12 test-side" data-aos="zoom-in" data-aos-duration="3000">
			<img src="<?php echo get_template_directory_uri();?>/assets/img/max/testimonial.webp" alt="max" decoding="async" loading="lazy">
		</div>
		</div>
	</div>
</section>
<!-- 
   <script>
        $(document).ready(function () {
            $('.testimonialscroll').slick({
                slidesToShow:1,
                slidesToScroll: 1,
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
    </script> -->

<!-- testimonial section ends -->

<?php
get_footer();