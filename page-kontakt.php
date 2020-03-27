<?php get_header(); ?>

<div class="page-header">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <img src="<?php echo get_theme_file_uri('/images/kontakt.svg') ?>" alt="">
</div>

<section class="contact-section">
    <div class="contact-card-holder">
        <div class="contact-card contact-address-card">
            <span><img src="<?php echo get_theme_file_uri('/images/location.svg') ?>" alt="Adresa"></span>
            <h3>Adresa</h3>
            <p>Luja Adamiča 26d, lokal br. 2<br> 11070 Novi Beograd, Beograd</p>
        </div>
        <div class="contact-card contact-phone-card">
            <span><img src="<?php echo get_theme_file_uri('/images/phone.svg') ?>" alt="Telefon"></span>
            <h3>Kontakt telefon</h3>
            <p>+381 11 26 06 930 <br>+381 60 33 10 892</p>  
        </div>
        <div class="contact-card contact-email-card">
            <span><img src="<?php echo get_theme_file_uri('/images/email.svg') ?>" alt="Email"></span>
            <h3>Kontakt email</h3>
            <p>info@ordinacijalilo.rs</p>
        </div>
    </div>
    
    <div id="contact-form-container">
        <h2 class="contact-form-heading">Kontaktirajte nas</h2>
        <form class="contact-form" action="" method="POST">
            <p>
                <label for="name">Vaše ime <span class="star">*</span></label>
                <input type="text" name="name" minlength="3" required />
            </p>
            <p>
                <label for="phone">Vaš broj telefona</label>
                <input type="tel" pattern="[+]{1}[0-9]{11,14}" name="phone"></input>
            </p>
            <p>
                <label for="email">Vaš email <span class="star">*</span></label>
                <input type="email" name="email" required />
            </p>
            <p class="full">
                <label for="message">Vaša poruka <span class="star">*</span></label>
                <textarea name="message" rows="7" required></textarea>
            </p>
            <p class="full-btn">
                <button type="submit" class="btn contact-form-btn">Pošaljite</button>
            </p>
        </form>
    </div>

    <div class="map-wrapper">
        <div class="map-container">
            <div id="map"></div>
        </div>
    </div>
</section>

<?php get_footer(); ?>