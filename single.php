<?php get_header(); ?>

<div class="post-container">
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <article class="single-post">
                <?php if(has_post_thumbnail()) : ?>
                    <div class="single-post-thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php endif; ?>
                <div class="single-post-content">
                    <h1 class="single-post-title">
                        <?php the_title(); ?>
                    </h1>
                    <div class="meta single-post-meta">
                        <span class="posted-by">Postavio/la</span>
                        <span class="author-name"><?php the_author_posts_link(); ?></span>
                        <!-- <span class="post-date"><?php the_time('d.m.Y'); ?></span> -->
                    </div>
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <?php echo wpautop('Nijedan članak nije pronađen'); ?>
    <?php endif; ?>
</div>

<a href="<?php echo site_url("/blog") ?>" class="back-to-blog-link">&#171; Nazad na blog</a>

<?php get_footer(); ?>