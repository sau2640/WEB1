<?php
setcookie("user","John Doe", time() + 3600,"/");
setcookie("language","English", time() + 3600,"/");

if (isset($_COOKIE["user"]) && isset($_COOKIE["language"])){
    $user = $_COOKIE["user"];
    $language = $_COOKIE["language"];
    echo "Welcome,$user!<br>";
    echo "Your preferred language is $language.<br>";
}else {
    echo "Cookies are not set.";
}
if (isset($_COOKIE["user"])){
    setcookie("user","", time() + 3600,"/");
    echo "The user cookie has been deleted.";
}
?>