<?php
$questions = array(
    array('question' => 'How do I search for properties on Estatein?', 'answer' => 'Learn how to use our user-friendly search tools to find properties that match your criteria.'),
    array('question' => 'What documents do I need to sell my property through Estatein?', 'answer' => 'Find out about the necessary documentation for listing your property with us.'),
    array('question' => 'How can I contact an Estatein agent?', 'answer' => 'Discover the different ways you can get in touch with our experienced agents.'),
);
?>
<section class="content-section faq-section" id="faq">
    <div class="section-heading">
        <div><span class="section-mark" aria-hidden="true">◆</span>
            <h2>Frequently Asked Questions</h2>
            <p>Find answers to common questions about Estatein's services, property listings, and the real estate
                process. We're here to provide clarity and assist you every step of the way.</p>
        </div>
        <a class="button button--surface" href="#faq-grid">View All FAQ's</a>
    </div>
    <div class="faq-grid" id="faq-grid">
        <?php foreach ($questions as $question): ?>
            <article class="faq-card">
                <h3><?php echo esc_html($question['question']); ?></h3>
                <p><?php echo esc_html($question['answer']); ?></p><a class="button button--surface" href="#contact">Read
                    More</a>
            </article><?php endforeach; ?>
    </div>
    <div class="section-pager"><span><strong>01</strong> of 10</span>
        <div><button type="button" aria-label="Previous questions">&#8592;</button><button type="button"
                aria-label="Next questions">&#8594;</button></div>
    </div>
</section>