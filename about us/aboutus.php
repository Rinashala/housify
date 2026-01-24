<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" href="./style.css">
    <title>About us</title>
</head>

<body>

<?php include "../header.php"; ?>


<main class="dFlex">
    <div class="AboutUsContainer">
        <h1>ABOUT <span>US</span></h1>

        <p>
            WE ARE A DEDICATED REAL ESTATE AGENCY COMMITTED TO HELPING YOU FIND, BUY,
            OR SELL YOUR DREAM PROPERTY WITH EASE AND CONFIDENCE. OUR MISSION IS TO
            PROVIDE EXCEPTIONAL SERVICE, PERSONALIZED SOLUTIONS, AND PROFESSIONAL
            GUIDANCE THROUGH EVERY STEP OF YOUR REAL ESTATE JOURNEY. WITH A PASSION
            FOR EXCELLENCE AND A FOCUS ON TRUST, WE STRIVE TO TURN YOUR PROPERTY GOALS
            INTO REALITY. WHETHER YOU’RE LOOKING FOR YOUR FIRST HOME, AN INVESTMENT
            OPPORTUNITY, OR A PLACE TO GROW YOUR FUTURE, WE ARE HERE TO MAKE THE
            PROCESS SMOOTH, TRANSPARENT, AND SUCCESSFUL. EXPERIENCE RELIABILITY,
            EXPERTISE, AND COMMITMENT THAT SET US APART IN THE REAL ESTATE WORLD.
        </p>

        <div>
            <div class="contactBox">
                <h2>CONTACT US</h2>
                <h4>HOW CAN WE HELP YOU?</h4>

                <form method="post" action="">
                    <div class="textareaWrapper">
                        <textarea name="message" placeholder="CONTACT US HERE...."></textarea>
                        <button type="submit" class="sendBtn">SEND</button>
                    </div>
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    echo "<p style='margin-top:10px;'>Message sent successfully ✔</p>";
                }
                ?>
            </div>

            <img src="" alt="">
        </div>
    </div>

    <div>
        <img src="../assets/img/home2.png" alt="">
    </div>
</main>

<?php include "../footer.php"; ?>

</body>
</html>
