<?php
/**
 * Template Name: Terms and Conditions
 */

get_header();
?>

<main id="content" class="site-content">
    <section id="privecyAndPolicyPage" >
        <div class="termsBanner">
            <?php
                get_template_part( 'template-parts/headingBanner',
                null,
                array(
                    'heading' => 'Terms & Condition',
                    'tagline' => ' We’re more than just a brand — we’re a team dedicated to bringing you quality, trust, and innovation. Our goal is to make your experience simple, enjoyable, and meaningful.'
                )
             );
            ?>
        </div>
        <div class="termsAndConditionWrapper"></div>
    </section>
</main>

<?php
get_footer();
?>