<?php
/** 
 * The theme footer.
 * 
 */
?>



    <div class="footerwrapper">   
   
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-topwrap">
                
                </div>
            </div>
            <div class="col-lg-3">
                <div class="flogo">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/max/wlogo.png" alt="max" decoding="async" loading="lazy">
					</div>
                <P>Max infotech is the part of FASAL group os companles – one of the leading Pioneers of information technology service in the saudi arabia.s</P>
				
<!-- 				social-media -->
				
				<div class="Social-media">
      <a href="" target="_blank"><font color="#fff"><i class="fab fa-facebook"></i></font></a>
      <a href="" target="_blank"><font color="#fff"><i class="fab fa-linkedin"></i></font></a>
      <a href="" target="_blank"><font color="#fff"><i class="fab fa-instagram"></i></font></a>
     
    </div>
				
            </div>
			  <div class="col-lg-3 quick">
                <h4>Quick Links</h4>
                <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_2' ) ); ?>
            </div>
			 <div class="col-lg-3 mt-md-5 addr-foot">
                <h4>Cotact Us</h4>
                <p>Gadeem Mukadarath Building,<br> Office 6, 1st Floor Malaz- P.O.Box:12851,<br> Riyadh 11323</p>
                <p><a href="mailto:info@amaxinfotech.com "><i class="far fa-envelope"></i> info@amaxinfotech.com 
</a></p>
                <p><a href="tel:+96629207699"><i class="fas fa-phone" style="transform: rotate(90deg);"></i>+966 2920 7699</a></p>
			
            </div>
            <div class="col-lg-3 mt-lg-0 mt-md-5">
                <h4>Our Services</h4>
              <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?>
            </div>
           
        </div>
        </div>

        <div class="footer-credit">
            <div class="container">
            <div class="row">
                <div class="col-lg-12"><p>Copyright &copy; <?php echo date("Y"); ?> Max. All rights reserved. Website Developed by <a href="https://tissertechnologies.com/" target="_blank">Tisser Technologies LLP</a></p></div>

            </div>
            </div>
        </div>
    </div>

            
        <?php wp_footer(); ?> 
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script>
  AOS.init();
</script>	

  <script>
    $(function () {
      $(document).scroll(function () {
        var $nav = $(".navbar-fixed-top");
        $nav.toggleClass('scrolled-inner', $(this).scrollTop() > $nav.height());
      });
    });
  </script>

    </body>
</html>
