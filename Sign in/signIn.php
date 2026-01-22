<?php
session_start();

// Nëse përdoruesi është i loguar, ridrejtim në home
if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit;
}

// Merr gabimet nga validate
$errors = [];
if (isset($_SESSION['errors'])) {
    $errors = $_SESSION['errors'];
    unset($_SESSION['errors']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="dFlex">
    <h5>HOUSIFY</h5>
    <div class="dFlex">
        <a href="">About us</a>
        <a href="">Properties</a>
        <a href="">Services</a>
    </div>
    <button class="customButton">CONTACT US</button>
</header>
<main>
    <form id="signInForm" action="signInValidate.php" method="POST">
        <img class="logo" src="../assets/img/logo housify.png" alt="logo">
        <h1>SIGN IN</h1>

        <input id="fullName" type="text" name="fullName" placeholder="Your full name.." value="<?php echo isset($_SESSION['old']['fullName']) ? $_SESSION['old']['fullName'] : ''; ?>">
        <p id="nameError" class="error"><?php echo isset($errors['fullName']) ? $errors['fullName'] : ''; ?></p>

        <input id="emailSignIn" type="email" name="email" placeholder="Email" value="<?php echo isset($_SESSION['old']['email']) ? $_SESSION['old']['email'] : ''; ?>">
        <p id="emailError" class="error"><?php echo isset($errors['email']) ? $errors['email'] : ''; ?></p>

        <input id="passwordSignIn" type="password" name="password" placeholder="Password">
        <p id="passwordError" class="error"><?php echo isset($errors['password']) ? $errors['password'] : ''; ?></p>

        <input id="ConfirmPasswordSignIn" type="password" name="confirmPassword" placeholder="Confirm password">
        <p id="ConfirmPasswordError" class="error"><?php echo isset($errors['confirmPassword']) ? $errors['confirmPassword'] : ''; ?></p>

        <p class="fSize12px">Already have an account? <span><a href="../Log in/logIn.php">Log in here.</a></span></p>
        <button type="submit" name="signInBtn" class="customButton">SIGN IN</button>
        <div id="formSuccess" class="success" role="status" aria-live="polite"></div>
    </form>
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
