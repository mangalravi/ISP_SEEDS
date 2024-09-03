<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<section class="top-banner pt123">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-1 order-md-0">
            <div class="tpbg">
              <div>
              <h1 data-aos="fade-in"
              data-aos-duration="1500">Technology for higher yield and sustainable farming</h1>
              <p data-aos="fade-up"
              data-aos-duration="1500">
              Inventive Seeds Private Limited, is an Indian Seed Company involved in Research, Production & Marketing of hybrid vegetable crops, field crops, oil and fodder crops.
              </p>
</div>
              <div class="row justify-content-center justify-content-md-start">
                <div class="col-md-6 col-xl-4">
                  <a href="<?php echo home_url('about-us'); ?>" class="btn btn-green" data-aos="fade-up"
              data-aos-duration="1500"
                    >View More <i class="bi bi-arrow-right"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="research ">
      <div class="container">
        <div class="row">
        <div class="col-md-5 position-relative   order-1 order-md-0">
            <div class="lftcntnt">
          <img src="<?php echo get_template_directory_uri(); ?>/content/images/reasearch.jpg" alt="reasearch" data-aos="fade-in"
            data-aos-duration="1500"/>
            </div>
          </div>
          <div class="col-md-7 order-0 order-md-1 mb-4 mb-md-0">
            <div class="ms60">
            <h4 class="sec-head" data-aos="fade-up"
                data-aos-duration="1200">Research & Development</h4>
            <p class="mb05mob" data-aos="fade-up"
                data-aos-duration="1500">
            The ISP has an advanced research and development unit situated in Rajankunte, Bangalore, spanning over ten acres of land. This R&D infrastructure includes well-equipped greenhouses and polyhouses, designed to develop, test, and trial products such as mini cucumbers, sweet peppers, and tomatoes. The entire facility operates under a drip irrigation system and is connected to a fertigation system.
             </p>
            <p class="mb37" data-aos="fade-up"
                data-aos-duration="1800">
            To identify the most suitable product for each specific agro-c limatic zone in India, new product evaluation trials are conducted continuously. This ensures that farmers receive the best-suited varieties for their local conditions.
             </p>
             <div class="row justify-content-center justify-content-md-start mb-2 mb-md-0">
                <div class="col-6 col-xl-4">
                <a href="<?php echo home_url('research'); ?>" class="btn btn-green" data-aos="fade-up"
                data-aos-duration="1500"
                  >View More <i class="bi bi-arrow-right"></i
                ></a>
              </div>
            </div>
          </div>
          </div>
          
        </div>
      </div>
    </section>
    <section class="passion" style="background-image:url(<?php echo get_template_directory_uri(); ?>/content/images/technologies.jpg)">
      <div class="d-flex justify-content-center">
      <img src="<?php echo get_template_directory_uri(); ?>/content/images/technologies-mobile.jpg" alt="" class="d-block d-md-none">
      </div>
      <div class="container">
        <div class="row">
                  <div class="col-md-6">
           <div class="ptmd50 me60">
            <h4 class="sec-head" data-aos="fade-up"
            data-aos-duration="1500">
              Driven by passion and commitment, we excel in different types of
              seeds, bio-fertilizers, bio-pesticides and plant growth promoters.
            </h4>
            <p data-aos="fade-up" class="mb0mob"
            data-aos-duration="1800">
              Our extensive collection includes top-performing hybrid & open
              pollinated vegetable seed varieties, hybrid field crops and oil
              crops. Our innovative technologies guarantee excellent outcomes in
              any growing environment.
            </p>
          </div>
          </div>
        </div>
      </div>
    </section>
    <section class="superior">
      <div class="grnbg">
        <div class="container">
          <div class="row justify-content-center text-center">
          <div class="col-lg-9">
              <h4 class="sec-head" data-aos="fade-up"
              data-aos-duration="1500">
                150+ Superior varieties include hybrid, open pollinated (OP) &
                research.
              </h4>
              <p data-aos="fade-up"
              data-aos-duration="2000" >
                Staple crops such as maize, rice, wheat, oil crops, millets,
                vegetables, etc., and forage.
              </p>
              <div class="posrel" >
              <div class="position-relative">
                    <img
                    src="<?php echo get_template_directory_uri(); ?>/content/images/image-150-superior.png"
                    alt="superior"
                  />
                  <div class="rgtbox">
                    <h5>Superior Varieties Include Hybrid, 
                      OP & Research</h5>
                      <p class="mb05mob">Our selection features superior varieties that include hybrid, OP and research. These varieties are carefully cultivated to offer the best performance in terms of yield, resilience, and adaptability to different growing conditions.</p>
                      <p class="mb-2 mb-md-3">By offering different options, we ensure a diverse range of choices for farmers and gardeners. Hybrids often provide vigorous growth and disease resistance, while OP maintain their own genetic traits across generations. This combination allows us to meet the unique needs of our customers effectively.</p>
                      <!-- <a href="<?php echo home_url('products'); ?>">Check out our amazing seeds ! <i class="bi bi-arrow-right ms-2"></i></a> -->
                 
                </div>
              </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
    <section class="catagory btmpdng" style="background: url(<?php echo get_template_directory_uri(); ?>/content/images/bg-crops.svg) no-repeat;" data-aos="fade-up"
    data-aos-duration="1500">
    <div class="container">
