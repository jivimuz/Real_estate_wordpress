<?php
$theme_uri = get_template_directory_uri();
?>
<section class="property-detail-page">
    <div class="property-detail__breadcrumb"><a
            href="<?php echo esc_url(estatein_page_url('properties')); ?>">Properties</a><span>/</span><span>Seaside
            Serenity Villa</span></div>
    <div class="property-detail__gallery"><img
            src="<?php echo esc_url($theme_uri . '/assets/images/properties/seaside-serenity.png'); ?>"
            alt="Seaside Serenity Villa">
        <div><img src="<?php echo esc_url($theme_uri . '/assets/images/properties/metropolitan-haven.png'); ?>"
                alt="Interior preview"><img
                src="<?php echo esc_url($theme_uri . '/assets/images/properties/rustic-retreat.png'); ?>"
                alt="Exterior preview"></div>
    </div>
    <div class="property-detail__header">
        <div>
            <h1>Seaside Serenity Villa</h1>
            <p>A stunning 4-bedroom, 3-bathroom villa in a peaceful suburban neighborhood.</p>
        </div>
        <div><small>Price</small><strong>$550,000</strong></div>
    </div>
    <div class="property-detail__content">
        <div>
            <h2>About this property</h2>
            <p>Welcome to Seaside Serenity Villa, where luxury meets tranquility. This exceptional property offers a
                spacious living experience with beautiful finishes, thoughtful details, and room for every part of your
                life.</p>
            <div class="property-detail__features"><span>4 Bedrooms</span><span>3
                    Bathrooms</span><span>Villa</span><span>2,500 sq. ft.</span></div>
        </div>
        <form class="property-inquiry" action="#" method="post">
            <h2>Interested in this property?</h2><label for="property-name">Your Name</label><input id="property-name"
                name="name" type="text" required><label for="property-email">Email Address</label><input
                id="property-email" name="email" type="email" required><button class="button button--accent"
                type="submit">Request Details</button>
        </form>
    </div>
</section>