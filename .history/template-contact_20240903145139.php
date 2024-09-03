<?php 
/* Template Name: Contact */

get_header(); ?>


<section class="contactus pt5069">
      <h4 class="sec-head text-center mb50">Get In Touch</h4>
      <div
        class="grnbg position-relative"
        style="
          background: var(--bs-secondary)
            url(content/images/leaf-150-superior.svg) no-repeat;
        "
      >
        <div class="container">
          <div class="bggrnleaf">
            <div class="row g-0">
              <div class="col-lg-5">
              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7005.601138351921!2d77.38057880000001!3d28.605759099999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1724649585545!5m2!1sen!2sin" 
                  height="100%"
                  width="100%"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                  ></iframe> -->
              </div>
              <div class="col-lg-7">
                <div
                  class="rgtcontact"
                  style="background: url(<?php echo get_template_directory_uri(); ?>/content/images/bg-crops.svg) no-repeat"
                >
                  <h2>Inventive Seeds Private Ltd.</h2>
                  <p>Write a Message</p>
                 <?php echo do_shortcode('[contact-form-7 id="9c6b12c" title="Contact Us"]'); ?>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
<?php get_footer(); ?>