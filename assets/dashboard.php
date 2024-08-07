

<?php
  require_once("./inc/top.php");
 
  
if(isset($_SESSION["isLoggedIn"])){

    if (isset($_SESSION["logIn"])) {
        echo $_SESSION["logIn"];
        unset($_SESSION["logIn"]);
    }

}

?>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <?php
                     require_once("./inc/sidebar.php");
            ?>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <?php
                     require_once("./inc/navbar.php");
                ?>
                <!-- Page content-->
                <div class="container-fluid">
                    <h1 class="mt-4"><?php echo $pageName; ?></h1>
                    
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <?php
             require_once("./inc/bottom.php");
        ?>
    </body>
</html>
