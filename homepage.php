<!-- template galima pasirinkti wordpresso puslapiuose, tam reikia ja uzvadinti  -->
<?php
/* Template Name: HomePage */
?>

<!-- statytas header is header.php -->
<?php get_header(); ?>

<!-- INTRODUCTION -->

<main>
    <section class="right-img">
        <h1 class="py-5 container">Purrrr-fect lifestyle. </br> By cats. For cats</h1>

        <div class="short-nav container mb-5">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'short-menu-location'
            ));
            ?>
        </div>

        <div class="text-end img-wrapper py-5">
            <img src="<?php echo get_template_directory_uri(); ?>\assets\images\photos\nappy-pixabay.jpg" alt="kitten taking a nap" class="img-fluid" id="img-to-change">
        </div>
    </section>

    <!-- ABOUT -->

    <section class="about pb-5">

        <div class="container text-start">
            <h2>About Us</h2>
            <p>We're an experienced team of purrfessionals on a mission to help all kitty cats out there. From fostering services to a beauty salon for our furry ones, we're here to help and improve your life!
            </p>
        </div>

        <div class="we-vision-mission">
            <img src="<?php echo get_template_directory_uri(); ?>\assets\images\photos\backStare-alex-andrews.jpg" alt="cat looking back" class="left-img text-start">
            <div class="container-fluid text-left p-5 about-text-right">
                <h3>Who are we?</h3>
                <p>A team of experts from all kinds of different backgrounds, working on bringing felines together and improving their quality of life.</p>
                <h3>Our Vision</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui reiciendis fugit voluptatem
                    distinctio hic rem quasi temporibus quibusdam voluptate voluptatum, minima.</p>
                <h3>Our mission</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui reiciendis fugit voluptatem
                    distinctio hic rem quasi temporibus quibusdam voluptate voluptatum, minima.</p>
            </div>
        </div>
    </section>

    <!-- SERVICES -->

    <div class="container text-start p-5">
        <h2 class="p-5">Our Services</h2>
    </div>

    <section class="services">

        <div class="container-fluid text-end p-5 about-text-right">
            <h3>Kitten Fostering</h3>
            <p>Our vast network of human volunteers all over the globe are here to foster little ones until we can find them a forever home. Leave all your cares and worries to us!</p>
            <h3>Cat Beauty Salon</h3>
            <p>Even a creature as sophisticated as a cat needs to treat itself to a spa once in a while! Our cat/human beauty gurus will make your fur shine and glow as the day you were born! </p>
            <h3>Give Them Home</h3>
            <p>Unfortunately feline homelessness numbers are high but we're here to change the tide! Our revolutionary AI based algorithm will help you find the perfect home based on your temper and scratch levels!</p>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>\assets\images/photos/sideCat-henda-watani.jpg" alt="kitten glancing over like chopper" class="right-side-img text-start">

    </section>

    <!-- PARTNERS -->

    <section class="partners container" id="partners">
        <h2>Partners</h2>
        <img src="<?php echo get_template_directory_uri(); ?>\assets\images/PartnerBAKSClothingCompanyLogo.jpg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>\assets\images/PartnersYellowandBlueAccountingLogo.jpg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>\assets\images/PartnersBlueArrowInternetLogo.jpg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>\assets\images/PatrnersTewp-content\themes\dietery\assets\alLeavesIconFitnessLogo.jpg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>\assets\images/PartnersCharcoalYellowRectangleArchitecturalLogo.jpg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>\assets\images/PartnersOrangewithBallIconBasketballLogo.jpg" alt="">
    </section>
</main>

<?php get_footer(); ?>