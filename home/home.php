<?php
session_start();

if (!isset($_SESSION['username'])) {
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

<?php include $_SERVER['DOCUMENT_ROOT'] . '/housify/includes/header.php'; ?>

<main>
    <div class="welcomeCard">
        <h1>WELCOME <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>

        <div class="dFlex mainContent">
            <div>
                <p><a href="../Properties Showcase/propertiesShowcase.php">GO TO PROPERTY SHOWCASE ></a></p>
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
                    PROPERTY WITH COMPLETE CONFIDENCE AND PEACE OF MIND...</p>

                <div class="dFlex">
                    <div>
                        <h3>80+</h3>
                        <p>HOMES</p>
                    </div>
                    <div>
                        <h3>500+</h3>
                        <p>APARTMENTS</p>
                    </div>
                    <div>
                        <h3>20K+</h3>
                        <p>HAPPY CLIENTS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="secondPart">
        <!-- pjesa tjetër e faqes -->
    </div>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/housify/includes/footer.php'; ?>

</body>
</html>
