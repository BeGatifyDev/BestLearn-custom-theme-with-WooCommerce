<?php get_header(); ?>

<main class="split-screen">
    <div class="split left">
        <div class="content">
            <h1>Discover Your Style</h1>
            <p>Shop the best men's glasses and sunshades for every occasion.</p>
            <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="cta-button">Explore Collection</a>
        </div>
    </div>
    <div class="split right">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.jpg" alt="BestLearn Hero">
    </div>
</main>

<?php get_footer(); ?>
