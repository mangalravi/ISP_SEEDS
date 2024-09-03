<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/content/images/favicon.svg" />

<!-- Preload important fonts and stylesheets -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/content/fonts/bootstrap-icons.min.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/content/css/font-family.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/content/bootstrap/css/bootstrap.min.css" />
<!-- Stylesheets -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/content/lib/aos/css/aos.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/content/lib/owl/css/owl.carousel.min.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/content/css/custom.css" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
      <div class="container">
       
        <nav class="navbar navbar-expand-lg">
      
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/content/images/logo.svg" alt="isp-logo" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav w-100 justify-content-between align-items-lg-center">
                <li class=" mx-lg-auto w-100">
                  <ul class="d-flex flex-column flex-lg-row justify-content-center">

                 
              <li class="nav-item parent-menu">
                  <button class="nav-link active" 
                    >Company <i class="bi bi-chevron-down ms-2"></i></button>
                  <ul class="submenu FST">
                    <li><a href="/about-us">About Us</a></li>
                    <li><a href="/pdf/Company_Profile_ISPSeeds.pdf" target="_blank">Company Profile</a></li>
                    <li><a href="/pdf/Catalogue-bio-products.pdf" target="_blank">Catalogue Bio-Products</a></li>
                    <!-- <li><a href="#">Biofach</a></li> -->
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo home_url('research'); ?>">Research</a>
                </li>

                <li class="nav-item parent-menu">
                  <button class="nav-link " 
                    >Product <i class="bi bi-chevron-down ms-2"></i></button>
                  <ul class="submenu fifth">
                    <li><a href="<?php echo home_url('vegetables'); ?>">Vegetable Seeds </a></li>
                    <li><a href="/field-crop">Field Crop Seeds</a></li>
                    <li><a href="/oil-crops">Oil Crops Seeds</a></li>
                    <li><a href="/fodder-crops">Fodder Crops Seeds</a></li>
                    <li><a href="/organic-fertilizer-pesticide">Organic Fertilizer/Pesticide</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/wikicrops">Wikicrops</a>
                </li>
                <li class="nav-item parent-menu">
                  <button class="nav-link">Get In Touch <i class="bi bi-chevron-down ms-2"></i></button>
                  <ul class="submenu FST">
                    <li><a href="http://career.ispseeds.com" target="_blank">Careers</a></li>
                  <li><a href="/contact-us">Contact Us</a></li>
                  <li><a href="/become-our-partner">Become Our Partner</a></li>
                  <!-- <li><a href="#">Our Network</a></li> -->
                </ul>
                </li>
                </ul>
                </li>
                <li class="mb-0">
                  <ul>
                  <li class="nav-item parent-menu border-0">
                <div class="dropdown">
                    <button class="btnhdr nav-link dropdown-toggle"  >
                      Login
                    </button>
                    
                    <ul class="submenu thrd">
												<li><a class="dropdown-item"  href="https://hr.ispseeds.com/" target="_blank">HRMS Login</a></li>
												<li><a class="dropdown-item" href="https://erp.ispseeds.com/" target="_blank">ERP Login</a></li>
												<li><a class="dropdown-item" href="https://buddy.ispseeds.com/" target="_blank">ISP Saathi</a></li>
											</ul>
                 
             
            </div>
                </li>
                  </ul>
                </li>
                
              </ul>

            
                 
            </div>
        </nav>
      </div>
    </header>