<h4 class="sec-head text-center mb50">Product Categories</h4>
</div>
      <div class="owl-carousel loop">
        <a href="/vegetables" class="maindiv">
          <div class="mnimg"> 
          <img src="<?php echo get_template_directory_uri(); ?>/content/images/vegetables.jpg" alt="vegetables">
          <span>Vegetable Crops</span>
          </div>
          <div class="mncntnt">
                 <img src="<?php echo get_template_directory_uri(); ?>/content/images/vegetables.svg" alt="field-crop-seeds">
            <h6>Vegetable Crops</h6>
            <p>offering a range of flavors, textures, and nutritional benefits.</p>
            <span>Check out more...</span>
          </div>
        </a>
        <a href="/field-crop" class="maindiv">
          <div class="mnimg"> 
          <img src="<?php echo get_template_directory_uri(); ?>/content/images/feilcropint.jpg" alt="field-crop-seeds">
            <span>Field Crops </span>
          </div>
          <div class="mncntnt">
            <img src="<?php echo get_template_directory_uri(); ?>/content/images/field-crop-seeds.svg" alt="field-crop-seeds">
            <h6>Field Crops</h6>
            <p>Essential for global food security and agricultural economies.</p>
            <span>Check out more...</span>
          </div>
        </a>
        <a href="/oil-crops" class="maindiv">
          <div class="mnimg"> 
            <img src="<?php echo get_template_directory_uri(); ?>/content/images/oil-crops.jpg" alt="crops">
            <span>Oil Crops</span>
          </div>
          <div class="mncntnt">
                 <img src="<?php echo get_template_directory_uri(); ?>/content/images/oil-crops.svg" alt="field-crop-seeds">
            <h6>Oil Crops</h6>
            <p>Oil crops are grown primarily for their seeds, which are rich in oils used for cooking, industrial purposes, and biofuels.</p>
            <span>Check out more...</span>
          </div>
        </a>
        <a href="/fodder-crops" class="maindiv">
          <div class="mnimg"> 
            <img src="<?php echo get_template_directory_uri(); ?>/content/images/fodder-crops.jpg" alt="fooder">
            <span>Fodder Crops</span>
          </div>
          <div class="mncntnt">
                 <img src="<?php echo get_template_directory_uri(); ?>/content/images/fodder-crops.svg" alt="field-crop-seeds">
            <h6>Fodder Crops</h6>
            <p>Fodder crops are cultivated specifically to provide feed for livestock, essential for their nutrition and health</p>
            <span>Check out more...</span>
          </div>
        </a>
        <a href="/organic-fertilizer-pesticide" class="maindiv">
          <div class="mnimg"> 
            <img src="<?php echo get_template_directory_uri(); ?>/content/images/organic-bio-fertilizer.jpg" alt="organic">
          <span>Fertilizer & Pesticide</span>
          </div>
          <div class="mncntnt">
                 <img src="<?php echo get_template_directory_uri(); ?>/content/images/organic-bio-fertilizer.svg" alt="field-crop-seeds">
            <h6>Fertilizer & Pesticide </h6>
            <p>They promote sustainable agriculture by improving soil health and reducing environmental impact compared to synthetic alternatives.</p>
            <span>Check out more...</span>
          </div>
        </a>
       
      
      </div>
    </section>
    <section class="testimonial">
      <div class="container">
        <div class="row text-center justify-content-center">
          <div class="col-sm-11">
            <h6 class="sec-head">Farmer's Testimonial </h6>
            <p class="mb50">Hear directly from our farmers through their testimonials, sharing firsthand experiences with our products. Their authentic stories reveal 
              the real-world benefits and successes they've achieved using our seeds and bio-fertilizers.</p>
          </div>
          </div>
          <div class="owl-carousel  testimonialcara" data-aos="fade-up"
          data-aos-duration="1500">
            <div class="item">
            <div class="row gx-5">
          <div class="col-md-7">
           <div class="iframe-container">
  <iframe
    src="https://www.youtube.com/embed/82gtzfdtNOg"
    frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen
  ></iframe>
