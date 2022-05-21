<!--
IT21167300
Sumanasekara PDM
MLB_08.02_3
 -->

<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("location: login.php");} // if the user is not logged in this will redirect the user to login

?>