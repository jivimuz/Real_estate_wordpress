<?php
$services = array(
    array('title' => 'Valuation Mastery', 'text' => 'Unlock the true value of your property with our expert valuation services and market insight.'),
    array('title' => 'Strategic Marketing', 'text' => 'Present your property to the right audience with thoughtful positioning and effective marketing.'),
    array('title' => 'Negotiation Wizardry', 'text' => 'Our experienced advisors help you negotiate confidently and secure favorable terms.'),
    array('title' => 'Closing Success', 'text' => 'Move from accepted offer to completion with a clear, guided process at every step.'),
    array('title' => 'Property Management', 'text' => 'Protect and grow your investment with reliable property management support.'),
    array('title' => 'Investment Guidance', 'text' => 'Make informed decisions with practical advice tailored to your real estate goals.'),
);
$theme_uri = get_template_directory_uri();
?>
<section class="inner-page-hero services-intro">
    <span class="section-mark" aria-hidden="true">◆</span>
    <h1>Elevate Your Real Estate Experience</h1>
    <p>At Estatein, we provide a range of services designed to make your real estate journey smooth, informed, and
        successful.</p>
</section>
<section class="content-section services-section" id="services">
    <div class="section-heading">
        <div><span class="section-mark" aria-hidden="true">◆</span>
            <h1>Our Services</h1>
            <p>At Estatein, we offer a range of services to help you navigate the real estate market with confidence.
            </p>
        </div>
    </div>
    <div class="service-grid">
        <?php foreach ($services as $service): ?>
            <article class="service-card"><span class="service-card__icon"><img
                        src="<?php echo esc_url($theme_uri . '/assets/images/hero-icon.svg'); ?>" alt=""></span>
                <h2><?php echo esc_html($service['title']); ?></h2>
                <p><?php echo esc_html($service['text']); ?></p><a href="#contact">Learn More</a>
            </article><?php endforeach; ?>
    </div>
</section>