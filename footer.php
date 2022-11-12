<?php wp_footer();?>

    <!-- Copyright Section Start -->
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-3 col-xs-12">
            <div class="footer-logo">
              <img src="<?php get_theme_mod('footer_img'); ?>" alt="">
            </div>
          </div>





       <?php   $settings = get_theme_mod( 'footer_repeater1');

	 foreach ( $settings as $footer1 ) { ?>
	


          <div class="col-lg-4 col-md-4 col-xs-12">     
            <div class="social-icon text-center">
              <a class="facebook" href="<?php $footer1['media_link']; ?>"><i class="<?php $footer1['media_name']; ?>"></i></a>

           <?php } ?>
            </div>
          </div>

          <?php   $settings = get_theme_mod( 'footer_repeater2');

foreach ( $settings as $footer2 ) { ?>

          <div class="col-lg-4 col-md-5 col-xs-12">
            <p class="float-right"><?php $footer2['copyright_text']; ?><a href="<?php $footer2['copyright_link']; ?>" rel="nofollow"><?php $footer2['copyright_name']; ?></a></p>
          </div> 
<?php } ?>


        </div>
      </div>
    </div>
    <!-- Copyright Section End -->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    	<i class="lni-arrow-up"></i>
    </a>
    
   
   
     <!-- Preloader -->
     <!--div id="preloader">
      <div class="loader" id="loader-1"></div>
    </!--div>
    <!-- End Preloader -->
    
  </body>
</html>
