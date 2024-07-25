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
                <div class="col-11 mx-auto my-4 shadow rounded">
                        <div class="col-12 text-center display-4 fw-bold pb-4 rounded"><?php echo $pageName; ?></div>
                        <table class="table table-striped">
                            <thead>
                                <tr class="text-center bg-dark text-white">
                                    <th>Serial No#</th>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Added Date</th>
                                    <th>Expiry Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    
                                ?>
                                <tr class="text-center"> 
                                    <td>Serial No#</td>
                                    <td>ID</td>
                                    <td>Title</td>
                                    <td>Description</td>
                                    <td>Image</td>
                                    <td>Added Date</td>
                                    <td>Expiry Date</td>
                                    <td>Status</td>
                                    <td>Action</td>
                                </tr>
                            </tbody>
                        </table>
                    
                    
                </div>
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
