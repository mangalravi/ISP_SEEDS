<?php 
/* Template Name: Vegetable */

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
    <section class="catagory-list pt-md-5" >
     <div class="container">
       <div class="prod-carddiv">
                <h4>Okra</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'okra'; // Replace with your subcategory slug

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
    'posts_per_page' => 20, // Number of products to display
    'orderby'        => 'date', // Order by date
    'order'          => 'DESC' // Descending order
);

$custom_query = new WP_Query($args);
$i = 1; 
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
                      <div class="prdbtm"><?php the_title(); ?>
                        <i class="bi bi-arrow-right" class="prdicn"></i>
                    </div>
                  
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
                            <div class="row g-md-4 g-3">
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
                                  <h4>Okra</h4>
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
                <h4>Tomato</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'tomato'; // Replace with your subcategory slug

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
$i = 11; 
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
                      <div class="prdbtm"><?php the_title(); ?>
                        <i class="bi bi-arrow-right" class="prdicn"></i>
                    </div>
                  
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
                            <div class="row g-md-4 g-3">
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
                                  <h4>Tomato</h4>
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
                <h4>Chilli</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'chilli'; // Replace with your subcategory slug

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
$i = 21; 
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
                      <div class="prdbtm"><?php the_title(); ?>
                        <i class="bi bi-arrow-right" class="prdicn"></i>
                    </div>
                  
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
                            <div class="row g-md-4 g-3">
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
                                  <h4>Chilli</h4>
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
                <h4>Capsicum</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'capsicum'; // Replace with your subcategory slug

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
$i = 31; 
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
                      <div class="prdbtm"><?php the_title(); ?>
                        <i class="bi bi-arrow-right" class="prdicn"></i>
                    </div>
                  
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
                            <div class="row g-md-4 g-3">
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
                                  <h4>Capsicum</h4>
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
                <h4>Brinjal</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'brinjal'; // Replace with your subcategory slug

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
$i = 41; 
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
                      <div class="prdbtm"><?php the_title(); ?>
                        <i class="bi bi-arrow-right" class="prdicn"></i>
                    </div>
                  
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
                            <div class="row g-md-4 g-3">
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
                                  <h4>Brinjal</h4>
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
                <h4>Cabbage</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'cabbage'; // Replace with your subcategory slug

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
$i = 51; 
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
                      <div class="prdbtm"><?php the_title(); ?>
                        <i class="bi bi-arrow-right" class="prdicn"></i>
                    </div>
                  
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
                            <div class="row g-md-4 g-3">
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
                                  <h4>Cabbage</h4>
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
                <h4>Cauliflower</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'cauliflower'; // Replace with your subcategory slug

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
$i = 61; 
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
                      <div class="prdbtm"><?php the_title(); ?>
                        <i class="bi bi-arrow-right" class="prdicn"></i>
                    </div>
                  
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
                            <div class="row g-md-4 g-3">
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
                                  <h4>Cauliflower</h4>
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
                <h4>Broccoli</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'broccoli'; // Replace with your subcategory slug

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
$i = 71; 
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
                      <div class="prdbtm"><?php the_title(); ?>
                        <i class="bi bi-arrow-right" class="prdicn"></i>
                    </div>
                  
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
                            <div class="row g-md-4 g-3">
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
                                  <h4>Broccoli</h4>
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
                <h4>Carrot</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'carrot'; // Replace with your subcategory slug

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
$i = 81; 
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
                      <div class="prdbtm"><?php the_title(); ?>
                        <i class="bi bi-arrow-right" class="prdicn"></i>
                    </div>
                  
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
                            <div class="row g-md-4 g-3">
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
                                  <h4>Carrot</h4>
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
                <h4>Radiish</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'radiish'; // Replace with your subcategory slug

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
$i = 91; 
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
                      <div class="prdbtm"><?php the_title(); ?>
                        <i class="bi bi-arrow-right" class="prdicn"></i>
                    </div>
                  
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
                            <div class="row g-md-4 g-3">
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
                                  <h4>Radiish</h4>
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
                <h4>Cowpea</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'cowpea'; // Replace with your subcategory slug

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
$i = 101; 
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
                      <div class="prdbtm"><?php the_title(); ?>
                        <i class="bi bi-arrow-right" class="prdicn"></i>
                    </div>
                  
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
                            <div class="row g-md-4 g-3">
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
                                  <h4>Cowpea</h4>
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
                <h4>Spanish</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'spanish'; // Replace with your subcategory slug

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
$i = 111; 
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
                      <div class="prdbtm"><?php the_title(); ?>
                        <i class="bi bi-arrow-right" class="prdicn"></i>
                    </div>
                  
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
                            <div class="row g-md-4 g-3">
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
                                  <h4>Spanish</h4>
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
                <h4>Marigold</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'marigold'; // Replace with your subcategory slug

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
$i = 121; 
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
                      <div class="prdbtm"><?php the_title(); ?>
                        <i class="bi bi-arrow-right" class="prdicn"></i>
                    </div>
                  
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
                            <div class="row g-md-4 g-3">
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
                                  <h4>Marigold</h4>
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
                <h4>Sponge Gourd</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'sponge-guard'; // Replace with your subcategory slug

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
$i = 131; 
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
                      <div class="prdbtm"><?php the_title(); ?>
                        <i class="bi bi-arrow-right" class="prdicn"></i>
                    </div>
                  
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
                            <div class="row g-md-4 g-3">
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
                                  <h4>Sponge Guard</h4>
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
                <h4>Ridge Gourd</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'ridged-gourd'; // Replace with your subcategory slug

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
$i = 141; 
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
                      <div class="prdbtm"><?php the_title(); ?>
                        <i class="bi bi-arrow-right" class="prdicn"></i>
                    </div>
                  
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
                            <div class="row g-md-4 g-3">
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
                                  <h4>Ridge Gourd</h4>
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
                <h4>Bottle Gourd</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'bottle-gourd'; // Replace with your subcategory slug

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
$i = 151; 
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
                      <div class="prdbtm"><?php the_title(); ?>
                        <i class="bi bi-arrow-right" class="prdicn"></i>
                    </div>
                  
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
                            <div class="row g-md-4 g-3">
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
                                  <h4>Bottle Gourd</h4>
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
                <h4>Bitter Gourd</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'bitter-gourd'; // Replace with your subcategory slug

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
$i = 161; 
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
                      <div class="prdbtm"><?php the_title(); ?>
                        <i class="bi bi-arrow-right" class="prdicn"></i>
                    </div>
                  
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
                            <div class="row g-md-4 g-3">
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
                                  <h4>Bitter Gourd</h4>
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
                <h4>Drumstick</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'drumstick'; // Replace with your subcategory slug

