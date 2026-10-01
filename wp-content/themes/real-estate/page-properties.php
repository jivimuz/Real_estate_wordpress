<?php
/**
 * Properties page template.
 *
 * @package Estatein
 */
get_header();
?>
<main class="site-main properties-page" id="main-content">
    <?php get_template_part('template-parts/properties-intro'); ?>
    <?php get_template_part('template-parts/properties'); ?>
    <?php get_template_part('template-parts/cta'); ?>
</main>
<?php get_footer();
