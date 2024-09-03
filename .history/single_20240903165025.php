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
              <h1 class="sec-head text-center"><?php the_title(); ?></h1>
				<?php global $wp_query; 
                  $p = get_page($wp_query->post->ID);
                  $image = wp_get_attachment_image_src( get_post_thumbnail_id($wp_query->post->ID), 'full' ); ?> 
                <img
                  src="https://stage.ispseeds.com/wp-content/uploads/2024/08/news-detail-1.jpg"
                  alt="news"
                  class="pb-0"
                  data-aos="fade-down"
                  data-aos-duration="2000"
                />
                <!-- <span class="blgdate"><?php //echo get_the_date('j M Y'); ?></span> -->
            
              <?php echo $p->post_content;?>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
    <section class="news">
      <div class="container">
      <h4 class="sec-head text-center">Agriculture News & Stories</h4>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home">
              <div class="newscard">
                <div class="row">
				<?php 
		$loop = new WP_Query(array('post_type' => 'post', 'posts_per_page' => -1, 'orderby'=> 'ASC')); 
	   $i=0;
		while ( $loop->have_posts() ) : $loop->the_post();		
	?>
                  <div class="col-md-3 mb-4 mb-md-0">
                    <a href="<?php echo get_permalink(); ?>" class="newscardmain" data-aos="fade-up"
        data-aos-duration="1500">
                      <img src="<?php the_post_thumbnail_url('full'); ?>" alt="news1">
                      <div class="pdng">
                      <h4><?php the_title(); ?></h4>
                      <!-- <p>ISP offers rewards and schemes for staple crops such as maize, rice, wheat, oil crops, millets, vegetables, and forage.</p> -->
                        </div>
                    </a>
                  </div>
                  <?php $i++; endwhile; wp_reset_query(); ?>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
get_footer();
