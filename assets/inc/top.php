<?php
    require_once("config.php");
    $pageName = ucwords($pageName = str_replace("-", " ", $pageName = basename($_SERVER["PHP_SELF"], ".php")));

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
        <style>
            .active-page{
                color: #636464;
                background-color: #e5e5e5;
            }
        </style>
    </head>