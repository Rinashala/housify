<?php
session_start();

// Nëse përdoruesi është i loguar, ridrejtim në home
if (isset($_SESSION['username'])) {
    header("Location: ../home/home.php");
    exit;
}

// Merr gabimet dhe old data nga validate
$errors = $_SESSION['errors'] ?? [];
$old = $_SESSION['old'] ?? [];

unset($_SESSION['errors'], $_SESSION['old']);
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

<?php include "../header.php"; ?>

<main>
    <form id="signInForm" action="signInValidate.php" method="POST">
        <img class="logo" src="../assets/img/logo housify.png" alt="logo">
        <h1>SIGN IN</h1>

        <!-- USERNAME -->
        <input 
            type="text" 
            name="username" 
            placeholder="Your full name.." 
            required
            value="<?php echo htmlspecialchars($old['username'] ?? ''); ?>"
        >
        <p class="error"><?php echo $errors['username'] ?? ''; ?></p>

        <!-- EMAIL -->
        <input 
            type="email" 
            name="email" 
            placeholder="Email" 
            required
            value="<?php echo htmlspecialchars($old['email'] ?? ''); ?>"
        >
        <p class="error"><?php echo $errors['email'] ?? ''; ?></p>

        <!-- PASSWORD -->
        <input 
            type="password" 
            name="password" 
            placeholder="Password" 
            minlength="8"
            required
        >
        <p class="error"><?php echo $errors['password'] ?? ''; ?></p>

        <!-- CONFIRM PASSWORD -->
        <input 
            type="password" 
            name="confirmPassword" 
            placeholder="Confirm password" 
            minlength="8"
            required
        >
        <p class="error"><?php echo $errors['confirmPassword'] ?? ''; ?></p>

        <p class="fSize12px">
            Already have an account?
            <span><a href="../Log in/logIn.php">Log in here.</a></span>
        </p>

        <button type="submit" name="signInBtn" class="customButton">
            SIGN IN
        </button>
    </form>
</main>

<?php include "../footer.php"; ?>

</body>
</html>
