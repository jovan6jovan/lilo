<?php get_header(); ?>

<div class="page-container">
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <section class="page-nesto">
                <div class="page-header">
                    <h1 class="page-title"><?php the_title(); ?></h1>
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="page-text">
                    <?php the_content(); ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php else : ?>
        <?php echo wpautop('Nijedan članak nije pronađen'); ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>