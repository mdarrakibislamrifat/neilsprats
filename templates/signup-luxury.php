<?php
/**
 * Template Name: Signup Page Template
 */
ob_start();
wp_head();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">



</head>


<body>
    <div class="container1">
        <div class="login-container">

            <!-- Left Side - Illustration -->
            <div class="left-side">
                <div class="man-picture">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/login.png" alt="Illustration">

                </div>
            </div>

            <!-- Right Side - Login Form -->
            <div class="right-side">
                <div class="login-form">
                    <div class="form-header">
                        <h1><span class="sign-up">Sign Up</span> To Your Account</h1>
                        <p>Welcome! Sign up to create a new account.</p>
                    </div>

                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <div class="input-container">

                                <input type="text" id="name" class="form-input" placeholder="Enter Name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <div class="input-container">

                                <input type="email" id="email" class="form-input" placeholder="Enter Email" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <div class="input-container">

                                <input type="text" id="address" class="form-input" placeholder="Enter Address" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="input-container">


                                <input type="password" id="password" class="form-input" placeholder="Enter Password"
                                    required>

                            </div>
                            <div class="forgot-password">
                                <a href="#">Forgot Password ?</a>
                            </div>
                        </div>



                        <button type="button" class="google-signin">
                            <div class="google-icon"></div>
                            Google
                        </button>

                        <div class="signup-link">
                            Don't have an account? <a href="#">Sign Up</a>
                        </div>
                        <button type="submit" class="sign-up-btn">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>


</html>