<?php get_header(); ?>

<div class="page-header">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <img src="<?php echo get_theme_file_uri('/images/usluge.svg') ?>" alt="">
</div>

<?php
    $programs = new WP_Query(array(
        "posts_per_page" => 4,
        "post_type" => "program"
    ));   
?>

<div class="blog-container">
    <div class="posts-container">
        <?php if($programs->have_posts()) : ?>
            <?php while($programs->have_posts()) : $programs->the_post(); ?>
                <article class="blog-card program-card">
                    <?php if(has_post_thumbnail()) : ?>
                        <div class="post-featured-image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>
                    <div class="card-body program-card-body">
                        <h3 class="post-title program-title">
                            <a href="<?php the_permalink(); ?>" class="post-title-link">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <div class="divider"></div>
                        <div class="post-text">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn post-btn program-btn">
                            Više o programu
                        </a>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <?php echo wpautop('Nijedan program nije pronađen'); ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>