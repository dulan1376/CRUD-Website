<?php
session_start(); #To start the session of the user
if (!isset($_SESSION['User'])) {
    header("Location: login.php?error=invaliduser");
    exit;
}
