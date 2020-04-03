<?php get_header(); ?>

<section class="hero">
  <h1 class="hero-h">Centar za ishranu zdravih i bolesnih ljudi</h1>
  <p class="hero-p">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio,
    asperiores omnis animi repellendus a hic laboriosam molestias enim at
    saepe, rem dignissimos vitae repudiandae, odio cum ipsa explicabo fugiat
    rerum.
  </p>
  <div class="btns-container">
    <a href="<?php echo site_url('/programi') ?>" class="btn">
      Programi
    </a>
    <a href="<?php echo site_url('/kontakt') ?>" class="btn hero-btn">
      Kontakt
    </a>
  </div>
</section>

<section class="our-team">
  <div class="mission">
    <div class="purple-petal">
        <img src="<?php echo get_theme_file_uri('/images/full-purple-petal.svg') ?>">
    </div>
    <div class="outline-red-petal">
        <img src="<?php echo get_theme_file_uri('/images/outline-red-petal.svg') ?>">
    </div>
    <div class="gold-petal">
        <img src="<?php echo get_theme_file_uri('/images/gold-petal.svg') ?>">
    </div>
    <div class="full-red-petal">
        <img src="<?php echo get_theme_file_uri('/images/full-red-petal.svg') ?>">
    </div>
    <h2>Misija</h2>
    <p>
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione
      corrupti aut atque sit, harum, itaque architecto nostrum ipsa natus
      mollitia nulla praesentium ut dolorem aperiam eum illum suscipit
      temporibus consequuntur. Lorem ipsum, dolor sit amet consectetur
      adipisicing elit. Ratione corrupti aut atque sit, harum, itaque
      architecto nostrum ipsa natus mollitia nulla praesentium ut dolorem
      aperiam eum illum suscipit temporibus consequuntur.
    </p>
  </div>
  <div class="vision">
    <div class="purple-petal">
        <img src="<?php echo get_theme_file_uri('/images/full-purple-petal.svg') ?>">
    </div>
    <div class="full-red-petal">
        <img src="<?php echo get_theme_file_uri('/images/full-red-petal.svg') ?>">
    </div>
    <div class="gold-petal">
        <img src="<?php echo get_theme_file_uri('/images/gold-petal.svg') ?>">
    </div>
    <div class="outline-red-petal">
        <img src="<?php echo get_theme_file_uri('/images/outline-red-petal.svg') ?>">
    </div>
    <h2>Vizija</h2>
    <p>
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione
      corrupti aut atque sit, harum, itaque architecto nostrum ipsa natus
      mollitia nulla praesentium ut dolorem aperiam eum illum suscipit
      temporibus consequuntur. Lorem ipsum, dolor sit amet consectetur
      adipisicing elit. Ratione corrupti aut atque sit, harum, itaque
      architecto nostrum ipsa natus mollitia nulla praesentium ut dolorem
      aperiam eum illum suscipit temporibus consequuntur.
    </p>
  </div>
</section>

<section class="our-programs">
  <?php
    $programs = new WP_Query(array(
        "posts_per_page" => 4,
        "post_type" => "program"
    ));   
  ?>
  <div class="our-programs-items">
    <h2>Naši programi</h2>
    <?php if($programs->have_posts()) : ?>
        <?php while($programs->have_posts()) : $programs->the_post(); ?>
            <p class="home-page-program-container">
                <a href="<?php the_permalink(); ?>" class="home-page-program-link">
                    <?php the_title(); ?>
                </a>
            </p>
        <?php endwhile; ?>
    <?php else : ?>
        <?php echo wpautop('Nijedan program nije pronađen'); ?>
    <?php endif; ?>
  </div>
    <img src="<?php echo get_theme_file_uri('/images/food-heart.jpg') ?>" alt="" class="our-programs-img">
</section>

<section class="home-blog">
  <h2>Najnoviji članci sa bloga</h2>
  <?php
  $homePagePosts = new WP_Query(array(
    'posts_per_page' => 3
  ));
  ?>
  <div class="home-posts-container">
    <?php if($homePagePosts->have_posts()) : ?>
      <?php while($homePagePosts->have_posts()) : $homePagePosts->the_post(); ?>
        <article class="home-post">
          <?php if(has_post_thumbnail()) : ?>
            <div class="home-post-featured-image">
              <?php the_post_thumbnail(); ?>
            </div>
          <?php endif; ?>
          <div class="card-body home-post-card-body">
            <div class="meta">
                <span class="posted-by">Postavio/la</span>
                <span class="author-name"><?php the_author_posts_link(); ?></span>
                <!-- <span class="post-date"><?php the_time('d.m.Y'); ?></span> -->
            </div>
            <h3 class="post-title">
                <a href="<?php the_permalink(); ?>" class="home-post-title-link">
                    <?php the_title(); ?>
                </a>
            </h3>
            <div class="divider"></div>
            <div class="post-text">
                <?php the_excerpt(); ?>
            </div>
            <a href="<?php the_permalink(); ?>" class="btn post-btn">
                Više o članku
            </a>
          </div>
        </article>
      <?php endwhile; ?>
      <?php else : ?>
          <?php echo wpautop('Nijedan članak nije pronađen'); ?>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>