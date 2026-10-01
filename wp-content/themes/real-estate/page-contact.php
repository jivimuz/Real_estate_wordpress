<?php
/**
 * Contact page template.
 *
 * @package Estatein
 */
get_header();
?>
<main class="site-main contact-page" id="main-content">
    <section class="content-section contact-section">
        <div class="section-heading">
            <div><span class="section-mark" aria-hidden="true">◆</span>
                <h1>Contact Us</h1>
                <p>We are here to help you find the right property and answer your questions.</p>
            </div>
        </div>
        <div class="contact-details">
            <a href="mailto:hello@example.com"><span>Email</span><strong>hello@example.com</strong></a>
            <a href="tel:+15550123456"><span>Phone</span><strong>+1 555 012 3456</strong></a>
            <a href="#contact-form"><span>Office</span><strong>123 Estatein Avenue</strong></a>
        </div>
        <div class="contact-layout">
            <div>
                <h2>Let's connect</h2>
                <p>Tell us what you are looking for and our Estatein team will get back to you.</p><a
                    class="button button--accent" href="mailto:hello@example.com">hello@example.com</a>
            </div>
            <form class="contact-form" id="contact-form" action="#" method="post">
                <div class="contact-form__field"><label for="contact-name">Your Name</label><input id="contact-name"
                        name="name" type="text" required></div>
                <div class="contact-form__field"><label for="contact-email">Email Address</label><input
                        id="contact-email" name="email" type="email" required></div>
                <div class="contact-form__field contact-form__field--full"><label
                        for="contact-message">Message</label><textarea id="contact-message" name="message" rows="5"
                        required></textarea></div>
                <button class="button button--accent" type="submit">Send Message</button>
            </form>
        </div>
    </section>
</main>
<?php get_footer();
