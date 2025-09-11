<?php
/**
 * Template Name: Luxury Living Template
 */
ob_start();
wp_head();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
</head>

<body>


    <div>

        <!-- navbar -->
        <header class="header">


            <div class="top-upper">
                <!-- left side -->
                <div class="phone-number">5065609 - 895649</div>

                <div class="nav-icon">
                    <i class="fas fa-search"></i>
                    <i class="fas fa-shopping-cart"></i>

                </div>
            </div>

            <nav class="nav-container">
                <div class="logo">

                    <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt=""></span>
                </div>

                <ul class="nav-menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Help & Contact</a></li>
                </ul>

                <div class="nav-actions">

                    <button class="login-btn">Log In</button>
                </div>
            </nav>
        </header>


        <!-- banner -->
        <section id="banner">

            <div class="bannerWrapper">
                <!-- ====banner text content==== -->
                <div class="banner-text">
                    <h1 class="banner-heading-text">Think <span class="highlight">Smart</span>, Live Safe </h1>
                    <p class="banner-paragraph-text"> Start your smart home journey.Enjoy complete home control with
                        intelligent systems that protect,
                        automate, and streamline your daily life.</p>

                    <ul class="banner-features">
                        <li class="feature-item"><span><img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/vector.png"
                                    alt=""></span>
                            Intelligent Control</li>
                        <li class="feature-item"><span><img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/vector.png"
                                    alt=""></span>
                            Personalized Settings</li>
                        <li class="feature-item"><span><img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/vector.png"
                                    alt=""></span>
                            Hands-Free Voice Commands</li>
                    </ul>

                    <button class="explore-btn">Explore More <span><i
                                class="fa-solid fa-arrow-right"></i></span></button>
                </div>
                <!-- ===yellow section=== -->
                <div class="bannerFooter">
                    <div class="banner_Footer_Item rounded1">
                        <div class="under-banner-item">
                            <span>50+</span>
                            <p>Smart Product for your Home.</p>
                        </div>
                        <div class="under-banner-item">
                            <span>5+</span>
                            <p>Years of Experience.</p>
                        </div>
                        <div class="under-banner-item">
                            <span>2000+</span>
                            <p>Happy Clients.</p>
                        </div>
                    </div>
                    <div class="banner_Footer_Item rounded2">
                        <div class="under-banner-item">
                            <span>Number</span>
                            <p>02654654</p>
                        </div>
                        <div class="under-banner-item">
                            <span>Location</span>
                            <p>New York, USA</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========Browse by categories========= -->
        <section id="browseByCategory">
            <div class="browseByCategory_wrapper">
                <div class="browseByCategoryHeader">
                    <div class="iconBox">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/iconOne.png" alt=""></span>
                    </div>
                    <h2>Browse by categories</h2>
                </div>
                <div class="categoryWrapper">
                    <div class="categoryItemWrapper">
                        <div class="categoryItem">
                            <div class="icon">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon1.png" alt="png">
                            </div>
                            <div class="card">
                                <h3> Smart Security Systems</h3>
                                <p> Protect your home with advanced cameras, smart locks, and real-time alerts.</p>
                            </div>
                        </div>
                        <div class="categoryItem">
                            <div class="icon">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon2.png" alt="png">
                            </div>
                            <div class="card">
                                <h3> Smart Security Systems</h3>
                                <p> Protect your home with advanced cameras, smart locks, and real-time alerts.</p>
                            </div>
                        </div>
                        <div class="categoryItem">
                            <div class="icon">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon3.png" alt="png">
                            </div>
                            <div class="card">
                                <h3> Smart Security Systems</h3>
                                <p> Protect your home with advanced cameras, smart locks, and real-time alerts.</p>
                            </div>
                        </div>
                        <div class="categoryItem">
                            <div class="icon">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon4.png" alt="png">
                            </div>
                            <div class="card">
                                <h3> Smart Security Systems</h3>
                                <p> Protect your home with advanced cameras, smart locks, and real-time alerts.</p>
                            </div>
                        </div>
                        <div class="categoryItem">
                            <div class="icon">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon5.png" alt="png">
                            </div>
                            <div class="card">
                                <h3> Smart Security Systems</h3>
                                <p> Protect your home with advanced cameras, smart locks, and real-time alerts.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =====Navigate Your Purchase Like a Pro===== -->
        <section id="sectionThree">
            <div class="setionThreeWrapper">
                <aside class="pictureSide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/iconOne.png" alt=""></span>
                    <h2>Navigate Your Purchase Like a Pro</h2>
                    <p>Make smart, confident buying decisions with our easy step-by-step guide. From choosing the right
                        features to understanding warranties, we help you shop like a seasoned expert.</p>
                    <div class="pictureWrapper">
                        <div class="row1">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img01.png" alt="png">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img02.png" alt="png">
                        </div>
                        <div class="row2">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img03.png" alt="png">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img04.png" alt="png">
                        </div>
                    </div>
                </aside>
                <aside class="listSide">
                    <div class="listWrapper">
                        <ul>
                            <li>
                                <div class="listItem">
                                    <span class="number">01</span>
                                    <div>
                                        <h4>Identify Your Needs</h4>
                                        <p>Understand what problem you want to solve or what feature is most important
                                            for you. Make a list of your key requirements.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="listItem">
                                    <span class="number">01</span>
                                    <div>
                                        <h4>Identify Your Needs</h4>
                                        <p>Understand what problem you want to solve or what feature is most important
                                            for you. Make a list of your key requirements.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="listItem">
                                    <span class="number">01</span>
                                    <div>
                                        <h4>Identify Your Needs</h4>
                                        <p>Understand what problem you want to solve or what feature is most important
                                            for you. Make a list of your key requirements.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="listItem">
                                    <span class="number">01</span>
                                    <div>
                                        <h4>Identify Your Needs</h4>
                                        <p>Understand what problem you want to solve or what feature is most important
                                            for you. Make a list of your key requirements.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="listItem">
                                    <span class="number">01</span>
                                    <div>
                                        <h4>Identify Your Needs</h4>
                                        <p>Understand what problem you want to solve or what feature is most important
                                            for you. Make a list of your key requirements.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </section>
        <!-- =====Explore Our Smart Products====== -->
        <section id="smartProducts">
            <div class="exploreWrapper">
                <div class="exploreProductHeader">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/iconOne.png" alt="">
                    <h3>Explore Our Smart Products</h3>
                </div>
                <div class="productWrapper">
                    <div class="exploreItem">
                        <div class="productImageBox">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product1.png" alt="png">
                        </div>
                        <div class="productDesc">
                            <h5 class="productTitle">Smazy Security Cam</h5>
                            <div class="productReting"><span>4.9</span>*****</div>
                            <div class="actionRow">
                                <div class="productPrice">
                                    <span>$179.99 </span>
                                </div>
                                <div class="buyBtn">
                                    <button>Buy Now →</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="exploreItem">
                        <div class="productImageBox">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product2.png" alt="png">
                        </div>
                        <div class="productDesc">
                            <h5 class="productTitle">Smazy Security Cam</h5>
                            <div class="productReting"><span>4.9</span>*****</div>
                            <div class="actionRow">
                                <div class="productPrice">
                                    <span>$179.99 </span>
                                </div>
                                <div class="buyBtn">
                                    <button>Buy Now →</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="exploreItem">
                        <div class="productImageBox">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product3.png" alt="png">
                        </div>
                        <div class="productDesc">
                            <h5 class="productTitle">Smazy Security Cam</h5>
                            <div class="productReting"><span>4.9</span>*****</div>
                            <div class="actionRow">
                                <div class="productPrice">
                                    <span>$179.99 </span>
                                </div>
                                <div class="buyBtn">
                                    <button>Buy Now →</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =====trusted by client===== -->
        <section id="trustedByClient">
            <div class="trustWrapper">
                <div class="trustHeader">
                    <div class="headerIcon">
                        <img src="./iconOne.png" alt="">
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
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/person.png"
                                                alt="png">
                                        </div>
                                        <div class="details">
                                            <h6 class="personName">Sarah </h6>
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
        <!-- =====partner brand icon ===== -->
        <section id="partnerIcon">
            <div class="iconWrapper">
                <div class="iconRow">
                    <div><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon01.png" alt="icon"></div>
                    <div><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon02.png" alt="icon"></div>
                    <div><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon03.png" alt="icon"></div>
                    <div><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon04.png" alt="icon"></div>
                </div>
                <div class="iconRow">
                    <div><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon05.png" alt="icon"></div>
                    <div><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon06.png" alt="icon"></div>
                    <div><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon07.png" alt="icon"></div>
                    <div><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon08.png" alt="icon"></div>
                </div>
            </div>
        </section>



    </div>



















    <footer>
        <p>&copy; 2025 Smart Home Solutions. All rights reserved.</p>
    </footer>
</body>

</html>
<footer>
    <?php wp_footer(); ?>
</footer>