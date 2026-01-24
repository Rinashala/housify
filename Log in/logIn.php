<?php
session_start();

// Nëse përdoruesi është i loguar, ridrejtim në home
if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit;
}

// Merr error messages nga validate
$errors = [];
if (isset($_SESSION['errors'])) {
    $errors = $_SESSION['errors'];
    unset($_SESSION['errors']);
}

// Ruaj vlerat e vjetra në input
$old = [];
if (isset($_SESSION['old'])) {
    $old = $_SESSION['old'];
    unset($_SESSION['old']);
}
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
<?php include "../header.php"; ?>


<main>
    <form id="logInForm" action="logInValidate.php" method="POST">
        <img class="logo" src="../assets/img/logo housify.png" alt="logo">
        <h1>LOG IN</h1>

        <input id="emailLogin" type="email" name="email" placeholder="Email" value="<?php echo isset($old['email']) ? $old['email'] : ''; ?>">
        <p id="emailError" class="error"><?php echo isset($errors['email']) ? $errors['email'] : ''; ?></p>

        <input id="passwordLogin" type="password" name="password" placeholder="Password">
        <p id="passwordError" class="error"><?php echo isset($errors['password']) ? $errors['password'] : ''; ?></p>

        <p class="fSize12px">Don't have an account yet? <span><a href="../Sign in/signIn.php">Register here.</a></span></p>
        <button type="submit" name="loginBtn" class="customButton">LOG IN</button>
        <p class="successfullySubmited"></p>
    </form>
</main>

<?php include "../footer.php"; ?>

</body>
</html>
