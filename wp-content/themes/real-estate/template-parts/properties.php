<?php
$properties = array(
    array(
        'image' => 'seaside-serenity.png',
        'title' => 'Seaside Serenity Villa',
        'description' => 'A stunning 4-bedroom, 3-bathroom villa in a peaceful suburban neighborhood...',
        'bedrooms' => '4-Bedroom',
        'bathrooms' => '3-Bathroom',
        'type' => 'Villa',
        'price' => '$550,000',
    ),
    array(
        'image' => 'metropolitan-haven.png',
        'title' => 'Metropolitan Haven',
        'description' => 'A chic and fully-furnished 2-bedroom apartment with panoramic city views...',
        'bedrooms' => '2-Bedroom',
        'bathrooms' => '2-Bathroom',
        'type' => 'Apartment',
        'price' => '$550,000',
    ),
    array(
        'image' => 'rustic-retreat.png',
        'title' => 'Rustic Retreat Cottage',
        'description' => 'An elegant 3-bedroom, 2.5-bathroom townhouse in a gated community...',
        'bedrooms' => '3-Bedroom',
        'bathrooms' => '3-Bathroom',
        'type' => 'Villa',
        'price' => '$550,000',
    ),
);
$theme_uri = get_template_directory_uri();
$is_properties_page = is_page('properties');
$property_detail_url = estatein_page_url('property-detail');
?>
<section class="content-section properties-section" id="properties">
    <?php if ($is_properties_page): ?>
        <div class="property-results-bar">
            <div><strong>Discover a World of Possibilities</strong><span>Our curated properties are ready to become your
                    next chapter.</span></div>
            <div class="property-results-bar__controls"><span>01 - 60</span><button type="button"
                    aria-label="Grid view">&#9638;</button><button type="button" aria-label="List view">&#9776;</button>
            </div>
        </div>
    <?php endif; ?>
    <div class="section-heading">
        <div>
            <span class="section-mark" aria-hidden="true">◆</span>
            <h2><?php echo esc_html($is_properties_page ? 'Our Properties' : 'Featured Properties'); ?></h2>
            <p>Explore our handpicked selection of featured properties. Each listing offers a glimpse into exceptional
                homes and investments available through Estatein. Click "View Details" for more information.</p>
        </div>
        <a class="button button--surface" href="#properties-grid">View All Properties</a>
    </div>
    <div class="property-grid" id="properties-grid">
        <?php foreach ($properties as $property): ?>
            <article class="property-card">
                <img class="property-card__image"
                    src="<?php echo esc_url($theme_uri . '/assets/images/properties/' . $property['image']); ?>"
                    alt="<?php echo esc_attr($property['title']); ?>">
                <div class="property-card__body">
                    <div>
                        <h3><?php echo esc_html($property['title']); ?></h3>
                        <p><?php echo esc_html($property['description']); ?> <a href="#contact">Read More</a></p>
                    </div>
                    <div class="property-card__tags">
                        <span><img src="<?php echo esc_url($theme_uri . '/assets/images/property-bedroom.svg'); ?>" alt="">
                            <?php echo esc_html($property['bedrooms']); ?></span>
                        <span><img src="<?php echo esc_url($theme_uri . '/assets/images/property-bathroom.svg'); ?>" alt="">
                            <?php echo esc_html($property['bathrooms']); ?></span>
                        <span><img src="<?php echo esc_url($theme_uri . '/assets/images/property-type.svg'); ?>" alt="">
                            <?php echo esc_html($property['type']); ?></span>
                    </div>
                    <div class="property-card__footer">
                        <div><small>Price</small><strong><?php echo esc_html($property['price']); ?></strong></div>
                        <a class="button button--accent" href="<?php echo esc_url($property_detail_url); ?>">View Property
                            Details</a>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
    <div class="section-pager"><span><strong>01</strong> of 60</span>
        <div><button type="button" aria-label="Previous properties">&#8592;</button><button type="button"
                aria-label="Next properties">&#8594;</button></div>
    </div>
</section>