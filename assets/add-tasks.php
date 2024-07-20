

<?php
  require_once("./inc/top.php");
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
                    <div class="col-12 my-4 shadow rounded">
                        <div class="col-12 text-center display-4 fw-bold pb-4 rounded"><?php echo $pageName; ?></div>
                        <form action="">
                        <input type="text" name="title" class="col-3 px-3 py-2 mx-5 rounded" placeholder="Home Work">
                        <input type="file" name="image" class="col-3 px-3 py-2 mx-5 rounded" placeholder="">
                        <input type="date" name="expire-date" class="col-3 px-3 py-2 mx-5 rounded ">
                        <textarea name="describe" id="" class="col-11 rounded px-2 mx-5 mt-4" placeholder="Type Description..." ></textarea>
                         <button class="btn btn-primary mt-3 mx-5 mb-4">Submit</button>   
                    
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <?php
             require_once("./inc/bottom.php");
        ?>
    </body>
</html>
