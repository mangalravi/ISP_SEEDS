<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>

<footer>
      <div class="container">
      <div class="bdrbtm">
        <div class="row justify-content-between">
          <div class="col-lg-6 mb-4 mb-lg-0">
          <h3 class="text-center text-md-start">Reach out to the fastest growing organisation in the agricultural market.</h3>
          </div>
          <div class="col-lg-6">
            <div class="btngrp">
              <a href="<?php echo home_url('contact-us'); ?>" class="btn btn-green">Contact Us <i class="bi bi-arrow-right"></i></a>
              <a href="<?php echo home_url('become-our-partner'); ?>" class="btn btn-outline-green">Become a Partner <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        
        </div>
      </div>
      <div class="bdrbtm">
        <div class="row g-3">
          <div class="col-md-4">
            <div class="leftftr">
              <h5>Inventive Seeds Pvt. Ltd.</h5>
              <div class="btmftr">
                <div class="mnbtm">
                  <img src="<?php echo get_template_directory_uri(); ?>/content/images/map-pointer.svg" alt="map">
                  <div>
                    <p>Corp. Office: No. 12, DITPL, Doddaballapur- 561203 Bangalore, India</p>
                    <p>Reg. Office: B-14 Sector 67, Gautam Buddha Nagar, NOIDA, Uttar Pradesh, India, 201309</p>
                  </div>
                </div>
                <div class="mnbtm">
                  <img src="<?php echo get_template_directory_uri(); ?>/content/images/email.svg" alt="email">
                  <a href="mailto:marketing@ispseeds.com">marketing@ispseeds.com</a>
                </div>
                <div class="mnbtm">
                  <img src="<?php echo get_template_directory_uri(); ?>/content/images/mobile.svg" alt="mobile">
                  <a href="tel:9731000128" class="mb-0">+91 97310 00128</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-1"></div>
          <div class="col-md-7">
            <div class="row g-3">
              <div class="col-6 col-md-4">
                <div class="ftrhdr">Quick Links</div>
                <ul>
                  <li><a href="/">Home</a></li>
                  <li><a href="<?php echo home_url('about-us'); ?>">About</a></li>
                  <li><a href="/pdf/Company_Profile_ISPSeeds.pdf" target="_blank">Company Profile</a></li>
                  <li><a href="/research">Research</a></li>
                  <!-- <li><a href="/products">Products</a></li> -->
                  <li><a href="http://career.ispseeds.com/" target="_blank">Careers</a></li>
                  <li><a href="<?php echo home_url('contact-us'); ?>">Contact Us</a></li>
                  <li><a href="<?php echo home_url('become-our-partner'); ?>">Become Our Partner</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-4">
              <div class="ftrhdr">Products</div>
                <ul>
                  <li><a href="<?php echo home_url('vegetables'); ?>">Vegetable Seeds</a></li>
                  <li><a href="/field-crop">Field Crop Seeds</a></li>
                  <li><a href="/oil-crops">Oil Crops Seeds</a></li>
                  <li><a href="/fodder-crops">Fodder Crops Seeds</a></li>
                  <li><a href="/organic-fertilizer-pesticide">Organic Fertilizer/Pesticide</a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="bdrsm"></div>
                <div class="ftrhdr text-center text-md-start">Connect with us</div>
                <div class="d-flex justify-content-md-between align-items-center">
               <ul class="socialimg justify-content-center justify-content-md-between">
               <li>  <a href="https://www.facebook.com/ispseeds" target="_blank">
                            <img
                              src="<?php echo get_template_directory_uri(); ?>/content/images/social-icon/facebook.svg"
                              alt="facebook"
                            />
                          </a>
                        </li>
                <li>  <a href="https://www.linkedin.com/company/ispseeds" target="_blank">
                            <img
                              src="<?php echo get_template_directory_uri(); ?>/content/images/social-icon/linkedin.svg"
                              alt="linkedin"
                            />
                          </a>
                        </li>
                    <li> <a href="https://www.instagram.com/inventive_seeds/" target="_blank">
                            <img
                              src="<?php echo get_template_directory_uri(); ?>/content/images/social-icon/instagram.svg"
                              alt="instagram"
                            />
                          </a>
                        </li>
                <li> <a href="https://twitter.com/ispseeds" target="_blank">
                            <img
                              src="<?php echo get_template_directory_uri(); ?>/content/images/social-icon/x.svg"
                              alt="x"
                            />
                          </a>
                        </li>
                <li>  <a href="https://youtu.be/O0SFuBlacGk" target="_blank">
                            <img
                              src="<?php echo get_template_directory_uri(); ?>/content/images/social-icon/youtube.svg"
                              alt="youtube"
                            />
                          </a>
                        </li>
               </ul>
                </div>
                <div class="ftrhdr text-center text-md-start">Download ISP Saathi App</div>
                <div class="d-flex justify-content-center justify-content-md-between align-items-center">
                <a href="https://play.google.com/store/apps/details?id=com.inventia.ispbuddy" target="_blank">  <img src="<?php echo get_template_directory_uri(); ?>/content/images/google-store.png" alt="google-store"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-between align-items-center flex-column flex-sm-row g2">
        <div class="leftbtm">
          <p>© 2024 Inventive Seeds Private Ltd.</p>
          <p class="mb-0">Developed by: <a href="https://www.inventia.in" target="_blank"> Inventia</a></p>
        </div>
        <div class="rightbtm">
          <ul>
            <li><a href="/privacy-policy">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
      </div>
    </footer>

    <!-- Scripts -->
    <script src="<?php echo get_template_directory_uri(); ?>/content/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/content/lib/owl/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/content/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/content/lib/aos/js/aos.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/content/js/custom.js"></script>		

<?php wp_footer(); ?>

</body>
</html>
