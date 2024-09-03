<?php 
/* Template Name: Field Crop */
get_header();?>

<div class="mdlprod">
<div class="pt70">
    
      <section class="topprod-banner no-banner">
        <div class="blckbg">
        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="vegetables" />
        </div>
        <div class="rgtprod" data-aos-duration="1200" data-aos="fade-down">
                <h3 data-aos-duration="1500" data-aos="fade-down"><?php the_title(); ?></h3>
                <!-- <strong data-aos-duration="1800" data-aos="zoom-in"
                  >SEEDS
                </strong> -->
              </div>
      </section>
    </div>

    <section class="catagory-list pt-md-5">
     <div class="container">
           <div class="prod-carddiv">
                <h4>Maize</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'maize'; // Replace with your subcategory slug

// Setup the custom query
$args = array(
    'post_type' => 'our_products', // Replace with your custom post type
    'tax_query' => array(
        array(
            'taxonomy' => $taxonomy,
            'field'    => 'slug',
            'terms'    => $subcategory_slug,
        ),
    ),
    'posts_per_page' => 10, // Number of products to display
    'orderby'        => 'date', // Order by date
    'order'          => 'DESC' // Descending order
);

$custom_query = new WP_Query($args);
$i = 261; 
if ($custom_query->have_posts()) :
    while ($custom_query->have_posts()) : $custom_query->the_post();
   
    ?>
   
  <div class="col-6 col-md-4 col-lg-2 d-flex">
                    <a
                      href="#"
                      class="prodcard"
                      data-bs-toggle="modal"
                      data-bs-target="#prod<?php echo $i; ?>"
                    >
                      <img
                        src="<?php the_post_thumbnail_url('full'); ?>"
                        alt="okra-1"
                      />
                      <div class="prdbtm"><?php the_title(); ?></div>
                    </a>

                    <div class="modal fade" id="prod<?php echo $i; ?>" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                            ></button>
                          </div>
                          <div class="modal-body">
                            <div class="row  g-md-4">
                              <div class="col-md-6">
                                <div class="mdlimg">
                                  <img
                                    src="<?php the_post_thumbnail_url('full'); ?>"
                                    alt="okra-1"
                                  />
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="rgtmdl">
                                  <h4>Maize</h4>
                                  <p><?php the_title(); ?></p>
                                 <?php the_content(); ?>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
				  
                  <?php $i++; endwhile;
else : ?>
    <p>No products found in this subcategory.</p>
<?php
endif;

// Reset post data
wp_reset_postdata();
?>
                 
                </div>
              </div>
			  
			   <div class="prod-carddiv">
                <h4>Paddy</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'paddy'; // Replace with your subcategory slug

// Setup the custom query
$args = array(
    'post_type' => 'our_products', // Replace with your custom post type
    'tax_query' => array(
        array(
            'taxonomy' => $taxonomy,
            'field'    => 'slug',
            'terms'    => $subcategory_slug,
        ),
    ),
    'posts_per_page' => 30, // Number of products to display
    'orderby'        => 'date', // Order by date
    'order'          => 'DESC' // Descending order
);

$custom_query = new WP_Query($args);
$i = 271; 
if ($custom_query->have_posts()) :
    while ($custom_query->have_posts()) : $custom_query->the_post();
   
    ?>
   
  <div class="col-6 col-md-4 col-lg-2 d-flex">
                    <a
                      href="#"
                      class="prodcard"
                      data-bs-toggle="modal"
                      data-bs-target="#prod<?php echo $i; ?>"
                    >
                      <img
                        src="<?php the_post_thumbnail_url('full'); ?>"
                        alt="okra-1"
                      />
                      <div class="prdbtm"><?php the_title(); ?></div>
                    </a>

                    <div class="modal fade" id="prod<?php echo $i; ?>" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                            ></button>
                          </div>
                          <div class="modal-body">
                            <div class="row g-4">
                              <div class="col-md-6">
                                <div class="mdlimg">
                                  <img
                                    src="<?php the_post_thumbnail_url('full'); ?>"
                                    alt="okra-1"
                                  />
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="rgtmdl">
                                  <h4>Paddy</h4>
                                  <p><?php the_title(); ?></p>
                                 <?php the_content(); ?>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
				  
                  <?php $i++; endwhile;
