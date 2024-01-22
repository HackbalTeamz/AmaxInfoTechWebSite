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
                

<div class="container innerpage-content-wrap contact-page">
    <div class="row">
		<div class="col-12 contact-messg">
			<h3 class="page-heading">
				Let's Make Magic <span>Together!</span>
			</h3>
			<p>
				 We specialize in crafting customized network solutions for each client and project. Our dedicated team of project managers and engineers excels in IT, Telecommunication, and low current solutions. Leveraging partnerships with top providers, we ensure optimal results that align with your requirements, budget, and schedule. Contact us for cutting-edge solutions that elevate your network capabilities.
			</p>
		</div>
		
		
		<div class="row cnt-btm">

		 <div class="col-lg-7 contact-form-pge">
                	
            <h3 align="center">Feel Free To Contact</h3>
            <?php echo do_shortcode('[contact-form-7 id="b6a0708" title="contact"]'); ?>
        </div>
         <div class="col-lg-5">
   
            <h3 class="page-heading">Get in <span>Touch!</span></h3>

					 <div class="contact-item" data-aos="fade-in" data-aos-duration="2500">
                <font><i class="fas fa-map-marker-alt"></i></font>
                <h6>Address</h6>
                 <p>Gadeem Mukadarath Building, Office 6, 1st Floor Malaz - POBox: 12851, Riyadh 11323</p>
				 </div>
				 
				 <div class="contact-item style-phone" data-aos="fade-in" data-aos-duration="2500">
                <font><i class="fas fa-phone-alt"></i></font>
                <h6>Phone </h6>
					 <p><a href="tel:+96629207699">+966 2920 7699</a><br></p>
				 </div>
			 
            <div class="contact-item" data-aos="fade-in" data-aos-duration="2500">
                <font><i class="fa-solid fa-fax"></i></font>
                <h6>Fax </h6>
                <p><a href="#">+966 2920 7699</a></p>
				 </div>
			 
            <div class="contact-item" data-aos="fade-in" data-aos-duration="2500">
                <font><i class="far fa-envelope"></i></font>
                <h6>Email </h6>
                <p><a href="mailto:info@amaxinfotech.com">info@amaxinfotech.com
</a></p>
            </div>
				 </div>
		</div>
				 
			 </div>
            
			
           
			
        </div>
<div class="contact-page contact-form-sec">
    <div class="row">
		
		 <div class="col-12 contactmap">
        <div class="google-maps">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58012.94282822906!2d46.661555917459964!3d24.664704422258545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f0424ff2e530f%3A0x36529ba249766c8f!2sAl%20Malaz%2C%20Riyadh%20Saudi%20Arabia!5e0!3m2!1sen!2sin!4v1700831613151!5m2!1sen!2sin" width="590" height="413" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
	</div>       
    </div>
</div>



<?php
get_footer();