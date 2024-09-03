<?php
/* Template Name: Crops */

get_header();?>


    <section class="bolg">
      <div class="container">
      <div class="row mb-4 align-items-center">
    <div class="col-sm-8">
      <div class="lngdv mb-3 mb-sm-0" data-aos="fade-down"
      data-aos-duration="1500">
   <span> Choose the Language :</span>
    <ul class="langul">
	<li class="lang-item lang-item-25 lang-item-hi current-lang lang-item-first"><a href="/hi-wikicrops"><span style="margin-left:0.3em;">हिन्दी</span></a></li>
	<li class="lang-item lang-item-28 lang-item-en no-translation active"><a href="/wikicrops"><span style="margin-left:0.3em;">English</span></a></li>
</ul>
</div>
    </div>
    <div class="col-sm-4">
    <div class="input-group" data-aos="fade-down"
    data-aos-duration="1500">
    <?php echo do_shortcode('[ivory-search id="1023" title="Custom Search Form"]'); ?>
                </div>
    </div>
</div>

        <div class="row cusrow g-4">
        <?php 
                  $loop = new WP_Query(array('post_type' => 'crop', 'posts_per_page' => -1, 'orderby'=> 'ASC')); 
                  $i=0;
                  while ( $loop->have_posts() ) : $loop->the_post();
                  
                  ?>





          <div class="col-6 col-md-4 col-lg-2 d-flex">
          <div class="card blog rounded border-0  overflow-hidden w-100" data-aos="fade-up"
          data-aos-duration="1500">
              <a href="<?php echo get_permalink(); ?>" class="blog-img position-relative mb-3 shd">
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="prod" />
               </a>
               <a href="<?php echo get_permalink(); ?>" class="prdbtm"><?php the_title(); ?>
                </a>
         
          </div>
          </div>
<?php $i++; endwhile; wp_reset_query(); ?>



      
        </div>
      </div>
    </section>

<?php get_footer(); ?>