<?php
session_start();
include_once "../includes/db.php";
include_once "../includes/users.php";

if (isset($_POST['signInBtn'])) {

    $db = new Database();
    $conn = $db->getConnection();
    $user = new User($conn);

    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm = trim($_POST['confirmPassword']);
 
    
    $errors = [];

    if ($password !== $confirm) {
        $errors['confirmPassword'] = "Passwords do not match.";
    }

    if ($user->emailExists($email)) {
        $errors['email'] = "Email already registered!";
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['old'] = compact("username", "email");
        header("Location: signIn.php");
        exit;
    }

    $user->register($username, $email, $password);
if (empty($username)) {
    $errors['username'] = "Username is required.";
}

if (empty($email)) {
    $errors['email'] = "Email is required.";
}

if (strlen($password) < 8) {
    $errors['password'] = "Password must be at least 8 characters.";
}

    $_SESSION['username'] = $username;
    header("Location: ../home/home.php");
    exit;

}