</div>
 </div>
          <div class="col-md-5">
                  <div class="rgtest">
                  <img src="<?php echo get_template_directory_uri(); ?>/content/images/qutoe.svg" alt="qutoe">
                  <h6>ISP 176 Maize - The best choice for spring season</h6>
                  <p>“He told that the corn has a lot of sweetness, its yield is very good and selling it in Bareilly market. It’s fantastic to hear that ISP 176 maize is performing well as compared to others.”</p>
                  <div class="intro">
                    <p>Neeraj Shakya</p>
                  </div>
            </div>
          </div>
        </div>
        </div>
        <div class="item">
            <div class="row gx-5">
          <div class="col-md-7">
           <div class="iframe-container">
  <iframe
    src="https://www.youtube.com/embed/zAQL0tcXS8I"
    frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen
  ></iframe>
</div>
  </div>
          <div class="col-md-5">
          <div class="rgtest">
                  <img src="<?php echo get_template_directory_uri(); ?>/content/images/qutoe.svg" alt="qutoe">
                  <h6>ISP 166 Cauliflower</h6>
                  <p>“According to Natharam Ji, the results of ISP 166 Cauliflower were outstanding. The plants were strong and healthy and the heads were uniform in size. He also recommend this variety to his fellow farmers.”</p>
                  <div class="intro">
                    <p>Natharam Ji</p>
                  </div>
            </div>
          </div>
        </div>
        </div>
        <div class="item">
            <div class="row gx-5">
          <div class="col-md-7">
           <div class="iframe-container">
  <iframe
    src="https://www.youtube.com/embed/TAxJ_LXF3NQ"
    frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen
  ></iframe>
</div>
 </div>
          <div class="col-md-5">
          <div class="rgtest">
                  <img src="<?php echo get_template_directory_uri(); ?>/content/images/qutoe.svg" alt="qutoe">
                  <h6>ISP 205 Tomato</h6>
                  <p>“Sanjay Kumar Verma Ji said that he has been planting tomatoes for years, but ISP 205 tomatoes has truly stood out for him. According to him, Plants are hardy & fruits are uniform, firm & have a deep red color that is highly sought after in the market.”</p>
                  <div class="intro">
                    <p>Sanjay Kumar Verma</p>
                  </div>
            </div>
          </div>
        </div>
        </div>
        <div class="item">
            <div class="row gx-5">
          <div class="col-md-7">
           <div class="iframe-container">
  <iframe
    src="https://www.youtube.com/embed/wdCnwMou_1s"
    frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen
  ></iframe>