else : ?>
    <p>No products found in this subcategory.</p>
<?php
endif;

// Reset post data
wp_reset_postdata();
?>
                 
                </div>
              </div>
              <div class="prod-carddiv">
                <h4>Wheat</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'wheat'; // Replace with your subcategory slug

// Setup the custom query
$args = array(
    'post_type' => 'our_products', // Replace with your custom post type
    'tax_query' => array(
        array(
            'taxonomy' => $taxonomy,
            'field'    => 'slug',
            'terms'    => $subcategory_slug,
        ),
    ),
    'posts_per_page' => 10, // Number of products to display
    'orderby'        => 'date', // Order by date
    'order'          => 'DESC' // Descending order
);

$custom_query = new WP_Query($args);
$i = 291; 
if ($custom_query->have_posts()) :
    while ($custom_query->have_posts()) : $custom_query->the_post();
   
    ?>
   
  <div class="col-6 col-md-4 col-lg-2 d-flex">
                    <a
                      href="#"
                      class="prodcard"
                      data-bs-toggle="modal"
                      data-bs-target="#prod<?php echo $i; ?>"
                    >
                      <img
                        src="<?php the_post_thumbnail_url('full'); ?>"
                        alt="okra-1"
                      />
                      <div class="prdbtm"><?php the_title(); ?></div>
                    </a>

                    <div class="modal fade" id="prod<?php echo $i; ?>" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                            ></button>
                          </div>
                          <div class="modal-body">
                            <div class="row g-4">
                              <div class="col-md-6">
                                <div class="mdlimg">
                                  <img
                                    src="<?php the_post_thumbnail_url('full'); ?>"
                                    alt="okra-1"
                                  />
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="rgtmdl">
                                  <h4>Wheat</h4>
                                  <p><?php the_title(); ?></p>
                                 <?php the_content(); ?>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
				  
                  <?php $i++; endwhile;
else : ?>
    <p>No products found in this subcategory.</p>
<?php
endif;

// Reset post data
wp_reset_postdata();
?>
                 
                </div>
              </div>
			  <div class="prod-carddiv">
                <h4>Millets </h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'millets'; // Replace with your subcategory slug

// Setup the custom query
$args = array(
    'post_type' => 'our_products', // Replace with your custom post type
    'tax_query' => array(
        array(
            'taxonomy' => $taxonomy,
            'field'    => 'slug',
            'terms'    => $subcategory_slug,
        ),
    ),
    'posts_per_page' => 10, // Number of products to display
    'orderby'        => 'date', // Order by date
    'order'          => 'DESC' // Descending order
);

$custom_query = new WP_Query($args);
$i = 301; 
if ($custom_query->have_posts()) :
    while ($custom_query->have_posts()) : $custom_query->the_post();
   
    ?>
   
  <div class="col-6 col-md-4 col-lg-2 d-flex">
                    <a
                      href="#"
                      class="prodcard"
                      data-bs-toggle="modal"
                      data-bs-target="#prod<?php echo $i; ?>"
                    >
                      <img
                        src="<?php the_post_thumbnail_url('full'); ?>"
                        alt="okra-1"
                      />
                      <div class="prdbtm"><?php the_title(); ?></div>
                    </a>

                    <div class="modal fade" id="prod<?php echo $i; ?>" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                            ></button>
                          </div>
                          <div class="modal-body">
                            <div class="row g-4">
                              <div class="col-md-6">
                                <div class="mdlimg">
                                  <img
                                    src="<?php the_post_thumbnail_url('full'); ?>"
                                    alt="okra-1"
                                  />
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="rgtmdl">
                                  <h4>Millets </h4>
                                  <p><?php the_title(); ?></p>
                                 <?php the_content(); ?>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
				  
                  <?php $i++; endwhile;
else : ?>
    <p>No products found in this subcategory.</p>
<?php
endif;

// Reset post data
wp_reset_postdata();
?>
                 
                </div>
              </div>
            
            
          
          </div>
</section>
</div>


<?php get_footer(); ?>