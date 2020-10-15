<?php get_header(); ?>

<div class="page-container front-page">

    <div class="front-page-text">

        <p class="front-page-para">
            <?php echo get_theme_mod('front_page_intro_text', 'Hi, my name is...'); ?>
        </p>

        <h1 class="front-page-title">
            <?php echo get_theme_mod('front_page_title', 'Portfolio Theme'); ?>
        </h1>

        <h2 class="front-page-para">
            <?php echo get_theme_mod('front_page_subtitle','You can find my projects here'); ?>
        </h2>

        <?php if(is_active_sidebar('front-page-list')) : ?>
            <?php dynamic_sidebar('front-page-list'); ?>
        <?php endif; ?>
   

        <div class="buttons">
            <a class="btn green" href="<?php echo get_theme_mod('front_page_button1_link','#'); ?>">
                <?php echo get_theme_mod('front_page_button1_text','Projects'); ?>
            </a>
            <a class="btn pink" href="<?php echo get_theme_mod('front_page_button2_link','#'); ?>">
                <?php echo get_theme_mod('front_page_button2_text','Contact'); ?>
            </a>
        </div>

    </div>

    <div class="front-page-img">
        <img src="<?php echo get_theme_mod('front_page_image', get_bloginfo('template_url').'/img/header-img.png'); ?>" alt="front-page-logo"/>
    </div>

</div>

<?php get_footer(); ?>
