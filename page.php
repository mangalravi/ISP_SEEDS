<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<?php if(is_page('30')) { ?>

	<section class="contactus pt5069 pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="mb50 text-center"   data-aos="fade-up"
                    data-aos-duration="1500">
                    <h4 class="sec-head ">Become Our Partner</h4>
                    <p class="mb-0">
                      We are looking for dynamic players to join us and be part of the fastest
                      growing organization in agricultural seeds area. Please let us know your
                      interest and we will get in touch.
                    </p>
                </div>
                </div>
            </div>
        </div>
        </section>
        <section class="partner"  style="background: #f7f3f2 url(<?php echo get_template_directory_uri(); ?>/content/images/partner.jpg) no-repeat right;background-size: 50% 100%;">
      <div class="container" >
        <div class="row">
          <div class="col-md-7">
          <div class="pospartner" data-aos="fade-in"
              data-aos-duration="1500">
                <h6>Partner Type</h6>
                <?php echo do_shortcode('[contact-form-7 id="d22e736" title="Partner"]'); ?>
            </div>
        </div>
        <div class="col-md-5">
              <div
                class="rgtptnr h-100"
               
              ></div>
            </div>
            </div>
             
              </div>
            </div>
          </div>
      </div>
      </section>
<?php } elseif(is_page('8')) { ?>

  <section class="top-banner research-bnr">
      <div class="container">
        <div class="row align-items-center gy-4">
      
        <div class="col-md-6 order-1 order-md-0">
            <div class="tpbg">
              <h1 data-aos="fade-down" data-aos-duration="1200">
                Research and Development processes on which kind of field crops
                and vegetables
              </h1>
              <p data-aos="fade-down" data-aos-duration="1500" class="mb-0">
                ISP has a wide range of vegetables and field crop seeds to offer
                for different customers across the globe. It is one of the
                leading seed producers in hybrid vegetable of okra tomato hot
                pepper bottle gourd, bitter gourd, sponge gourd, ridge gourd,
                cucumber, watermelon, cauliflower ,cabbage, coriander, beans,
                Marigold, capsicum eggplant. ISP has developed hybrids in Maize,
                bajra, Mustard, Paddy and SSG.
              </p>
            </div>
          </div>
          <div class="col-md-6 order-0 order-md-1 d-none d-md-block">
            <div class="rgtimgre">
              <img
                src="<?php echo get_template_directory_uri(); ?>/content/images/research/research-banner.png"
                alt="banner-1"
                data-aos="fade-in"
                data-aos-duration="1500"
              />
            </div>
          </div>
        </div>
      </div>
    <div class="text-center d-block d-md-none"><img class="w-100" src="<?php echo get_template_directory_uri(); ?>/content/images/research/research-banner.png" alt="research-banner"></div>
    </section>

    <section class="research about crops">
      <div class="container">
        <div class="row">
          <div class="col-md-5 position-relative mb-3 mb-md-0">
            <img
              src="<?php echo get_template_directory_uri(); ?>/content/images/research/research-1.png"
              alt="research"
              data-aos="fade-in"
              data-aos-duration="1500"
            />
          </div>
          <div class="col-md-7">
            <div class="ms-md-4 pt-0 pt-lg-5">
              <h4 class="sec-head"  data-aos="fade-down"
              data-aos-duration="1500">R&D methods company are doing</h4>
              <p class="mb05mob"  data-aos="fade-down"
              data-aos-duration="1500">
                Hybridization method ,sweetening test method using bricks meter
                in tomato and watermelon and several  other tests conducted by
                ISP will provide useful information to the Breeders as well as
                the farmers. Highest precautions are taken while conducting
                tests at the facility in his research documentation analyzing
                and improvising are the procedures followed by the R&D
                Department.
              </p>
              <p class="mb-0" data-aos="fade-down"
              data-aos-duration="1500">
                R&D stations and field stations (locations with maps) - ISP
                research and development facilities in Bangalore at Rajan kunte
                is spread over 10 acres of land
              </p>
              <div class="tags-links pt-2 d-none">
                <ul class="nav justify-content-center">
                  <li class="nav-item" data-aos="fade-up"
              data-aos-duration="1500">
                    <a class="nav-link disabled" aria-disabled="true"
                      >Articles on R&D</a
                    >
                  </li>
                  <li class="nav-item" data-aos="fade-up"
              data-aos-duration="1500">
                    <a class="nav-link disabled" aria-disabled="true"
                      >Collaborators in R&D</a
                    >
                  </li>
                  <li class="nav-item" data-aos="fade-up"
              data-aos-duration="1500">
                    <a class="nav-link disabled" aria-disabled="true"
                      >NA Quality Assurance</a
                    >
                  </li>
                  <li class="nav-item" data-aos="fade-up"
              data-aos-duration="1500">
                    <a class="nav-link disabled" aria-disabled="true"
                      >Infrastructure</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="our-objectives research">
      <div class="container">
        <div class="row g-4 align-items-center align-items-md-start">
          <div class="col-md-6">
            <div class="me-md-2 ">
              <h4 class="sec-head" data-aos="fade-down"
              data-aos-duration="1500">
                Every year, our scientists breed thousands of new seed varieties
                and investigate over 100,00 new compounds.
              </h4>
              <p data-aos="fade-up"
              data-aos-duration="1500">
                <strong>Agricultural Resilience:</strong> Developing seeds that
                can withstand various environmental stresses, such as drought,
                pests, and diseases.
              </p>
              <p data-aos="fade-up"
              data-aos-duration="1500">
                <strong>Yield Improvement:</strong> Enhancing crop yields to
                ensure food security and meet the demands of a growing
                population.
              </p>
              <p data-aos="fade-up"
              data-aos-duration="1500">
                <strong>Nutritional Enhancement:</strong> Producing crops with
                improved nutritional profiles to combat malnutrition.
              </p>
              <p data-aos="fade-up"
              data-aos-duration="1500">
                <strong>Specialized Traits:</strong> Developing seeds with
                specific traits, such as faster growth cycles, resistance to
                certain herbicides, or adaptation to specific climates.
              </p>
            </div>
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500">
            <div class="position-relative ms-md-4">
              <img
                src="<?php echo get_template_directory_uri(); ?>/content/images/research/research-2.jpg"
                alt="research"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="research about">
      <div class="container">
        <div class="row">
          <div class="col-md-6 position-relative mb-4 mb-md-0">
            <img
              src="<?php echo get_template_directory_uri(); ?>/content/images/research/research-3.png"
              alt="research"
              data-aos="fade-up"
              data-aos-duration="1500"
            />
          </div>
          <div class="col-md-6">
            <div class="ms-2 pt-lg-5">
              <h4 class="sec-head" data-aos="fade-down" data-aos-duration="1500">
                Innovation is driven by the passion of farmers.
              </h4>
              <p data-aos="fade-down" data-aos-duration="1500" class="mb-0">
                Your research plays a vital role in supporting farmers by
                providing them with the tools and innovations they need to
                ensure successful crop growth year after year. This is achieved
                through the development of advanced crop protection products and
                the enhancement of seed varieties
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

	<?php } else { ?>
    <section class="privacy-policy">
    <div class="container">
      <h1 class="text-center">Privacy Policy </h1>
<?php the_content(); ?>
  </div>
  </section>
		<?php } ?>
<?php
get_footer();
