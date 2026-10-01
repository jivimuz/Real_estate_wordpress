<?php
/**
 * Property detail page template.
 *
 * @package Estatein
 */
get_header();
?>
<main class="site-main property-detail" id="main-content">
    <?php get_template_part('template-parts/property-detail'); ?>
    <?php get_template_part('template-parts/cta'); ?>
</main>
<?php get_footer();
