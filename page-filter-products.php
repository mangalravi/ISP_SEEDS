<?php
/*
Template Name: Filter Products Page
*/
get_header();
?>
<section class="privacy-policy">
<div class="container">
<div class="product-filter-form">
    <form method="get" action="">
        <label for="category">Select Category:</label>
        <select name="category" id="category" onchange="this.form.submit()">
            <option value="">Select Category</option>
            <?php
            $categories = get_terms(array(
                'taxonomy'   => 'product-cat',
                'parent'     => 0,
                'hide_empty' => false,
            ));

            foreach ($categories as $category) {
                $selected = (isset($_GET['category']) && $_GET['category'] == $category->term_id) ? 'selected' : '';
                echo "<option value='{$category->term_id}' {$selected}>{$category->name}</option>";
            }
            ?>
        </select>

        <?php if (isset($_GET['category']) && !empty($_GET['category'])): ?>
            <label for="subcategory">Select Subcategory:</label>
            <select name="subcategory" id="subcategory" onchange="this.form.submit()">
                <option value="">Select Subcategory</option>
                <?php
                $subcategories = get_terms(array(
                    'taxonomy'   => 'product-cat',
                    'parent'     => $_GET['category'],
                    'hide_empty' => false,
                ));

                foreach ($subcategories as $subcategory) {
                    $selected = (isset($_GET['subcategory']) && $_GET['subcategory'] == $subcategory->term_id) ? 'selected' : '';
                    echo "<option value='{$subcategory->term_id}' {$selected}>{$subcategory->name}</option>";
                }
                ?>
            </select>
        <?php endif; ?>
    </form>
</div>

<div class="filtered-products">
    <?php
    if (isset($_GET['subcategory']) && !empty($_GET['subcategory'])) {
        $args = array(
            'post_type'      => 'our_products',
            'posts_per_page' => -1,
            'tax_query'      => array(
                array(
                    'taxonomy' => 'product-cat',
                    'field'    => 'term_id',
                    'terms'    => $_GET['subcategory'],
                ),
            ),
        );

        $query = new WP_Query($args);
        $i = 1; 
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
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
                <?php
            }
            wp_reset_postdata();
        } else {
            echo '<p>No products found in this subcategory.</p>';
        }
    } else {
        echo '<p>Please select a category and subcategory to view products.</p>';
    }
    ?>
</div>
</div>
</select>

<?php
get_footer();
?>
