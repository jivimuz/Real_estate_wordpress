<?php
/**
 * About Us page template.
 *
 * @package Estatein
 */
get_header();
?>
<main class="site-main about-page" id="main-content">
    <?php get_template_part('template-parts/about-page'); ?>
    <?php get_template_part('template-parts/cta'); ?>
</main>
<?php get_footer();
