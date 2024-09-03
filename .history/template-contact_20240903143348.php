<?php 
/* Template Name: Contact */

get_header(); ?>

<section class="contactus pt5069">
    <h4 class="sec-head text-center mb50">Get In Touch</h4>
    <div
        class="grnbg position-relative"
        style="
            background: var(--bs-secondary)
                url(content/images/leaf-150-superior.svg) no-repeat;
        "
    >
        <div class="container">
            <div class="bggrnleaf">
                <div class="row g-0">
                    <div class="col-lg-5">
                        <div id="map" style="height: 100%; width: 100%;"></div>
                        <script>
                            function initMap() {
                                var location = {lat: 28.547671, lng: 77.368295};
                                var map = new google.maps.Map(document.getElementById('map'), {
                                    zoom: 15,
                                    center: location
                                });
                                var marker = new google.maps.Marker({
                                    position: location,
                                    map: map,
                                    title: 'B-14 Sector 67, Gautam Buddha Nagar, NOIDA, Uttar Pradesh, India, 201309',
                                    icon: 'https://maps.google.com/mapfiles/ms/icons/blue-dot.png' // Custom icon URL
                                });
                                var infowindow = new google.maps.InfoWindow({
                                    content: 'B-14 Sector 67, Gautam Buddha Nagar, NOIDA, Uttar Pradesh, India, 201309'
                                });
                                marker.addListener('click', function() {
                                    infowindow.open(map, marker);
                                });
                            }
                        </script>
                        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
                    </div>
                    <div class="col-lg-7">
                        <div
                            class="rgtcontact"
                            style="background: url(<?php echo get_template_directory_uri(); ?>/content/images/bg-crops.svg) no-repeat"
                        >
                            <h2>Inventive Seeds Private Ltd.</h2>
                            <p>Write a Message</p>
                            <?php echo do_shortcode('[contact-form-7 id="9c6b12c" title="Contact Us"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
