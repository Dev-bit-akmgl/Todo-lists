<?php
if (isset($_GET["action"]) && $_GET["action"] == "logout") {
    session_destroy();
    header("location:index.php");
}

if(!isset($_SESSION["isLoggedIn"])){
    header("location:index.php");
}
?>