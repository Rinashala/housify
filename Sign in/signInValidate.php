<?php
session_start();

if (isset($_POST['signInBtn'])) {

    $fullName = trim($_POST['fullName']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirmPassword']);

    // Ruaj vlerat e vjetra për të mbushur form-in përsëri
    $_SESSION['old'] = [
        'fullName' => $fullName,
        'email' => $email
    ];

    $errors = [];

    // RegEx nga JS versioni
    $nameRegex = "/^[a-zA-Z0-9._-]{3,20}$/";
    $emailRegex = "/^[^\s@]+@[^\s@]+\.[^\s@]+$/";
    $passwordRegex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&._-])[A-Za-z\d@$!%*?&._-]{8,}$/";

    // Validation
    if (!preg_match($nameRegex, $fullName)) {
        $errors['fullName'] = "Your username must be at least 3 characters.";
    }

    if (!preg_match($emailRegex, $email)) {
        $errors['email'] = "Please enter a valid email address.";
    }

    if (!preg_match($passwordRegex, $password)) {
        $errors['password'] = "Password must be at least 8 characters and include uppercase, lowercase, number & special character.";
    }

    if ($password !== $confirmPassword) {
        $errors['confirmPassword'] = "Passwords do not match.";
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header("Location: signIn.php");
        exit;
    }

    // Nëse gjithçka është e saktë
    $_SESSION['username'] = $fullName;
    unset($_SESSION['old']);
    header("Location: home.php");
    exit;

} else {
    header("Location: signIn.php");
    exit;
}
