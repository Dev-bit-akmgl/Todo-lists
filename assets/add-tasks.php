

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
                <?php
                if(isset($_POST["btn-submit"])){
                      //creating variables of the form values
                        $title = $_POST["title"];
                        $expireDate = $_POST["expire-date"];
                        $description = $_POST["description"];

                     //write qurey for insertion
                        $sql = "insert into tasks (title_db, description_db, expire_date_db) values ('$title', '$description', '$expireDate')";

                     //run the qurey
                        $res = mysqli_query($conn, $sql);

                        //check the data been submitted or not
                        if($res){
                            echo "Data inserted successfully";
                        }else{
                            echo "Not inserted";
                        }


                }
                ?>
                <div class="container-fluid">
                    <div class="col-11 my-4 shadow rounded">
                        <div class="col-12 text-center display-4 fw-bold pb-4 rounded"><?php echo $pageName; ?></div>
                        <form action="" method="post" >
                            <div class="col-12 d-flex">
                                <div class="col-3">
                                    <input type="text" class="col-12 rounded px-3 py-2 border border-secondary mx-5" placeholder="Home work" name="title">
                                </div>
                                <div class="col-3 mx-5">
                                    <input type="file" class="form-control mx-5" name="image">
                                </div>
                                <div class="col-3">
                                    <input type="date" class="col-12 rounded px-3 py-2 border border-secondary mx-5" name="expire-date">
                                </div>
                            </div> 
                            <div class="col-12">
                                <textarea name="description"  class="col-10 rounded mt-2 mx-5 px-3" placeholder="Type description..."></textarea>
                            </div>
                            
                            <button class="btn btn-primary mt-2 mx-5 mb-4" name="btn-submit" value="submit">Submit</button>
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
