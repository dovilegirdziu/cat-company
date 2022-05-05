<!-- template galima pasirinkti wordpresso puslapiuose, tam reikia uzvadinti  -->
<?php
/* Template Name: About */
get_header();
?>

<!-- BELIEVE IN SUCCESS/ABOUT section -->

<section class="hero right-img">
    <h1 class="container py-5">About us.</h1>
    <div class="text-end img-wrapper py-5">
        <img src="<?php echo get_template_directory_uri(); ?>\assets\images\photos\cutePaw-mark-burnett.jpg" class="img-fluid ">
    </div>
</section>
<section class="about ">
    <div class="container text-start">
    <h2>Believe in Success</h2>
        <p>Despite being a fairly new company in the cat wellness business our customer satisfaction numberrrs don't lie. Over 90 purrcent of our customers, cat and human alike, have rated our business in highest regards on all platforms!</p>
    </div>

    <!-- WE-VISION-MISSION section -->

    <div class="we-vision-mission">
        <img src="<?php echo get_template_directory_uri(); ?>\assets\images\photos\backStare-alex-andrews.jpg" alt="green beans are being salted" class="left-img text-start">
        <div class="container-fluid text-left p-5 about-text-right">
            <h3>Who are we?</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui reiciendis fugit voluptatem
                distinctio hic rem quasi temporibus quibusdam voluptate voluptatum, minima.</p>
            <h3>Our Vision</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui reiciendis fugit voluptatem
                distinctio hic rem quasi temporibus quibusdam voluptate voluptatum, minima.</p>
            <h3>Our mission</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui reiciendis fugit voluptatem
                distinctio hic rem quasi temporibus quibusdam voluptate voluptatum, minima.</p>
        </div>
    </div>
</section>

<!-- TEAM -->

<section class="team py-5 container">
    <h2 class="p-5">Meet Our Team</h2>
    <section class="">

        <div class="row text-center">
            <div class="col-lg-3 col-md-6 p-3">
                <img src="<?php echo get_template_directory_uri(); ?>\assets\images\photos\veryHappyCat-amber-kipp.jpg" alt="our sales manager" class="img-fluid">
                <h4>Audio Manager</h4>
                <div class="d-flex flex-column">
                    <a href="tel:+56393047" class="call">+56 393 047</a>
                    <a href="mailto:info@cats.com">info@cats.com</a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 p-3">
                <img src="<?php echo get_template_directory_uri(); ?>\assets\images\photos\andrea-piacquadio-AudioManager.jpg" class="img-fluid">
                <h4>Food Manager</h4>
                <div class="d-flex flex-column">
                    <a href="tel:+56393047" class="call">+56 393 047</a>
                    <a href="mailto:info@cats.com">info@cats.com</a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 p-3">
                <img src="<?php echo get_template_directory_uri(); ?>\assets\images\photos\catAndButterfly-karina-vorozheeva.jpg" class="img-fluid">
                <h4>Designer</h4>
                <div class="d-flex flex-column">
                    <a href="tel:+56393047" class="call">+56 393 047</a>
                    <a href="mailto:info@cats.com">info@cats.com</a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 p-3">
                <img src="<?php echo get_template_directory_uri(); ?>\assets\images\photos\superior-pixabay.jpg" alt="our CEO, but it's a cat picture" class="img-fluid">
                <h4>CEO</h4>
                <div class="d-flex flex-column">
                    <a href="tel:+56393047" class="call">+56 393 047</a>
                    <a href="mailto:info@cats.com">info@cats.com</a>
                </div>
            </div>
        </div>

    </section>
</section>

<?php get_footer(); ?>