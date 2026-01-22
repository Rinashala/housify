<?php 
session_start();

if(!isset($_SESSION['username'])){
    header("Location: ../Log in/logIn.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="dFlex">
        <h5>HOUSIFY</h5>
        <div class="dFlex">
            <a href="../about us/aboutus.html">About us</a>
            <a href="../Properties Showcase/propertiesShowcase.html">Properties</a>
            <a href="../Log in/logIn.php">Log In</a>
        </div>
        <button class="customButton">CONTACT US</button>
    </header>
    <main>

        <div class="welcomeCard">
            <h1>WELCOME <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
            <div class="dFlex mainContent">
                <div>
                    <p><a href="../Properties Showcase/propertiesShowcase.html">GO TO PROPERTY SHOWCASE ></a></p>
                    <div class="PropertiesCard">
                        <img src="../assets/img/2.jpg" alt="Property Img">
                        <img src="../assets/img/3.jpg" alt="Property Img">
                        <img src="../assets/img/e.jpg" alt="Property Img">
                        <img src="../assets/img/m.jpg" alt="Property Img">
                    </div>
                </div>
                <div class="dscpCard">
                    <h2>WHO ARE WE?</h2>
                    <p>WE OFFER EXCEPTIONAL REAL ESTATE SERVICES, DEDICATED TO HELPING YOU FIND, BUY, OR SELL YOUR DREAM
                        PROPERTY WITH COMPLETE CONFIDENCE AND PEACE OF MIND. OUR APPROACH COMBINES INDUSTRY EXPERTISE,
                        PERSONALIZED SOLUTIONS, AND A DEEP UNDERSTANDING OF THE MARKET TO ENSURE EVERY CLIENT RECEIVES A
                        SEAMLESS AND REWARDING EXPERIENCE. FROM THE FIRST CONSULTATION TO THE FINAL SIGNATURE, WE GUIDE
                        YOU THROUGH EVERY STEP OF THE PROCESS WITH TRANSPARENCY, INTEGRITY, AND PROFESSIONAL CARE.
                        WHETHER YOU ARE SEARCHING FOR YOUR FIRST HOME, UPGRADING TO A LUXURY RESIDENCE, OR INVESTING IN
                        PROFITABLE REAL ESTATE OPPORTUNITIES, OUR TEAM IS COMMITTED TO TURNING YOUR VISION INTO REALITY.
                        WITH A STRONG FOCUS ON TRUST, QUALITY, AND LONG-TERM VALUE, WE STRIVE TO BUILD LASTING
                        RELATIONSHIPS AND DELIVER RESULTS THAT EXCEED EXPECTATIONS.</p>
                    <div class="dFlex">
                        <div>
                            <h3>80+</h3>
                            <p>HOMES</p>
                        </div>
                        <div>
                            <H3>500+</H3>
                            <P>APARTAMENTS</P>
                        </div>
                        <div>
                            <H3>20K+</H3>
                            <P>HAPPY CLIENTS</P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="secondPart">
            <div class="dscpCardTwo">
                <div>
                    <h1>DISCOVER YOUR PERFECT</h1>
                    <h1>PROPERTY MATCH </h1>
                </div>
                <p>WE OFFER EXCEPTIONAL REAL ESTATE SERVICES DESIGNED TO MAKE YOUR JOURNEY SIMPLE AND REWARDING. OUR
                    TEAM HELPS YOU FIND, BUY, OR SELL YOUR DREAM PROPERTY WITH TRUST AND CARE. EXPERIENCE
                    PROFESSIONALISM, PASSION, AND RESULTS IN EVERY STEP.</p>
            </div>
            <div class="learnMoreCard">
                <img class="imgHeight80vh" src="../assets/img/4428568b2344c517469b2f3fd6fba7a5.jpg" alt="">
                <div>
                    <img class="imgHeight40vh" src="../assets/img/2.jpg" alt="">
                    <img class="imgHeight40vh" src="../assets/img/3.jpg" alt="">
                </div>
                <img class="imgHeight80vh dnone" src="../assets/img/4.jpg" alt="">
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="footer-container">

            <div class="footer-section">
                <h3>Follow Us</h3>
                <div class="social-links">
                    <a href="#"><img src="../assets/icons/icons8-whatsapp-48.png" alt="WhatsApp"></a>
                    <a href="#"><img src="../assets/icons/icons8-facebook-48.png" alt="Facebook"></a>
                    <a href="#"><img src="../assets/icons/icons8-tiktok-24.png" alt="Tiktok"></a>
                </div>
            </div>

            <div class="footer-section center">
                <h3>Rina & Suela</h3>
                <p>All rights reserved © 2025</p>
            </div>

            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>Email: <span>RINASUELA@GMAIL.COM</span></p>
            </div>

        </div>
    </footer>
</body>

</html>
