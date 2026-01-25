<?php
session_start();

// Merr errors nga loginValidate.php
$errors = $_SESSION['errors'] ?? [];
$old = $_SESSION['old'] ?? [];
unset($_SESSION['errors'], $_SESSION['old']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
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
        <form id="logInForm" action="loginValidate.php" method="POST">
            <img class="logo" src="../assets/img/logo housify.png" alt="logo">
            <h1 class="">LOG IN</h1>

            <input id="emailLogin" type="email" name="email" placeholder="Email"
                value="<?php echo htmlspecialchars($old['email'] ?? '') ?>">
            <p id="emailError" style="color:red;"><?php echo $errors['email'] ?? ''; ?></p>

            <input id="passwordLogin" type="password" name="password" placeholder="Password" minlength="8">
            <p id="passwordError" style="color:red;"><?php echo $errors['password'] ?? ''; ?></p>

            <p class="fSize12px">Don't have an account yet? <span><a href="../Sign in/signIn.php">Register
                        here.</a></span></p>
            <button type="submit" name="loginBtn" class="customButton">LOG IN</button>
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
