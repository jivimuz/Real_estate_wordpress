<?php
/**
 * Services page template.
 *
 * @package Estatein
 */
get_header();
?>
<main class="site-main services-page" id="main-content">
    <?php get_template_part('template-parts/services'); ?>
    <?php get_template_part('template-parts/cta'); ?>
</main>
<?php get_footer();
