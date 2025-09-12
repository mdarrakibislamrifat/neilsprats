<?php
/**
 * Template Name: About Us
 * Description: Custom About Us page template for Astra Child theme.
 */

get_header();
?>

<main id="AboutUsPage">
    <!-- ====about banner====== -->
    <div id="aboutBanner">
        <div class="whoWeAre">
            <div class="whoWeAreWrapper">
                <div class="heading">
                    <img src="http://localhost/neilsPart/wp-content/uploads/2025/09/Group-1000006018.png" alt="png"
                        width="76" height="62">
                    <h2 class="titleOne">Who We Are</h2>
                </div>
                <p class="description"> We’re more than just a brand — we’re a team dedicated to bringing you quality,
                    trust, and innovation. Our goal is to make your experience simple, enjoyable, and meaningful.</p>
                <div class="happy_Customer">
                    <div class="avatar_Wrapper">
                        <div class="avatar"><img src="" alt=""></div>
                        <div class="avatar"><img src="" alt=""></div>
                        <div class="avatar"><img src="" alt=""></div>
                        <div class="avatar"><img src="" alt=""></div>
                        <div class="avatar"><img src="" alt=""></div>
                    </div>
                    <span>2k. Happy Customer</span>
                </div>
            </div>
        </div>
    </div>
    <!-- =======about brand======= -->
    <section id="aboutBrand">
        <div class="aboutBrandHeader">
            <div class="aboutBrandimage">
                <img src="http://localhost/neilsPart/wp-content/uploads/2025/09/Group-1000006018.png" alt="png">
            </div>
            <div class="aboutBrandText">
                <h3 class="aboutBrandTitle">Behind the Brand</h3>
                <ul class="aboutBrandTextList">
                    <li class="aboutBrandTextListItem">Every product we create carries a story of passion, dedication,
                        and trust — built to bring you the best experience.</li>
                    <li class="aboutBrandTextListItem">Our journey is fueled by innovation and a promise to deliver
                        quality that truly makes a difference.</li>
                    <li class="aboutBrandTextListItem">Behind every detail lies our commitment to authenticity, care,
                        and customer-first values.</li>
                </ul>
            </div>
        </div>
        <div class="aboutBrandIconWrapper">
            <?php
                get_template_part('template-parts/partner-logos-section');
            ?>
        </div>
    </section>
    <!-- =====trusted by client===== -->
    <section id="trustedByClient" class="">
        <div class="trustWrapper">
            <div class="trustHeader">
                <div class="headerIcon">
                    <img src="http://localhost/neilsPart/wp-content/uploads/2025/09/Group-1000006018.png" alt="">
                </div>
                <h3>Trusted by Clients</h3>
                <p>Hear directly from clients whose spaces have been elevated through elegant, connected technology.
                </p>
            </div>
            <div class="testimonialWraper">
                <div class="slideWrapper">
                    <div class="slide">
                        <figure>
                            <figcaption>“ This guide made my shopping so much easier! I knew exactly what to look
                                for and avoided wasting money on the wrong product. Highly recommend! ”</figcaption>
                            <div class="perrsonWrapper">
                                <div class="person">
                                    <div class="avatar">
                                        <img src="" alt="">
                                    </div>
                                    <div class="details">
                                        <h6 class="personName">Pronob biswas</h6>
                                        <span class="personCountery">Bangladesh</span>
                                        <div class="reating">*****</div>
                                    </div>
                                </div>
                                <div class="indicatorWrapper">
                                    <div class="indicator"></div>
                                    <div class="indicator"></div>
                                    <div class="indicator"></div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>

<style>

</style>