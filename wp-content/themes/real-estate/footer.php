<?php
/**
 * The footer template.
 *
 * @package Estatein
 */
wp_footer();
?>
<footer class="site-footer">
    <div class="site-footer__main">
        <div class="site-footer__brand">
            <a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>"
                aria-label="<?php echo esc_attr(get_bloginfo('name')); ?>">
                <img class="site-logo__symbol"
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-symbol.svg'); ?>"
                    alt="">
                <img class="site-logo__text"
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-text.svg'); ?>"
                    alt="Estatein">
            </a>
            <form class="newsletter-form" action="#" method="post">
                <label class="screen-reader-text" for="estatein-email">Enter Your Email</label>
                <input id="estatein-email" type="email" name="email" placeholder="Enter Your Email">
                <button type="submit" aria-label="Subscribe">&#8594;</button>
            </form>
        </div>
        <div class="footer-links">
            <div>
                <h3>Home</h3><a href="<?php echo esc_url(home_url('/#hero')); ?>">Hero Section</a><a
                    href="<?php echo esc_url(home_url('/#properties')); ?>">Properties</a><a
                    href="<?php echo esc_url(home_url('/#testimonials')); ?>">Testimonials</a><a
                    href="<?php echo esc_url(home_url('/#faq')); ?>">FAQ's</a>
            </div>
            <div>
                <h3>About Us</h3><a href="<?php echo esc_url(estatein_page_url('about-us')); ?>">Our Story</a><a
                    href="<?php echo esc_url(estatein_page_url('about-us') . '#experience'); ?>">How It Works</a><a
                    href="<?php echo esc_url(estatein_page_url('about-us') . '#clients'); ?>">Our Clients</a>
            </div>
            <div>
                <h3>Properties</h3><a href="<?php echo esc_url(estatein_page_url('properties')); ?>">Portfolio</a><a
                    href="<?php echo esc_url(estatein_page_url('properties') . '#properties-grid'); ?>">Categories</a>
            </div>
            <div>
                <h3>Services</h3><a href="<?php echo esc_url(estatein_page_url('services') . '#services'); ?>">Valuation
                    Mastery</a><a href="<?php echo esc_url(estatein_page_url('services') . '#services'); ?>">Strategic
                    Marketing</a><a href="<?php echo esc_url(estatein_page_url('services') . '#services'); ?>">Property
                    Management</a>
            </div>
            <div>
                <h3>Contact Us</h3><a
                    href="<?php echo esc_url(estatein_page_url('contact') . '#contact-form'); ?>">Contact Form</a><a
                    href="<?php echo esc_url(estatein_page_url('contact')); ?>">Our Offices</a>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom"><span>@2023 Estatein. All Rights Reserved.</span><a href="#">Terms &amp;
            Conditions</a>
        <div class="social-links"><a href="#" aria-label="Facebook">f</a><a href="#" aria-label="LinkedIn">in</a><a
                href="#" aria-label="Instagram">ig</a></div>
    </div>
</footer>
</body>

</html>