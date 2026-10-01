<?php
$theme_uri = get_template_directory_uri();
$steps = array(
    array('number' => 'Step 01', 'title' => 'Discover a World of Possibilities', 'text' => 'Your journey begins with exploring our carefully curated property listings. Use our intuitive search tools to filter properties based on your preferences, including location, type, size, and budget.'),
    array('number' => 'Step 02', 'title' => 'Narrowing Down Your Choices', 'text' => "Once you've found properties that catch your eye, save them to your account or make a shortlist. This allows you to compare and revisit your favorites as you make your decision."),
    array('number' => 'Step 03', 'title' => 'Personalized Guidance', 'text' => 'Have questions about a property or need more information? Our dedicated team of real estate experts is just a call or message away.'),
    array('number' => 'Step 04', 'title' => 'See It for Yourself', 'text' => "Arrange viewings of the properties you're interested in. We'll coordinate with the property owners and accompany you to ensure you get a firsthand look at your potential new home."),
    array('number' => 'Step 05', 'title' => 'Making Informed Decisions', 'text' => 'Before making an offer, our team will assist you with due diligence, including property inspections, legal checks, and market analysis. We want you to be fully informed and confident in your choice.'),
    array('number' => 'Step 06', 'title' => 'Getting the Best Deal', 'text' => "We'll help you negotiate the best terms and prepare your offer. Our goal is to secure the property at the right price and on favorable terms."),
);
$team = array(
    array('image' => 'max-mitchell.png', 'name' => 'Max Mitchell', 'role' => 'Founder'),
    array('image' => 'sarah-johnson.png', 'name' => 'Sarah Johnson', 'role' => 'Chief Real Estate Officer'),
    array('image' => 'david-brown.png', 'name' => 'David Brown', 'role' => 'Head of Property Management'),
    array('image' => 'michael-turner.png', 'name' => 'Michael Turner', 'role' => 'Legal Counsel'),
);
?>
<section class="about-intro content-section">
    <div class="about-intro__copy"><span class="section-mark" aria-hidden="true">◆</span>
        <h1>Our Journey</h1>
        <p>Our story is one of continuous growth and evolution. We started with a simple idea: to make real estate
            accessible, transparent, and rewarding for everyone. Over the years, we've grown into a trusted platform and
            community for property enthusiasts and investors.</p>
        <div class="about-intro__stats">
            <div><strong>200+</strong><span>Happy Customers</span></div>
            <div><strong>10k+</strong><span>Properties For Clients</span></div>
            <div><strong>16+</strong><span>Years of Experience</span></div>
        </div>
    </div>
    <div class="about-intro__image"><img src="<?php echo esc_url($theme_uri . '/assets/images/hero-secondary.png'); ?>"
            alt="Estatein property exterior"></div>
</section>
<section class="content-section about-values" id="about">
    <div class="about-values__copy">
        <span class="section-mark" aria-hidden="true">◆</span>
        <h2>Our Values</h2>
        <p>Our values are the foundation of our success. We believe in integrity, innovation, and putting our clients
            first.</p>
    </div>
    <div class="about-value-grid">
        <article><span class="about-value-icon">◆</span>
            <div>
                <h3>Trust</h3>
                <p>Trust is the cornerstone of every successful real estate transaction.</p>
            </div>
        </article>
        <article><span class="about-value-icon">◆</span>
            <div>
                <h3>Excellence</h3>
                <p>We pursue excellence in every aspect of our service and expertise.</p>
            </div>
        </article>
        <article><span class="about-value-icon">◆</span>
            <div>
                <h3>Client-Centric</h3>
                <p>Your goals and dreams are at the heart of everything we do.</p>
            </div>
        </article>
        <article><span class="about-value-icon">◆</span>
            <div>
                <h3>Commitment</h3>
                <p>We are committed to guiding you with clarity from start to finish.</p>
            </div>
        </article>
    </div>
</section>
<section class="content-section about-achievements" id="achievements">
    <div class="section-heading">
        <div><span class="section-mark" aria-hidden="true">◆</span>
            <h2>Our Achievements</h2>
            <p>Our story is one of continuous growth and evolution. We started as a small team with big dreams,
                determined to create a real estate platform that transcended the ordinary.</p>
        </div>
    </div>
    <div class="about-client-grid">
        <article>
            <h3>3+ Years of Excellence</h3>
            <p>With over 3 years in the industry, we've amassed a wealth of knowledge and experience, becoming a go-to
                resource for all things real estate.</p>
        </article>
        <article>
            <h3>Happy Clients</h3>
            <p>Our greatest achievement is the satisfaction of our clients. Their success stories fuel our passion for
                what we do.</p>
        </article>
        <article>
            <h3>Industry Recognition</h3>
            <p>We've earned the respect of our peers and industry leaders, with accolades and awards that reflect our
                commitment to excellence.</p>
        </article>
    </div>
</section>
<section class="content-section about-experience" id="experience">
    <div class="section-heading">
        <div><span class="section-mark" aria-hidden="true">◆</span>
            <h2>Navigating the Estatein Experience</h2>
            <p>At Estatein, we've designed a straightforward process to help you find and purchase your dream property
                with ease. Here's a step-by-step guide to how it all works.</p>
        </div>
    </div>
    <div class="experience-grid">
        <?php foreach ($steps as $step): ?>
            <article class="experience-card">
                <div class="experience-card__number">
                    <?php echo esc_html($step['number']); ?>
                </div>
                <div>
                    <h3>
                        <?php echo esc_html($step['title']); ?>
                    </h3>
                    <p>
                        <?php echo esc_html($step['text']); ?>
                    </p>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>
<section class="content-section team-section" id="team">
    <div class="section-heading">
        <div><span class="section-mark" aria-hidden="true">◆</span>
            <h2>Meet the Estatein Team</h2>
            <p>At Estatein, our success is driven by the dedication and expertise of our team. Get to know the people
                behind our mission to make your real estate dreams a reality.</p>
        </div>
    </div>
    <div class="team-grid">
        <?php foreach ($team as $member): ?>
            <article class="team-card"><img
                    src="<?php echo esc_url($theme_uri . '/assets/images/team/' . $member['image']); ?>"
                    alt="<?php echo esc_attr($member['name']); ?>">
                <div>
                    <h3>
                        <?php echo esc_html($member['name']); ?>
                    </h3>
                    <p>
                        <?php echo esc_html($member['role']); ?>
                    </p>
                </div><a class="team-card__contact" href="#contact"><span>Say Hello</span><strong>&#8599;</strong></a><a
                    class="team-card__badge" href="#contact"
                    aria-label="Contact <?php echo esc_attr($member['name']); ?>">&#8599;</a>
            </article>
        <?php endforeach; ?>
    </div>
</section>
<section class="content-section about-clients" id="clients">
    <div class="section-heading">
        <div><span class="section-mark" aria-hidden="true">◆</span>
            <h2>Our Valued Clients</h2>
            <p>At Estatein, we have had the privilege of working with a diverse range of clients across the country.</p>
        </div>
    </div>
    <div class="about-client-grid">
        <article><span>Since 2019</span>
            <h3>ABC Corporation</h3>
            <p>We partnered with Estatein to find a prime location for our expanding headquarters.</p><a
                href="#contact">Read More</a>
        </article>
        <article><span>Since 2021</span>
            <h3>GreenTech Enterprises</h3>
            <p>Estatein's expertise in finding the perfect office space helped us grow our business.</p><a
                href="#contact">Read More</a>
        </article>
    </div>
</section>