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

<section class="pt5069 pt135">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="proddtl">
              <div class="contactdiv">
              <h2 class="sec-head text-center"><?php the_title(); ?></h2>
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
              <?php echo $p->post_content;?>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   

<?php
get_footer();