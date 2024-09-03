<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="Homebanner">
 <div class="bannerInner">
        <figure>
		<?php 
			if ( has_post_thumbnail() ) :
			$thumbnail_id = get_post_thumbnail_id( $post->ID );
			$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
			?>
		<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php echo $alt; ?>" class="w-100">
		<?php endif; ?>
		</figure>
        <div class="bntTx">
            <div class="container">
                <div class="innerbnrtx row">
                    <div class="innerbnrtxlt col-md-6">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="col-md-6 text-right">
                        <ul class="breadcrumb2">
                            <li><a href="<?php echo home_url(); ?>">Home</a></li>
                            <li>/</li>
                            <li><a href="javascript:;"><?php the_title(); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .nit-product-page{padding: 70px 0 calc(70px - 2rem);}
    .nit-product-page *{transition: .3s ease;}
    .nit-product-page .nit-product-box{}
    .nit-product-page .nit-category-box{border: 2px solid #bf3b32;}
    .nit-product-page .nit-category-box h3{margin-bottom: 0;padding: 15px 30px;;font-size: 24px;font-weight: 700;color: #bf3b32;}
    .nit-product-page .nit-category-box ul{background: #bf3b32;}
    .nit-product-page .nit-category-box ul li{border-bottom: 1px solid #fff;}
    .nit-product-page .nit-category-box ul li:last-child{border-bottom: 0;}
    .nit-product-page .nit-category-box ul li.active figcaption{    background: #df9d98;}
    .nit-product-page .nit-category-box ul li figure{margin-bottom: 0;overflow: hidden;}
    .nit-product-page .nit-category-box ul li:hover figcaption{padding-left: 20px;}
    .nit-product-page .nit-category-box ul li figure img{width: 100%;}
    .nit-product-page .nit-category-box ul li figcaption{background: #bf3b32;color: #fff;font-size: 16px;display: block;padding: 10px 15px;;font-size: 18px;}
    .nit-product-page .nit-product-list{}
    .nit-product-page .nit-product-list ul{display: flex;flex-wrap: wrap;}
    .nit-product-page .nit-product-list ul li{flex: 0 0 calc(33.33% - 2rem);margin:0 1rem 2rem;position: relative;border: 2px solid #bf3b32;}
    .nit-product-page .nit-product-list ul li figure{margin-bottom: 0;position: relative;overflow: hidden;}
    .nit-product-page .nit-product-list ul li:hover .nit-title{color: #fff;background: #bf3b32;}
    .nit-product-page .nit-product-list ul li:hover figcaption{top: 0;}
    .nit-product-page .nit-product-list ul li:hover img{transform: scale(1.1);}
    .nit-product-page .nit-product-list ul li figure img{width: 100%;height: 100%;transition: .3s ease;}
    .nit-product-page .nit-product-list ul li figcaption{position: absolute;top: -110%;left: 0;width: 100%;height: 100%;background: rgba(191,59,50,0.4);transition: .5s ease;display: flex;justify-content: center;align-items: center;;}
    .nit-product-page .nit-product-list ul li figcaption .tbtn:hover{background: #fff;color: #bf3b32;}
    .nit-product-page .nit-product-list ul li figcaption .tbtn{display: inline-block;background: #bf3b32;color: #fff;font-size: 16px;text-align: center;border-radius: 4px;border: 1px solid #bf3b32;padding: 10px 20px;font-weight: 600;}
    .nit-product-page .nit-product-list ul li .nit-title{margin-bottom: 0;display: block;background: #fff;color: #bf3b32;text-align: center;font-weight: 600;font-size: 20px;border-top: 2px solid #bf3b32;padding: 10px 5px;}
    
</style>

<section class="nit-product-page">
        <div class="container">
            <div class="nit-product-box">
                <div class="row">
                    <div class="col-md-4 col-lg-3">
                        <div class="nit-category-box">
                           <h3>Categories</h3>
							<ul>
								<?php 
								$ex = explode("/",$_SERVER['REQUEST_URI']);
								$terms = get_terms( array( 'taxonomy' => 'product-cat','parent'=> 0)  );
								foreach ($terms as $term ) {	?>
								<li class="abc <?php if($term->slug==$ex[4]){ echo 'active'; }?>"><a href="<?php echo get_home_url().'/product-cat/'.$term->slug; ?>"><figure><figcaption><?php echo $term->name; ?> </figcaption></figure></a></li>
								<?php } ?>
							</ul>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-9">
                        <div class="nit-product-list">

							<?php
								$main_term = get_queried_object();
								$categories = get_terms( array('taxonomy' => 'product-cat','parent'=> $main_term->term_id ) );
								if(!empty($categories)){
							?>

								<ul>
								<?php foreach($categories as $sc){ 
									
								?>
								
									<li>
										<a href="<?php echo get_home_url().'/product-cat/'.$sc->slug; ?>" class="nit-title"><figure>
										
										<img src="<?php the_field('category_image'); ?> ?>" alt="">
										</figure>
										<?php echo $sc->name; ?></a>
									</li>
								<?php } ?>
								</ul>
								
							<?php }else{ ?>
								<ul>
								<?php $args = array('product-cat'=> $main_term->slug,'post_type'=> 'our_products','orderby'=> 'ID','post_status' => 'publish','order'=> 'DESC','posts_per_page' => -1 );
										$result = new WP_Query( $args );
										if ( $result-> have_posts() ) :
											while ( $result->have_posts() ) : $result->the_post(); ?>
										<li>
											<figure>
											<img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
											<figcaption><a href="<?php echo get_permalink(); ?>" class="tbtn">View More</a></figcaption>
											</figure>
											<a href="<?php echo get_permalink(); ?>" class="nit-title"><?php the_title(); ?></a>
										</li>
								<?php endwhile; 
										endif; wp_reset_postdata();  ?>
								</ul>
							<?php } ?>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
<?php
get_footer();
