<?php
$theme_uri = get_template_directory_uri();
?>
<section class="hero-section" id="hero">
    <div class="hero-section__content">
        <div class="hero-section__copy">
            <div class="hero-section__text">
                <h1>Discover Your Dream Property with Estatein</h1>
                <p>Your journey to finding the perfect property begins here. Explore our listings to find the home that
                    matches your dreams.</p>
                <div class="hero-discover-badge" aria-hidden="true">
                    <span class="hero-discover-badge__ring"></span>
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/hero-icon.svg'); ?>" alt="">
                    <span class="hero-discover-badge__label">Discover Your Dream Property</span>
                </div>
            </div>
            <div class="hero-section__actions">
                <a class="button button--outline" href="#about">Learn More</a>
                <a class="button button--accent" href="#properties">Browse Properties</a>
            </div>
            <div class="hero-stats">
                <div class="hero-stat"><strong>200+</strong><span>Happy Customers</span></div>
                <div class="hero-stat"><strong>10k+</strong><span>Properties For Clients</span></div>
                <div class="hero-stat"><strong>16+</strong><span>Years of Experience</span></div>
            </div>
        </div>
        <div class="hero-section__visual">
            <img src="<?php echo esc_url($theme_uri . '/assets/images/hero-property.png'); ?>"
                alt="Modern Estatein property">
        </div>
    </div>
    <div class="feature-strip" aria-label="Estatein services">
        <a class="feature-tile" href="#properties">
            <span class="feature-tile__icon"><img
                    src="<?php echo esc_url($theme_uri . '/assets/images/hero-icon.svg'); ?>" alt=""></span>
            <span>Find Your Dream Home</span>
        </a>
        <a class="feature-tile" href="#properties">
            <span class="feature-tile__icon"><img
                    src="<?php echo esc_url($theme_uri . '/assets/images/hero-icon.svg'); ?>" alt=""></span>
            <span>Unlock Property Value</span>
        </a>
        <a class="feature-tile" href="#services">
            <span class="feature-tile__icon"><img
                    src="<?php echo esc_url($theme_uri . '/assets/images/hero-icon.svg'); ?>" alt=""></span>
            <span>Effortless Property Management</span>
        </a>
        <a class="feature-tile" href="#contact">
            <span class="feature-tile__icon"><img
                    src="<?php echo esc_url($theme_uri . '/assets/images/hero-icon.svg'); ?>" alt=""></span>
            <span>Smart Investments, Informed Decisions</span>
        </a>
    </div>
</section>