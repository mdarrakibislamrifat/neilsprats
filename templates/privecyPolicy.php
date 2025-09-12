<?php
/**
 * Template Name: Privacy Policy
 */

get_header();
?>

<main id="content" class="site-content">
    <section id="privecyAndPolicyPage">
        <div class="termsBanner">
            <?php
                get_template_part( 'template-parts/headingBanner',
                null,
                array(
                    'heading' => 'Our Privacy Policy',
                    'tagline' => ' We’re more than just a brand — we’re a team dedicated to bringing you quality, trust, and innovation. Our goal is to make your experience simple, enjoyable, and meaningful.'
                ) 
             );
            ?>
        </div>
        <div class="privecyPolicyContentWrapper">
            <div class="privecyPolicyContentBox">
                <p class="privecyParagraph">At Smart Luxury Living , we value your privacy and are committed to
                    protecting your personal information. When you use our website to browse, create an account, or make
                    a purchase, we may collect information such as your name, email, phone number, billing/shipping
                    address, and payment details.</p>
                <div class="privecyListWrapper">
                    <p class="privecyListTitle">We use this information only to:</p>
                    <ul class="privecyList">
                        <li class="privecyListItem">Process and deliver your orders securely.</li>
                        <li class="privecyListItem">Provide customer support and updates about your purchases.</li>
                        <li class="privecyListItem">Improve your shopping experience with personalized recommendations.
                        </li>
                        <li class="privecyListItem">Ensure website security and fraud prevention.</li>
                    </ul>
                </div>
                <p class="privecyParagraph">We do not sell, rent, or share your personal information with third parties,
                    except where required by law or to trusted service providers (like payment gateways or delivery
                    partners) who assist us in serving you.
                    Your data is stored securely, and you can request to update or delete your information at any time
                    by contacting us. By using our website, you agree to this Privacy Policy.</p>
            </div>
            <div class="privecyPolicyContentBox">
                <p class="privecyParagraph">At Smart Luxury Living , we value your privacy and are committed to
                    protecting your personal information. When you use our website to browse, create an account, or make
                    a purchase, we may collect information such as your name, email, phone number, billing/shipping
                    address, and payment details.</p>
                <div class="privecyListWrapper">
                    <p class="privecyListTitle">We use this information only to:</p>
                    <ul class="privecyList">
                        <li class="privecyListItem">Process and deliver your orders securely.</li>
                        <li class="privecyListItem">Provide customer support and updates about your purchases.</li>
                        <li class="privecyListItem">Improve your shopping experience with personalized recommendations.
                        </li>
                        <li class="privecyListItem">Ensure website security and fraud prevention.</li>
                    </ul>
                </div>
                <p class="privecyParagraph">We do not sell, rent, or share your personal information with third parties,
                    except where required by law or to trusted service providers (like payment gateways or delivery
                    partners) who assist us in serving you.
                    Your data is stored securely, and you can request to update or delete your information at any time
                    by contacting us. By using our website, you agree to this Privacy Policy.</p>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>