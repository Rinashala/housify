<?php
session_start();
session_destroy(); // fshin sessionin
header("Location: ../Log in/logIn.php"); // ridrejton në login
exit;
