<?php
session_start();
session_unset();
unset($_SESSION);
session_destroy(); #To destroy the session of the user before logging out
header("Location: login.php");
?>
