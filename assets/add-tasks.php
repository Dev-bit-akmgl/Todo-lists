

<?php
  require_once("./inc/top.php");
?>
    <body>

    <!-- <div class="alert alert-success custom">
       <p><strong>Success!</strong> data inserted Successfully</p> 
    </div> -->
    <!-- <div class="alert alert-danger custom">
       <p><strong>Note!</strong> data is not inserted</p> 
    </div> -->



        <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
            <?php
                     require_once("./inc/sidebar.php");
            ?>
            <!-- Page content wrapper -->
            <div id="page-content-wrapper">
                <!-- Top navigation -->
                <?php
                     require_once("./inc/navbar.php");
                ?>
                <!-- Page content-->
                <?php
                if(isset($_POST["btn-submit"])){
                      //creating variables of the form values
                        $title = htmlentities(mysqli_real_escape_string($conn, $_POST["title"]));;
                        $expireDate = htmlentities(mysqli_real_escape_string($conn, $_POST["expire-date"]));;
                        $description = htmlentities(mysqli_real_escape_string($conn, $_POST["description"]));;
                        $image = $_FILES["image"]["name"];
                        $imageTmp = $_FILES["image"]["tmp_name"];
                       $imginsrted = move_uploaded_file($imageTmp,"images/$image");

                    //    if($imginsrted){
                    //     //write qurey for insertion
                    //     $sql = "insert into tasks (title_db, description_db, expire_date_db,image_db) values ('$title', '$description', '$expireDate','$image')";

                    //     //run the qurey
                    //        $res = mysqli_query($conn, $sql);
   
                    //        //check the data been submitted or not
                    //        if($res){
                    //            echo '<div class="alert alert-success custom">
                    //                    <p><strong>Success!</strong> data inserted Successfully</p> 
                    //                 </div>';
                    //        }else{
                    //            echo '<div class="alert alert-danger custom">
                    //                     <p><strong>Note!</strong> data is not inserted</p> 
                    //                 </div>';
                    //        }
                    //    }else{
                    //     echo '<div class="alert alert-danger custom">
                    //             <p><strong>Note!</strong> Image is not uploaded</p> 
                    //         </div>';
                    //    }
                       

                     //write qurey for insertion
                        $sql = "insert into tasks (title_db, description_db, expire_date_db,image_db) values ('$title', '$description', '$expireDate','$image')";

                     //run the qurey
                        $res = mysqli_query($conn, $sql);

                        //check the data been submitted or not
                        if($res){
                            echo '<div class="alert alert-success custom">
                                    <p><strong>Success!</strong> data inserted Successfully</p> 
                                 </div>';
                        }else{
                            echo '<div class="alert alert-danger custom">
                                     <p><strong>Note!</strong> data is not inserted</p> 
                                 </div>';
                        }


                }
                ?>
                <div class="container-fluid">
                    <div class="col-11 my-4 shadow rounded">
                        <div class="col-12 text-center display-4 fw-bold pb-4 rounded"><?php echo $pageName; ?></div>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="col-12 d-flex">
                                <div class="col-3">
                                    <input type="text" class="col-12 rounded px-3 py-2 border border-secondary mx-5" placeholder="Home work" name="title">
                                </div>
                                <div class="col-3 mx-5">
                                    <input type="file" accept="image/*" class="form-control mx-5" name="image">
                                </div>
                                <div class="col-3">
                                    <input type="date" class="col-12 rounded px-3 py-2 border border-secondary mx-5" name="expire-date" value=<?php echo date("Y-m-d")?> min=<?php echo date("Y-m-d")?>>
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
                


        <!-- Bootstrap core Js -->
        <?php
             require_once("./inc/bottom.php");
        ?>
    </body>
    
</html>
