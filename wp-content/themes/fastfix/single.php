<?php get_header(); ?>

    <div class="single-post-wrapper container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="single-post">
            <div class="post-thumbnail">
                <?php echo the_post_thumbnail(); ?>
            </div>

            <div class="post-title">
                <h1><?php echo get_the_title(); ?></h1>
                <div class="green-line"></div>
            </div>

            <div class="content">
                <?php echo the_content(); ?>
            </div>
        </div>

        <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </div>

<?php get_footer(); ?>