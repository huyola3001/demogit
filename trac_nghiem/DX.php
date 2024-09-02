<?php 
session_start();
unset($_SESSION['tk']);
header('location:Form_DN.php');
?>