<?php
// session_start(); // aktivizoje kur t'fillosh me login
?>
<header class="dFlex">
    <a href="../home/home.php">
        <h5>HOUSIFY</h5>
    </a>

    <div class="dFlex">
        <a href="../about us/aboutus.php">About us</a>
        <a href="../Properties Showcase/propertiesShowcase.php">Properties</a>

        <?php if (isset($_SESSION['username'])): ?>
            <a href="../logout.php">Logout</a>
        <?php else: ?>
            <a href="../Log in/logIn.php">Log In</a>
        <?php endif; ?>
    </div>

    <button class="customButton">CONTACT US</button>
</header>