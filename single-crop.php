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


    <section class="bolg-detail pt5069">
      <div class="container">
        <h3 class="sec-head text-center"><?php the_title(); ?></h3>
	 <div class="row justify-content-center">
			<div class="col-sm-11 col-md-10 col-lg-9">
			<div class="accordion faqacrd" id="accordionExample">
		<?php if(!empty(get_field('title1'))){ ?>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseOne"
                aria-expanded="true"
                aria-controls="collapseOne"
              >
               <?php the_field('title1'); ?>
              </button>
            </h2>
            <div
              id="collapseOne"
              class="accordion-collapse collapse"
              aria-labelledby="headingOne"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <div class="topcntnt">
                  <?php the_field('content1'); ?>
				</div>
              </div>
            </div>
          </div>
		  <?php } ?>
		  <?php if(!empty(get_field('title2'))){ ?>
          <div class="accordion-item">
            <h2 class="accordion-header maintitle" id="headingTwo">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTwo"
                aria-expanded="false"
                aria-controls="collapseTwo"
              >
			  <?php the_field('title2'); ?>
              </button>
            </h2>
            <div
              id="collapseTwo"
              class="accordion-collapse collapse"
              aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
               <?php the_field('content2'); ?>
              </div>
            </div>
          </div>
		  <?php } ?>
		  <?php if(!empty(get_field('title3'))){ ?>
          <div class="accordion-item">
            <h2 class="accordion-header maintitle" id="headingThree">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseThree"
                aria-expanded="false"
                aria-controls="collapseThree"
              >
			  <?php the_field('title3'); ?>
              </button>
            </h2>
            <div
              id="collapseThree"
              class="accordion-collapse collapse"
              aria-labelledby="headingThree"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
			  <?php the_field('content3'); ?>
              </div>
            </div>
          </div>
		  <?php } ?>
		  <?php if(!empty(get_field('title4'))){ ?>
          <div class="accordion-item">
            <h2 class="accordion-header maintitle" id="headingFour">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseFour"
                aria-expanded="false"
                aria-controls="collapseFour"
              >
			  <?php the_field('title4'); ?>
              </button>
            </h2>
            <div
              id="collapseFour"
              class="accordion-collapse collapse"
              aria-labelledby="headingFour"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
			  <?php the_field('content4'); ?>
              
			</div>
            </div>
          </div>
		  <?php } ?>
		  <?php if(!empty(get_field('title5'))){ ?>
		  <div class="accordion-item">
            <h2 class="accordion-header maintitle" id="headingFive">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseFive"
                aria-expanded="false"
                aria-controls="collapseFive"
              >
			  <?php the_field('title5'); ?>
              </button>
            </h2>
            <div
              id="collapseFive"
              class="accordion-collapse collapse"
              aria-labelledby="headingFive"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
			  <?php the_field('content5'); ?>
              
			</div>
            </div>
          </div>
		  <?php } ?>
		  <?php if(!empty(get_field('title6'))){ ?>
		  <div class="accordion-item">
            <h2 class="accordion-header maintitle" id="headingSix">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseSix"
                aria-expanded="false"
                aria-controls="collapseSix"
              >
			  <?php the_field('title6'); ?>
              </button>
            </h2>
            <div
              id="collapseSix"
              class="accordion-collapse collapse"
              aria-labelledby="headingSix"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
			  <?php the_field('content6'); ?>
              
			</div>
            </div>
          </div>
		  <?php } ?>
		  <?php if(!empty(get_field('title7'))){ ?>
		  <div class="accordion-item">
            <h2 class="accordion-header maintitle" id="headingSeven">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseSeven"
                aria-expanded="false"
                aria-controls="collapseSeven"
              >
			  <?php the_field('title7'); ?>
              </button>
            </h2>
            <div
              id="collapseSeven"
              class="accordion-collapse collapse"
              aria-labelledby="headingSeven"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
			  <?php the_field('content7'); ?>
              
			</div>
            </div>
          </div>
		  <?php } ?>
		  <?php if(!empty(get_field('title8'))){ ?>
		  <div class="accordion-item">
            <h2 class="accordion-header maintitle" id="headingEight">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseEight"
                aria-expanded="false"
                aria-controls="collapseEight"
              >
			  <?php the_field('title8'); ?>
              </button>
            </h2>
            <div
              id="collapseEight"
              class="accordion-collapse collapse"
              aria-labelledby="headingEight"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
			  <?php the_field('content8'); ?>
              
			</div>
            </div>
          </div>
		  <?php } ?>
		  <?php if(!empty(get_field('title9'))){ ?>
		  <div class="accordion-item">
            <h2 class="accordion-header maintitle" id="headingNine">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseNine"
                aria-expanded="false"
                aria-controls="collapseNine"
              >
			  <?php the_field('title9'); ?>
              </button>
            </h2>
            <div
              id="collapseNine"
              class="accordion-collapse collapse"
              aria-labelledby="headingNine"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
			  <?php the_field('content9'); ?>
              
			</div>
            </div>
          </div>
		  <?php } ?>
		  <?php if(!empty(get_field('title10'))){ ?>
		  <div class="accordion-item">
            <h2 class="accordion-header maintitle" id="headingTen">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTen"
                aria-expanded="false"
                aria-controls="collapseTen"
              >
			  <?php the_field('title10'); ?>
              </button>
            </h2>
            <div
              id="collapseTen"
              class="accordion-collapse collapse"
              aria-labelledby="headingTen"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
			  <?php the_field('content10'); ?>
              
			</div>
            </div>
          </div>
		  <?php } ?>
		  <?php if(!empty(get_field('title11'))){ ?>
		  <div class="accordion-item">
            <h2 class="accordion-header maintitle" id="headingEleven">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseEleven"
                aria-expanded="false"
                aria-controls="collapseEleven"
              >
			  <?php the_field('title11'); ?>
              </button>
            </h2>
            <div
              id="collapseEleven"
              class="accordion-collapse collapse"
              aria-labelledby="headingEleven"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
			  <?php the_field('content11'); ?>
              
			</div>
            </div>
          </div>
		  <?php } ?>
		  <?php if(!empty(get_field('title12'))){ ?>
		  <div class="accordion-item">
            <h2 class="accordion-header maintitle" id="headingTwelve">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTwelve"
                aria-expanded="false"
                aria-controls="collapseTwelve"
              >
			  <?php the_field('title12'); ?>
              </button>
            </h2>
            <div
              id="collapseTwelve"
              class="accordion-collapse collapse"
              aria-labelledby="headingTwelve"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
			  <?php the_field('content12'); ?>
              
			</div>
            </div>
          </div>
		  <?php } ?>
		  <?php if(!empty(get_field('title13'))){ ?>
		  <div class="accordion-item">
            <h2 class="accordion-header maintitle" id="headingThirteen">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseThirteen"
                aria-expanded="false"
                aria-controls="collapseThirteen"
              >
			  <?php the_field('title13'); ?>
              </button>
            </h2>
            <div
              id="collapseThirteen"
              class="accordion-collapse collapse"
              aria-labelledby="headingThirteen"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
			  <?php the_field('content13'); ?>
              
			</div>
            </div>
          </div>
		  <?php } ?>
		  <?php if(!empty(get_field('title14'))){ ?>
		  <div class="accordion-item">
            <h2 class="accordion-header maintitle" id="headingFourteen">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseFourteen"
                aria-expanded="false"
                aria-controls="collapseFourteen"
              >
			  <?php the_field('title14'); ?>
              </button>
            </h2>
            <div
              id="collapseFourteen"
              class="accordion-collapse collapse"
              aria-labelledby="headingFourteen"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
			  <?php the_field('content14'); ?>
              
			</div>
            </div>
          </div>
		  <?php } ?>
		  <?php if(!empty(get_field('title15'))){ ?>
		  <div class="accordion-item">
            <h2 class="accordion-header maintitle" id="headingFifteen">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseFifteen"
                aria-expanded="false"
                aria-controls="collapseFifteen"
              >
			  <?php the_field('title15'); ?>
              </button>
            </h2>
            <div
              id="collapseFifteen"
              class="accordion-collapse collapse"
              aria-labelledby="headingFifteen"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
			  <?php the_field('content15'); ?>
              
			</div>
            </div>
          </div>
		  <?php } ?>
		  <?php if(!empty(get_field('title16'))){ ?>
		  <div class="accordion-item">
            <h2 class="accordion-header maintitle" id="headingSixteen">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseSixteen"
                aria-expanded="false"
                aria-controls="collapseSixteen"
              >
			  <?php the_field('title16'); ?>
              </button>
            </h2>
            <div
              id="collapseSixteen"
              class="accordion-collapse collapse"
              aria-labelledby="headingSixteen"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
			  <?php the_field('content16'); ?>
              
			</div>
            </div>
          </div>
		  <?php } ?>
		  <?php if(!empty(get_field('title17'))){ ?>
		  <div class="accordion-item">
            <h2 class="accordion-header maintitle" id="headingSeventeen">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseSeventeen"
                aria-expanded="false"
                aria-controls="collapseSeventeen"
              >
			  <?php the_field('title17'); ?>
              </button>
            </h2>
            <div
              id="collapseSeventeen"
              class="accordion-collapse collapse"
              aria-labelledby="headingSeventeen"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
			  <?php the_field('content17'); ?>
              
			</div>
            </div>
          </div>
		  <?php } ?>
		  <?php if(!empty(get_field('title18'))){ ?>
		  <div class="accordion-item">
            <h2 class="accordion-header maintitle" id="headingEighteen">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseEighteen"
                aria-expanded="false"
                aria-controls="collapseEighteen"
              >
			  <?php the_field('title18'); ?>
              </button>
            </h2>
            <div
              id="collapseEighteen"
              class="accordion-collapse collapse"
              aria-labelledby="headingEighteen"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
			  <?php the_field('content18'); ?>
              
			</div>
            </div>
          </div>
		  <?php } ?>
		  <?php if(!empty(get_field('title19'))){ ?>
		  <div class="accordion-item">
            <h2 class="accordion-header maintitle" id="headingNineteen">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseNineteen"
                aria-expanded="false"
                aria-controls="collapseNineteen"
              >
			  <?php the_field('title19'); ?>
              </button>
            </h2>
            <div
              id="collapseNineteen"
              class="accordion-collapse collapse"
              aria-labelledby="headingNineteen"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
			  <?php the_field('content19'); ?>
              
			</div>
            </div>
          </div>
		  <?php } ?>
        </div>
			</div>
		</div>
	  
       
      </div>
    </section>

<?php
get_footer();
