<?php
/**
 * The header template.
 *
 * @package Estatein
 */
?><!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="site-header">
        <div class="announcement-bar" role="banner">
            <img class="announcement-bar__art"
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/header-abstract.svg'); ?>" alt=""
                aria-hidden="true">
            <span class="announcement-bar__message">&#10024; Discover Your Dream Property with Estatein</span>
            <a class="announcement-bar__link" href="<?php echo esc_url(estatein_page_url('properties')); ?>">Learn
                More</a>
            <button class="announcement-bar__close" type="button"
                aria-label="<?php esc_attr_e('Close announcement', 'estatein'); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/header-close.svg'); ?>"
                    alt="" aria-hidden="true">
            </button>
        </div>

        <div class="navigation-bar">
            <a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>"
                aria-label="<?php echo esc_attr(get_bloginfo('name')); ?>">
                <img class="site-logo__symbol"
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-symbol.svg'); ?>"
                    alt="">
                <img class="site-logo__text"
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-text.svg'); ?>"
                    alt="Estatein">
            </a>

            <nav class="primary-navigation" aria-label="<?php esc_attr_e('Primary navigation', 'estatein'); ?>">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_id' => 'primary-menu',
                        'menu_class' => 'primary-navigation__list',
                        'fallback_cb' => 'estatein_primary_menu_fallback',
                    )
                );
                ?>
            </nav>

            <a class="contact-button" href="<?php echo esc_url(estatein_page_url('contact')); ?>">Contact Us</a>
            <button class="menu-toggle" type="button" aria-controls="primary-menu" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
                <span class="screen-reader-text"><?php esc_html_e('Toggle navigation', 'estatein'); ?></span>
            </button>
        </div>
    </header>

    <?php
    function estatein_primary_menu_fallback()
    {
        ?>
        <ul id="primary-menu" class="primary-navigation__list">
            <li class="menu-item <?php echo estatein_is_current_page('home') ? 'current-menu-item' : ''; ?>"><a
                    href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
            <li class="menu-item <?php echo estatein_is_current_page('about-us') ? 'current-menu-item' : ''; ?>"><a
                    href="<?php echo esc_url(estatein_page_url('about-us')); ?>">About Us</a></li>
            <li class="menu-item <?php echo estatein_is_current_page('properties') ? 'current-menu-item' : ''; ?>"><a
                    href="<?php echo esc_url(estatein_page_url('properties')); ?>">Properties</a></li>
            <li class="menu-item <?php echo estatein_is_current_page('services') ? 'current-menu-item' : ''; ?>"><a
                    href="<?php echo esc_url(estatein_page_url('services')); ?>">Services</a></li>
        </ul>
        <?php
    }
