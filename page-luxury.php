<?php
/**
 * Template Name: Luxury Living Template
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ILI Luxury Navbar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Playfair Display, sans-serif;
        background-color: #f5f5f5;
    }

    .header {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 10;
        background: rgba(8, 8, 8, 0.33);
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.4);

    }





    .nav-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 5px 50px;
        position: relative;
        z-index: 2;
    }

    .logo {
        display: flex;
        align-items: center;
        color: #333;
        font-weight: 600;
        font-size: 20px;
    }

    .logo i {
        font-size: 28px;
        margin-right: 10px;
        color: #ffffffff;
    }

    .nav-menu {
        display: flex;
        list-style: none;
    }

    .nav-menu li {
        margin: 0 15px;
    }

    .nav-menu a {
        text-decoration: none;
        color: #ffffffff;
        font-weight: 500;
        font-size: 16px;
        transition: color 0.3s ease;
    }

    .nav-menu a:hover {
        color: #8B4513;
    }

    .nav-actions {
        display: flex;
        align-items: center;
    }

    .nav-actions i {
        font-size: 20px;
        color: #333;
        margin-left: 20px;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .nav-actions i:hover {
        color: #8B4513;
    }

    .login-btn {
        margin-left: 20px;
        padding: 8px 20px;
        background-color: transparent;
        color: #ffffffff;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
        border: 2px solid #d4af37;
        border-radius: 5px;

    }

    .login-btn:hover {
        background-color: #333;
        color: white;
    }

    .top-upper {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 5px 60px;
        color: white;


    }

    .nav-icon i {
        margin-right: 15px;
        font-size: 20px;
    }

    .banner-img img {
        width: 100%;
        height: auto;
        display: block;
    }

    .banner-text {
        position: absolute;
        text-align: left;
        height: 405px;
        width: 831px;
        top: 50%;
        left: 30%;
        transform: translate(-50%, -50%);
        background: rgba(53, 52, 52, 0.2);
        backdrop-filter: blur(2px);
        -webkit-backdrop-filter: blur(5px);
        padding: 20px 30px;
        border-radius: 15px;
        color: white;
        text-align: center;
        z-index: 20;

    }

    .banner-heading-text {
        text-align: start;
        font-size: 64px;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .highlight {
        color: #d4af37;
        font-weight: bold;
    }

    .banner-paragraph-text {
        text-align: start;
        font-size: 13px;

    }

    .banner-features {
        text-align: start;
        font-size: 13px;
        margin-top: 20px;
        list-style: none;
        padding: 0;
    }


    .banner-features li img {
        width: 15px;
    }

    .feature-item {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .feature-item img {
        margin-right: 10px;
    }

    .explore-btn {
        position: absolute;
        bottom: 80px;
        left: 20px;
        padding: 15px 20px;
        background-color: transparent;
        color: white;
        border: 1px solid white;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .under-banner-text {
        display: flex;
        width: 1000px;
        height: 59px;
        padding: 40px 100px;
        background-color: #D4AF37;
        margin-left: 100px;
        gap: 150px;
        border-top-right-radius: 50px;
        border-bottom-left-radius: 50px;
        position: relative;
        top: -30px;
        z-index: 25;

    }








    /* Responsive adjustments */
    @media (max-width: 768px) {
        .nav-container {
            padding: 20px;
        }

        .nav-menu {
            display: none;
        }

        .phone-number {
            display: none;
        }
    }
    </style>
</head>

<body>

    <div>

        <!-- navbar -->
        <div>

            <header class="header">


                <div class="top-upper">
                    <!-- left side -->
                    <div class="phone-number">5065609 - 895649</div>

                    <div class="nav-icon">
                        <i class="fas fa-search"></i>
                        <i class="fas fa-shopping-cart"></i>

                    </div>
                </div>

                <div class="nav-container">
                    <div class="logo">

                        <span><img src="http://localhost/neilsprats/wp-content/uploads/2025/09/Frame-2147227099.png"
                                alt=""></span>
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
                </div>
            </header>



        </div>


        <!-- banner -->
        <div class="banner-img">
            <img src="http://localhost/neilsprats/wp-content/uploads/2025/09/Frame-2147226808-1.png"
                alt="Luxury Banner">

            <div class="banner-text">
                <h1 class="banner-heading-text">Think <span class="highlight">Smart</span>, Live Safe </h1>
                <p class="banner-paragraph-text"> Start your smart home journey.Enjoy complete home control with
                    intelligent systems that protect,
                    automate, and streamline your daily life.</p>

                <ul class="banner-features">
                    <li class="feature-item"><span><img
                                src="http://localhost/neilsprats/wp-content/uploads/2025/09/Vector.png" alt=""></span>
                        Intelligent Control</li>
                    <li class="feature-item"><span><img
                                src="http://localhost/neilsprats/wp-content/uploads/2025/09/Vector.png" alt=""></span>
                        Personalized Settings</li>
                    <li class="feature-item"><span><img
                                src="http://localhost/neilsprats/wp-content/uploads/2025/09/Vector.png" alt=""></span>
                        Hands-Free Voice Commands</li>
                </ul>

                <button class="explore-btn">Explore More <span><i class="fa-solid fa-arrow-right"
                            style="color: #ffffff;"></i></span></button>
            </div>
        </div>

        <!-- under banner some text -->
        <div>
            <div class="under-banner-text">
                <div>
                    50+
                    Smart Product for your Home.
                </div>

                <div>
                    5+
                    Years of Experience.
                </div>
                <div>
                    2000+
                    2400+Happy Clients.
                </div>
            </div>
            <div class="under-banner-text2">
                <div>

                </div>
            </div>
        </div>


    </div>

</body>

</html>