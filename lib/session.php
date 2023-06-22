<?php

session_set_cookie_params([
    'lifetime' => 3600,
    'path' => '/',
    'domain' => '.techtrendzdev.local',
    'httponly' => true
]);

session_start();

function adminOnly() {
    if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'admin') {
        // Rediriger vers la page de connexion
        header("Location: ../login.php");
        exit();
    }
}