</div>


          </div>
          <div class="col-md-5">
          <div class="rgtest">
                  <img src="<?php echo get_template_directory_uri(); ?>/content/images/qutoe.svg" alt="qutoe">
                  <h6>ISP 166 Okra  </h6>
                  <p>“According to farmer, ISP 166 Okra has been a game-changer for him. The plants are strong, fruits are tender & vibrant green, fetching great market prices. It’s resistance to Pests and diseases, has ensured a healthy high-yielding crop every season.”</p>
                  <div class="intro">
                    <p>Madan Kumar</p>
                  </div>
            </div>
          </div>
        </div>
        </div>
        <div class="item" data-aos="fade-up"
        data-aos-duration="1500">
            <div class="row gx-5">
          <div class="col-md-7">
           <div class="iframe-container">
  <iframe
    src="https://www.youtube.com/embed/yvSaCKZQcD0"
    frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen
  ></iframe>
</div>


          </div>
          <div class="col-md-5">
          <div class="rgtest">
                  <img src="<?php echo get_template_directory_uri(); ?>/content/images/qutoe.svg" alt="qutoe">
                  <h6>ISP 190 Pumpkin</h6>
                  <p>“According to him, ISP 190 Pumpkin has exceeded his expectations with its excellent yield & uniform size. The Pumpkins are vibrant in color, firm & have a long shelf-life, making them highly marketable.”</p>
                  <div class="intro">
                    <p>Ajeet Kumar</p>
                  </div>
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
                      <p><
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
    <section class="reward text-center">
      <div class="container">
        <h4 class="sec-head">Rewards & Schemes</h4>
        <p>ISP offers rewards and schemes for staple crops such as maize, rice, wheat, oil crops, millets, vegetables, and forage.</p>
        <div class="row">
          <div class="col-md-6 mb-3 mb-md-0"><img src="<?php echo get_template_directory_uri(); ?>/content/images/offer1.jpg" alt="offer1" data-aos="fade-up"
          data-aos-duration="1500"></div>
          <div class="col-md-6"><img src="<?php echo get_template_directory_uri(); ?>/content/images/offer2.jpg" alt="offer2" data-aos="fade-up"
          data-aos-duration="1500"></div>
        </div>
      </div>
    </section>
    <section class="brand">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4">
            <h4 class="sec-head">Choose the most preferred seed brand</h4>
          </div>
          <div class="col-md-8">
            <div class="row align-items-baseline">
  <div class="col-6 col-md-3 mb-4 mb-md-0">
    <div class="mnof">
      <img src="<?php echo get_template_directory_uri(); ?>/content/images/awadrs.svg" alt="awadrs" data-aos="zoom-in" data-aos-duration="1500" class="aos-init aos-animate">
      <span><b class="counter" data-target="3">0</b>+</span>
      <p>Years of Existence</p>
    </div>
  </div>
  <div class="col-6 col-md-3 mb-4 mb-md-0">
    <div class="mnof">
      <img src="<?php echo get_template_directory_uri(); ?>/content/images/employees.svg" alt="employees" data-aos="zoom-in" data-aos-duration="1500" class="aos-init aos-animate">
      <span><b class="counter" data-target="300">0</b>+</span>
      <p>Employees</p>
    </div>
  </div>
  <div class="col-6 col-md-3">
    <div class="mnof">
      <img src="<?php echo get_template_directory_uri(); ?>/content/images/distributors.svg" alt="distributors" data-aos="zoom-in" data-aos-duration="1500" class="aos-init aos-animate">
      <span><b class="counter" data-target="2500">0</b>+</span>
      <p>Distributors</p>
    </div>
  </div>
  <div class="col-6 col-md-3">
    <div class="mnof">
      <img src="<?php echo get_template_directory_uri(); ?>/content/images/cutomers.svg" alt="cutomers" data-aos="zoom-in" data-aos-duration="1500" class="aos-init aos-animate">
      <span><b class="counter" data-target="1">0<span></b>.2M</span>
      <p>Customers</p>
    </div>
  </div>
</div>

          </div>
        </div>
      </div>
    </section>


<?php
get_footer();
