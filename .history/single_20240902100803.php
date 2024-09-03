<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<section class="pt5069 pb-0">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="proddtl">
              <div class="contactdiv">
                <div>
				<?php global $wp_query; 
                  $p = get_page($wp_query->post->ID);
                  $image = wp_get_attachment_image_src( get_post_thumbnail_id($wp_query->post->ID), 'full' ); ?> 
                <img
                  src="<?php the_field('blog_details_image'); ?>"
                  alt="news"
                  class="pb-0"
                  data-aos="fade-down"
                  data-aos-duration="2000"
                />
                <span class="blgdate"><?php echo get_the_date('j M Y'); ?></span>
              </div>
                <h2><?php the_title(); ?></h2>
				<?php echo $p->post_content;?>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="tag">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="mb30" data-aos="fade-in" data-aos-duration="2000">
        
                 </div>
            <!-- <div class="row g-4">
              <div class="col-md-6 d-flex">
                <div
                  class="cntnbtm"
                  data-aos="zoom-in"
                  data-aos-duration="2000"
                >
                  <h4>Corporate Office</h4>
                  <div class="btm">
                    <img
                      src="content/images/social-icon/map-pointer.svg"
                      alt="map"
                    />
                    <p>
                      Corp. Office: No. 12, DITPL, Doddaballapur- 561203
                      Bangalore, India
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex">
                <div
                  class="cntnbtm mb-4 mb-md-0"
                  data-aos="zoom-in"
                  data-aos-duration="2000"
                >
                  <h4>Register Office</h4>
                  <div class="btm">
                    <img
                      src="content/images/social-icon/map-pointer.svg"
                      alt="map"
                    />
                    <p>
                      Reg. Office: B-14 Sector 67, Gautam Buddha Nagar, NOIDA,
                      Uttar Pradesh, India, 201309
                    </p>
                  </div>
                </div>
              </div>
            </div> -->
         

        <!-- <form class="mb50 blgfrm">
          <h2>Leave a Comment</h2>
          <div class="chkgrp">
            <input type="checkbox" />
            <label
              >Save my name, email, and website in this browser for the next
              time I comment.</label
            >
          </div>
          <div class="row g-4">
            <div class="col-md-6">
              <div class="input-group">
                <input type="text" placeholder="Name" class="form-control" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-group mb-4">
                <input
                  type="text"
                  placeholder="Email Address "
                  class="form-control"
                />
              </div>
            </div>
          </div>
          <div class="input-group mb30">
            <textarea
              type="text"
              placeholder="Write a Message "
              class="form-control"
              rows="7"
            ></textarea>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <button class="btn btn-green">Send a Message</button>
            </div>
          </div>
        </form> -->
      </div>
    </section>

<?php
get_footer();
