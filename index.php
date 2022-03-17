<?php

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electroshop</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/index.css">

</head>
<body>


    <div class="hero-header">
        <div class="hero-header-wrapper wrapper">

            <h2 class="hero-logo">Electroshop</h2>

            <nav class="hero-nav">

                <div class="page-navigation">
                    <a href="">Home</a>
                    <a href="">Products</a>
                    <a href="">Services</a>
                    <a href="">Support</a>
                </div>

                <div class="user-navigation">
                    <a href="login.php">Login</a>
                    <a href="signup.php">Signup</a>
                </div>

            </nav>

            <button class="open-nav"><i class="fa fa-bars"></i></button>

            <nav class="hero-mobile-nav">
                <div class="page-navigation">
                        <a href="">Home</a>
                        <a href="">Products</a>
                        <a href="">Services</a>
                        <a href="">Support</a>
                    </div>

                    <div class="user-navigation">
                        <a href="login.php">Login</a>
                        <a href="signup.php">Signup</a>
                    </div>
            </nav>

        </div>
    </div>


    <div class="hero-section">

        <div class="hero-img-bx-2">
            <img src="./images/niclas-illg-PlGxLYGhIDg-unsplash.jpg" alt="" class="img-active">
            <img src="./images/jainath-ponnala-jvHymbpto1E-unsplash.jpg" alt="">
            <img src="./images/soldering-gbbbc65514_1920.jpg" alt="">
        </div>

        <div class="hero-section-wrapper wrapper">     

            <div class="hero-headline-bx">
                <h1 class="hero-headline">Affordable Electronic Components for Your Next Project</h1>
                <p class="hero-subheadline">Arduino, Raspberry Pi and More</p>
                <a href="login.php" class="cta-btn">Shop Now</a>
            </div>

            <div class="hero-img-bx">

               <div class="hero-images">
                    <img src="./images/niclas-illg-PlGxLYGhIDg-unsplash.jpg" alt="" class="img-active">
                    <img src="./images/jainath-ponnala-jvHymbpto1E-unsplash.jpg" alt="">
                    <img src="./images/soldering-gbbbc65514_1920.jpg" alt="">
                </div>

               <div class="hero-btn-bx">
                   <button class="prev"><i class="fa fa-arrow-left"></i></button>
                   <button class="next"><i class="fa fa-arrow-right"></i></button>
               </div>
        
            </div>

        </div>

    </div>

    <script src="js/index.js"></script>



</body>
</html>