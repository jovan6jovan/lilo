<?php get_header(); ?>

<div class="page-header">
    <h1 class="page-title">Blog</h1>
    <img src="<?php echo get_theme_file_uri('/images/blog.svg') ?>" alt="">
</div>

<div class="blog-container">
    <div class="posts-container">
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <article class="blog-card">
                    <?php if(has_post_thumbnail()) : ?>
                        <div class="post-featured-image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>
                    <div class="card-body">
                        <div class="meta">
                            <span class="posted-by">Postavio/la</span>
                            <span class="author-name"><?php the_author_posts_link(); ?></span>
                            <!-- <span class="post-date"><?php the_time('d.m.Y'); ?></span> -->
                        </div>
                        <h3 class="post-title">
                            <a href="<?php the_permalink(); ?>" class="post-title-link">
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
    <div class="pagination">
        <?php echo paginate_links(); ?>
    </div>
</div>

<?php get_footer(); ?>