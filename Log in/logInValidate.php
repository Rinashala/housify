<!--  -->
<?php
session_start();

if (isset($_POST['loginBtn'])) {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Ruaj vlerat e vjetra në input
    $_SESSION['old'] = [
        'email' => $email
    ];

    $errors = [];

    // Demo validation (pa database)
    // RegEx për email
    $emailRegex = "/^[^\s@]+@[^\s@]+\.[^\s@]+$/";

    if (!preg_match($emailRegex, $email)) {
        $errors['email'] = "Please enter a valid email address.";
    }

    // Demo: password duhet të jetë të paktën 6 karaktere
    if (strlen($password) < 6) {
        $errors['password'] = "Password must be at least 6 characters.";
    }

    // Demo credentials (hardcoded)
    $correctEmail = "rina@gmail.com";
    $correctPassword = "123456";

    if (empty($errors)) {
        if ($email === $correctEmail && $password === $correctPassword) {
            $_SESSION['username'] = "Rina"; // Ruaj emrin për home
            unset($_SESSION['old']);
            header("Location: home.php");
            exit;
        } else {
            $errors['email'] = "Email ose password gabim ❌";
        }
    }

    $_SESSION['errors'] = $errors;
    header("Location: logIn.php");
    exit;

} else {
    header("Location: logIn.php");
    exit;
}
