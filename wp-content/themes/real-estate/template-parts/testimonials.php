<?php
$testimonials = array(
    array('profile' => 'wade-warren.png', 'name' => 'Wade Warren', 'location' => 'USA, California', 'title' => 'Exceptional Service!', 'quote' => "Our experience with Estatein was outstanding. Their team's dedication and professionalism made finding our dream home a breeze. Highly recommended!"),
    array('profile' => 'emelie-thomson.png', 'name' => 'Emelie Thomson', 'location' => 'USA, Florida', 'title' => 'Efficient and Reliable', 'quote' => "Estatein provided us with top-notch service. They helped us sell our property quickly and at a great price. We couldn't be happier with the results."),
    array('profile' => 'john-mans.png', 'name' => 'John Mans', 'location' => 'USA, Nevada', 'title' => 'Trusted Advisors', 'quote' => 'The Estatein team guided us through the entire buying process. Their knowledge and commitment to our needs were impressive. Thank you for your support!'),
);
$theme_uri = get_template_directory_uri();
?>
<section class="content-section testimonials-section" id="testimonials">
    <div class="section-heading">
        <div>
            <span class="section-mark" aria-hidden="true">◆</span>
            <h2>What Our Clients Say</h2>
            <p>Read the success stories and heartfelt testimonials from our valued clients. Discover why they chose
                Estatein for their real estate needs.</p>
        </div>
        <a class="button button--surface" href="#testimonials-grid">View All Testimonials</a>
    </div>
    <div class="testimonial-grid" id="testimonials-grid">
        <?php foreach ($testimonials as $testimonial): ?>
            <article class="testimonial-card">
                <div class="testimonial-card__stars" aria-label="5 out of 5 stars">
                    <?php for ($star = 0; $star < 5; $star++): ?><img
                            src="<?php echo esc_url($theme_uri . '/assets/images/testimonial-star.svg'); ?>" alt="">
                    <?php endfor; ?>
                </div>
                <div>
                    <h3><?php echo esc_html($testimonial['title']); ?></h3>
                    <p><?php echo esc_html($testimonial['quote']); ?></p>
                </div>
                <div class="testimonial-card__person"><img
                        src="<?php echo esc_url($theme_uri . '/assets/images/profiles/' . $testimonial['profile']); ?>"
                        alt="">
                    <div>
                        <strong><?php echo esc_html($testimonial['name']); ?></strong><span><?php echo esc_html($testimonial['location']); ?></span>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
    <div class="section-pager"><span><strong>01</strong> of 10</span>
        <div><button type="button" aria-label="Previous testimonials">&#8592;</button><button type="button"
                aria-label="Next testimonials">&#8594;</button></div>
    </div>
</section>