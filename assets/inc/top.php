<?php
    session_start();

    require_once("config.php");
    require_once("../assets/logout.php");
    $pageName = ucwords($pageName = str_replace("-", " ", $pageName = basename($_SERVER["PHP_SELF"], ".php")));
    if($pageName == "Index"){
        $pageName = "login";
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo $pageName; ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="./css/styles.css">
        <link rel="stylesheet" href="./css/custom-style.css">
        <link rel="stylesheet" href="./css/login-signup.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>
    