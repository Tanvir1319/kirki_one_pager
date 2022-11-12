<?php get_header(); ?>


      
      <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg" style="background-image:url('<?php echo get_theme_mod('banner_section'); ?>')" >
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="contents text-center">
                <h2 class="head-title wow fadeInUp"><?php echo get_theme_mod('banner_text'); ?></h2>
                <div class="header-button wow fadeInUp" data-wow-delay="0.3s"><a href="<?php echo get_theme_mod('banner_url') ?>"
        banner_text="#services" class="btn btn-common"><?php echo get_theme_mod('button_text');?></a>
                </div>
              </div>
              <div class="img-thumb text-center wow fadeInUp" data-wow-delay="0.6s">
                <img class="img-fluid" src="<?php echo get_theme_mod('banner_img');?>" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Area End -->

    </header>
    <!-- Header Area wrapper End -->

   <!-- Feature Section Start -->
   <div id="feature">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="text-wrapper">
              <div>
                <h2 class="title-hl wow fadeInLeft" data-wow-delay="0.3s"><?php echo get_theme_mod('aboutus_heading'); ?>
                <p class="mb-4"><?php echo get_theme_mod('aboutus_description'); ?></p>
                <a href="<?php echo get_theme_mod('aboutsectionbutton_url'); ?>" class="btn btn-common"><?php echo get_theme_mod('aboutsection_button'); ?></a>
              </div>
            </div>
          </div>


          <div class="col-lg-6 padding-none feature-bg">
            <div class="feature-thumb">










            <?php 
            $settings = get_theme_mod( 'about_repeater'); 
            

	


   foreach ( $settings as $feature ){ ?>


              <div class="feature-item wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="700ms">
                <div class="icon">
                  <i class="<?php echo $feature['service_icon'];?>"></i>
                  
                </div>
                <div class="feature-content">
                  <h3><?php echo $feature['service_title']; ?></h3>
                 </p> <?php echo $feature['service_description']; ?></p>
                </div>



              </div>



              <?php } ?>


            </div>
          </div>
        </div>


      </div>
    </div>
    <!-- Feature Section End -->

  <?php if(get_theme_mod('switch_service',true)==true) {?>
  
    <!-- Services Section Start -->

   

    <section id="services" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod('service_heading'); ?></h2>
          <p><?php echo get_theme_mod('service_description'); ?></p>
        </div>
        <div class="row">








	<?php
  $settings = get_theme_mod( 'service_repeater');
  foreach ( $settings as $service ){?>
	
		


   



          <!-- Services item -->
          <div class="<?php echo get_theme_mod('service_alignment_num'); ?>">
            <div class="services-item wow fadeInRight" data-wow-delay="1.8s">
              <div class="icon">
                <i class="<?php echo $service['service_icon']; ?>"></i>
              </div>
              <div class="services-content">
                <h3><a href="#"><?php echo $service['service_heading_text']; ?></a></h3>
                <p><?php echo $service['service_description_text']; ?></p>
              </div>
            </div>
          </div>
<?php } ?>

        </div>
      </div>
    </section>

    
    <!-- Services Section End -->
<?php } ?>


<?php if('get_theme_mod'('switch_video',true)==true )   { ?>
    <!-- Start Video promo Section -->
    <section class="video-promo section-padding">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="video-promo-content text-center wow fadeInUp" data-wow-delay="0.3s">
              <a href="<?php echo get_theme_mod('video_url'); ?>" class="video-popup"><i class="<?php get_theme_mod('video_icons'); ?>"></i></a>
              <h2 class="mt-3 wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms"><?php echo get_theme_mod('video_name'); ?></h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Video Promo Section -->

    <?php } ?>



