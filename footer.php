<div class="bottom-search container text-end p-5">
    <div class="nav-search mt-5">
        <?php
        get_search_form();
        ?>
    </div>
</div>

<footer>
    <div class="container py-5">

        <div class="row py-5 ">

            <div class="col-lg-7 ">
                <a href="#top" class="pb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>\assets\images\OlomLogoColor.png" alt="white logo" class="Olum-logo">
                </a>
            </div>

            <div class="manager text-end col-lg-2 ">
                <h4>Manager</h4>
                <a href="tel:+56393047" class="call">+56 393 047</a>
                <a href="mailto:info@cats.com">info@cats.com</a>
            </div>

            <div class="ceo text-end col-lg-2">
                <h4>CEO</h4>
                <a href="tel:+56393047" class="call">+56 393 047</a>
                <a href="mailto:info@cats.com">info@cats.com</a>
            </div>

        </div>

        <div class="row">
            <p>
                2020 Figma Template by Adveits
            </p>
        </div>

        <div class="soc-media row text-end">
            <div class="col-11">
                <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in p-3"></i></a>
                <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f p-3"></i></a>
            </div>

        </div>
    </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>