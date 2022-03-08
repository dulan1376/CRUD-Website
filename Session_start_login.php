<?php
session_start();

if(isset($_SESSION['User']))
{
    echo "Welcome" . $_SESSION['User'];
    echo '<a href="logout.php?Logout">Logout</a>';
}