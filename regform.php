<?php
session_start();
$_SESSION['username']='mayuri_rane';
$_SESSION['email']='mayuri@example.com';
echo "welcome, " . $_SESSION['username'] . "<br>";
echo "Your email is: " . $_SESSION['email'] . "<br>";
$_SESSION['email'] = 'new_email@example.com';
echo "Upadated email: " . $_SESSION['email'] . "<br>";
unset($_SESSION['email']);
echo "Email unset: " . isset($_SESSION['email']) ?"Email is set.":"Email is not set";
session_destroy();
echo "session destroyed.";
?>
