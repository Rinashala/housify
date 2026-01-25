<?php
session_start();
include_once "../includes/db.php";
include_once "../includes/users.php";

if (isset($_POST['loginBtn'])) {

    $db = new Database();
    $conn = $db->getConnection();
    $user = new User($conn);

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if ($user->login($email, $password)) {
        header("Location: ../home/home.php");
        exit;
    } else {
        $_SESSION['errors']['email'] = "Email ose password gabim";
        $_SESSION['old']['email'] = $email;
        header("Location: logIn.php");
        exit;
    }
}