<?php if( get_theme_mod('switch_team_section',true)==true){ ?>

    <!-- Team Section Start -->
    <section id="team" class="section-padding text-center">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod('team_heading'); ?></h2>
          <p><?php echo get_theme_mod('team_description'); ?></p>
        </div>
        <div class="row">




          <div class="col-sm-6 col-md-6 col-lg-3">
           
          
          
          <?php    $settings = get_theme_mod( 'team_repeater' );



 foreach ( $settings as $team ) { 
  
  ?>
	
  

          <div class="col-sm-6 col-md-6 col-lg-3">
         <!-- Team Item Starts -->
         <div class="team-item text-center wow fadeInRight" data-wow-delay="1.2s">
              <div class="team-img">
                <img class="img-fluid" src="<?php echo wp_get_attachment_url($team['testi_img']); ?>" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">Marijn Otte</a></h3>
                <p>Front-end Developer</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          
        </div>
      </div>
    </section>
    <!-- Team Section End -->   <!-- Team Item Starts -->
            <div class="team-item text-center wow fadeInRight" data-wow-delay="1.2s">
              <div class="team-img">

<?php  
  $img_url=wp_get_attachment_image_src($team['team_img']);   ?>


                <img class="img-fluid" src="<?php echo ($img_url[0]);?>" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="<?php $team['team_fb']; ?>"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="<?php $team['team_twitter']; ?>"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="<?php $team['team_insta']; ?>"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#"><?php $team['team_name']; ?></a></h3>
                <p><?php $team['team_designation']; ?></p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
    <!-- Team Section End -->


    <?php }?>



    <?php if (get_theme_mod('switch_counter_section',true)==true){ ?>

    <!-- Counter Section Start -->
    <section id="counter" class="section-padding">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="row">



            
           <?php $settings = get_theme_mod( 'counter_repeater' );


	 foreach ( $settings as $counter )  { ?>
		
    



           <!-- Start counter -->
           <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="counter-box <?php echo $counter['counter_animation']; ?>" data-wow-delay="<?php echo $counter['counter_duration']; ?>">
                  <div class="icon-o"><i class="<?php echo $counter['counter_icon']; ?>"></i></div>
                  <div class="fact-count">
                    <h3><span class="counter"><?php echo $counter['counter_number']; ?></span></h3>
                    <p><?php echo $counter['counter_text']; ?></p>
                  </div>
                </div>
              </div>
              <!-- End counter -->

              <?php } ?>
              <!-- End counter -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Counter Section End -->




      <?php } ?>



      <?php if(get_theme_mod('price_section',true)==true){ ?>
    <!-- Pricing section Start --> 
    <section id="pricing" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod('Price_heading'); ?></h2>
          <p><?php echo get_theme_mod('price_description'); ?></p>
        </div>

        <div class="row">



         
       <?php $settings = get_theme_mod( 'price_repeater', $defaults );

	 foreach ( $settings as $price ) { ?>
		


          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="table wow fadeInRight" data-wow-delay="1.2s">
              <div class="title">
                <h3><?php echo $price['price_text']; ?></h3>
              </div>
               <div class="pricing-header">
                  <p class="price-value">$<?php echo $price['price_amount']; ?><span><?php echo $price['price_duration']; ?></span></p>
               </div>
              <ul class="description">
                <li><?php echo $price['price_feature1']; ?></li>
                <li><?php echo $price['price_feature2']; ?></li>
                <li><?php echo $price['price_feature3']; ?></li>
                <li><?php echo $price['price_feature4']; ?></li>
                <li><?php echo $price['price_feature5']; ?></li>
                <li><?php echo $price['price_feature6']; ?></li>
              </ul>
              <button class="btn btn-common"><a href="<?php echo $price['price_btn_link']; ?>" ></a><?php echo $price['price_button']; ?></button>
              <?php } ?>
            </div> 
          </div>
        </div>
      </div>
    </section>
    <!-- Pricing Table Section End -->

    <?php } ?>



    

    <?php if(get_theme_mod('switch_skill_section',true)==true){ ?>
    <div class="skill-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
            <img class="img-fluid" src="<?php echo get_theme_mod('skill_image') ?>" alt="" >
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12 info wow fadeInRight" data-wow-delay="0.3s">
            <div class="site-heading">
              <h2 class="section-title"><?php  get_theme_mod('skill_heading'); ?></h2>
              <?php  get_theme_mod('Skill_description'); ?>
            </div>



            <div class="skills-section">
              <!-- Progress Bar Start -->
           



            <?php  $settings = get_theme_mod( 'skill_repeater');



	 foreach ( $settings as $skill ){?>
		



              <div class="progress-box">
                <h5><?php echo $skill['skill_text']; ?> <span class="pull-right"><?php echo $skill['skill_percent']; ?></span></h5>
                <div class="progress" style="opacity: 1; left: 0px;">
                  <div class="progress-bar" role="progressbar" data-width="52" style="width: 52%;"></div>
                </div>
              </div>
              <!-- End Progressbar -->
            </div>

            <?php }?>
          </div>
        </div>
      </div>
    </div>

    <?php } ?>

    <?php if(get_theme_mod('switch_work_section',true)==true ){ ?>
    
    <!-- Portfolio Section -->
    <section id="portfolios" class="section-padding">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod('work_heading'); ?></h2>
          <p><?php echo get_theme_mod('work_description'); ?></p>
        </div>

        <!-- Portfolio Recent Projects -->
        <div id="portfolio" class="row">

          


      <?php   $settings = get_theme_mod( 'work_repeater');

	 foreach ( $settings as $work ) { ?>
		
		


          <div class="col-lg-4 col-md-6 col-xs-12 mix print design">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="<?php echo wp_get_attachment_url($work['work_img']); ?>" alt="" />  
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="<?php echo $work['work_icon']; ?>">
                        <a class="lightbox" href="assets/img/portfolio/img-6.jpg"><i class="lni-eye item-icon"></i></a>
                      </div>
                      <a href="#"><?php  echo $work['work_text']; ?></a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>


<?php } ?>



        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends --> 

    <?php } ?>
  


    <?php if(get_theme_mod('switch_testimonial_section',true)==true){ ?>
    <!-- Testimonial Section Start -->
    <section id="testimonial" class="testimonial section-padding">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">
             












               <?php   $settings = get_theme_mod( 'testimonial_repeater' );

	 foreach ( $settings as $testi ) { ?>
	

  <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                    
                  <?php
                      $img_url = wp_get_attachment_image_src($testi['testimonial_item_image']);
                    ?>  
                  
                  
                  <img src="<?php echo $img_url[0];; ?>" alt="">
                   
                  </div>

                  <div class="info">
                    <h2><a href="#"><?php echo $testi['testi_name']; ?></a></h2>
                    <h3><a href="#"><?php echo $testi['testi_des']; ?></a></h3>
                  </div>
                  <div class="content">
                    <p class="description"><?php echo $testi['testi_comment']; ?></p>
                  </div>
                </div>
              </div>
             




  <?php } ?>          




            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial Section End -->  
   <?php } ?>
    <!-- Blog Section -->
    <section id="blog" class="section-padding">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod('skill_heading'); ?></h2>
          <p><?php echo get_theme_mod('blog_description'); ?></p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper wow fadeInLeft" data-wow-delay="0.3s">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="assets/img/blog/img1.jpg" alt="">
                </a>                
              </div>
              <div class="blog-item-text"> 
                <h3>
                <a href="single-post.html">Suspendisse dictum non velit</a>
                </h3>
                <p>
                Nunc in mauris a ante rhoncus tristique vitae et nisl. Quisque ullamcorper rutrum lacinia. Integer varius ornare egestas. 
                </p>
                <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper wow fadeInUp" data-wow-delay="0.6s">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="assets/img/blog/img2.jpg" alt="">
                </a>                
              </div>
              <div class="blog-item-text"> 
                <h3>
                <a href="single-post.html">Remarkably Did Increasing</a>
                </h3>
                <p>
                Nunc in mauris a ante rhoncus tristique vitae et nisl. Quisque ullamcorper rutrum lacinia. Integer varius ornare egestas. 
                </p>
                <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper wow fadeInRight" data-wow-delay="0.3s">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="assets/img/blog/img3.jpg" alt="">
                </a>                
              </div>
              <div class="blog-item-text"> 
                <h3>
                  <a href="single-post.html">Changing the topic scope</a>
                </h3>
                <p>
                Nunc in mauris a ante rhoncus tristique vitae et nisl. Quisque ullamcorper rutrum lacinia. Integer varius ornare egestas. 
                </p>
                <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>
        </div>
      </div>
    </section>
    <!-- blog Section End -->




    <!-- Clients Section Start -->
    <div id="clients" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod('noteable_heading'); ?></h2>
          <p><?php echo get_theme_mod('note_description'); ?></p>
        </div>
        <div class="row text-align-">


          

    <?php    $settings = get_theme_mod( 'note_repeater');


foreach ( $settings as $note ) { ?>
		<a href="<?php $setting['link_url']; ?>">
			<?php $setting['link_text']; ?>
		</a>
	



          <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.9s">
            <div class="client-item-wrapper">
              <img class="img-fluid" src="assets/img/clients/img3.png" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="1.2s">
            <div class="client-item-wrapper">
              <img class="img-fluid"  src="assets/img/clients/img4.png" alt="">
            </div>
          </div>

          <?php } ?>
        </div>
      </div>
    </div>
    <!-- Clients Section End -->











    <!-- Contact Section Start -->
    <section id="contact" class="section-padding">    
      <div class="container">
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">          
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="contact-block">
              <form id="contactForm">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                      <div class="help-block with-errors"></div>
                    </div>                                 
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" placeholder="Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                      <div class="help-block with-errors"></div>
                    </div> 
                  </div>
                   <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                      <textarea class="form-control" id="message" placeholder="Your Message" rows="5" data-error="Write your message" required></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="submit-button">
                      <button class="btn btn-common" id="form-submit" type="submit">Send Message</button>
                      <div id="msgSubmit" class="h3 text-center hidden"></div> 
                      <div class="clearfix"></div> 
                    </div>
                  </div>
                </div>            
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="contact-right-area wow fadeIn">
              <div class="contact-title">
                <h1><?php echo get_theme_mod('contact_heading'); ?></h1>
                <p><?php echo get_theme_mod('contact_description'); ?></p>
              </div>
              <h2><?php echo get_theme_mod('contact_subheading'); ?></h2>







              <div class="contact-right">


        <?php      $settings = get_theme_mod( 'contact_repeater' );



	 foreach ( $settings as $contact ){ ?>
		
              





                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="<?php $contact['contact_icon']; ?>"></i>
                  </div>
                  <p><a href="#"><?php $contact['contact_des']; ?></a></p>
                </div>

                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </section>
    <!-- Contact Section End -->
    <?php get_footer(); ?>