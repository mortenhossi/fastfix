<?php get_header(); ?>

<div class="blog-wrapper">
    
    <div class="blog-title">
        <h1>Blog</h1>
        <div class="green-line"></div>
    </div>

    <div class="container">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="blog-post">
           
            <a href="<?php echo get_permalink(); ?>">
                <div class="thumbnail">
                    <?php echo the_post_thumbnail(); ?>
                </div>

                <div class="content">
                    <div class="title">
                        <?php echo get_the_title(); ?>
                    </div>

                    <div class="excerpt">
                        <?php echo get_the_excerpt(); ?>
                    </div>
                </div>
            </a>
            
        </div>

        <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

        <div class="blog-filler"></div>
        <div class="blog-filler"></div>
    </div>
</div>

<?php get_footer(); ?>