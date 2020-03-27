<footer>
    <div class="footer">
        <section class="footer-info">
            <h2 id="footer-logo">
                <a href="<?php echo site_url(); ?>" class="">
                    <img src="<?php echo get_theme_file_uri('/images/logo-lilo-mali.png') ?>" alt="Ordinacija Lolo logo" class="logo-lilo">
                </a>
            </h2>
            <p class="phone-p">Broj telefona: <a href="tel:+381603310892"><strong>+381 60 33 10 892</strong></a></p>
            <p class="address-p">Adresa: <strong>Luja Adamiča 26d, lokal 2, 11070 Novi Beograd</strong></p>
        </section>

        <section class="work-hours">
            <h3>RADNO VREME</h3>
            <p class="hours-p">Radnim danima: <strong>09-17h</strong></p>
            <p class="hours-p">Subotom: <strong>10-14h</strong></p>
        </section>

        <section class="social">
            <h3>PRATITE NAS</h3>
            <div class="social-icons">
                <a href="https://www.facebook.com/OrdinacijaLilo/" target="_blank">
                    <img src="<?php echo get_theme_file_uri('/images/facebook_logo.svg') ?>" class="fa-facebook">
                </a>
                <!-- <a href="#" target="_blank">
                    <img src="<?php echo get_theme_file_uri('/images/facebook_logo.svg') ?>" class="fa-instagram">
                </a> -->
            </div>
        </section>
    </div>
    <p class="copyright-p">
        &copy; 2020 - <?php bloginfo('name'); ?>
        <span>. Sva prava zadržana.</span>
    </p>
</footer>

<?php wp_footer(); ?>
    
</body>
</html>