// Setup the custom query
$args = array(
    'post_type' => 'Our_products', // Replace with your custom post type
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
$i = 171; 
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
                      <div class="prdbtm"><?php the_title(); ?>
                        <i class="bi bi-arrow-right" class="prdicn"></i>
                    </div>
                  
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
                            <div class="row g-md-4 g-3">
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
                                  <h4>Drumstick</h4>
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
                <h4>Pumpkin</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'pumpkin'; // Replace with your subcategory slug

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
$i = 181; 
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
                      <div class="prdbtm"><?php the_title(); ?>
                        <i class="bi bi-arrow-right" class="prdicn"></i>
                    </div>
                  
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
                            <div class="row g-md-4 g-3">
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
                                  <h4>Pumpkin</h4>
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
                <h4>Cucumber</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'cucumber'; // Replace with your subcategory slug

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
$i = 191; 
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
                      <div class="prdbtm"><?php the_title(); ?>
                        <i class="bi bi-arrow-right" class="prdicn"></i>
                    </div>
                  
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
                            <div class="row g-md-4 g-3">
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
                                  <h4>Cucumber</h4>
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
                <h4>Beetroot</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'beetroot'; // Replace with your subcategory slug

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
$i = 201; 
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
                      <div class="prdbtm"><?php the_title(); ?>
                        <i class="bi bi-arrow-right" class="prdicn"></i>
                    </div>
                  
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
                            <div class="row g-md-4 g-3">
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
                                  <h4>Beetroot</h4>
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
                <h4>Cluster Bean</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'cluster-bean'; // Replace with your subcategory slug

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
$i = 211; 
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
                      <div class="prdbtm"><?php the_title(); ?>
                        <i class="bi bi-arrow-right" class="prdicn"></i>
                    </div>
                  
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
                            <div class="row g-md-4 g-3">
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
                                  <h4>Cluster Bean</h4>
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
                <h4>Watermelon</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'watermelon'; // Replace with your subcategory slug

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
$i = 221; 
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
                      <div class="prdbtm"><?php the_title(); ?>
                        <i class="bi bi-arrow-right" class="prdicn"></i>
                    </div>
                  
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
                            <div class="row g-md-4 g-3">
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
                                  <h4>Watermelon</h4>
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
                <h4>Muskmelon</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'muskmelon'; // Replace with your subcategory slug

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
$i = 231; 
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
                      <div class="prdbtm"><?php the_title(); ?>
                        <i class="bi bi-arrow-right" class="prdicn"></i>
                    </div>
                  
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
                            <div class="row g-md-4 g-3">
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
                                  <h4>Muskmelon</h4>
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
                <h4>Pea</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'pea'; // Replace with your subcategory slug

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
$i = 241; 
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
                      <div class="prdbtm"><?php the_title(); ?>
                        <i class="bi bi-arrow-right" class="prdicn"></i>
                    </div>
                  
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
                            <div class="row g-md-4 g-3">
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
                                  <h4>Pea</h4>
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
                <h4>Coriander Leaf</h4>
                <div class="row g-4">
                
                <?php
// Define your custom taxonomy and subcategory slug
$taxonomy = 'product-cat'; // Replace with your custom taxonomy
$subcategory_slug = 'coriander-leaf'; // Replace with your subcategory slug

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
$i = 251; 
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
                      <div class="prdbtm"><?php the_title(); ?>
                        <i class="bi bi-arrow-right" class="prdicn"></i>
                    </div>
                  
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
                            <div class="row g-md-4 g-3">
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
                                  <h4>Coriander Leaf</h4>
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