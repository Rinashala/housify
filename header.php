
<header class="dFlex">
    <a href="../home/home.php">
        <h5>HOUSIFY</h5>
    </a>

    <div class="dFlex">
        <a href="../about us/aboutus.php">About us</a>
        <a href="../Properties Showcase/propertiesShowcase.php">Properties</a>

<?php if(isset($_SESSION['username'])): ?>
    <a href="../Log in/logOut.php">Logout</a>
<?php else: ?>
    <a href="../Log in/logIn.php">Login</a>
<?php endif; ?>

    </div>

    <button class="customButton">CONTACT US</button>
</header>