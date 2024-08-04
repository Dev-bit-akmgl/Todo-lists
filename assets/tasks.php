<?php
require_once ("./inc/top.php");


if (isset($_POST["btn-del"])) {
    $id = $_POST["del-id"];
    $sqldel = "delete from tasks where id = '$id'";
    $result = mysqli_query($conn, $sqldel);
    if ($result) {
        echo '<div class="alert alert-success msg custom">
                    <strong>Success</strong> Data is deleted
                  </div>';
    } else {
        echo '<div class="alert alert-danger msg custom">
                        <strong>Warning</strong> Data is not deleted
                    </div>';
    }
}

    if(isset($_GET["type"]) && $_GET["type"] != ""){
        $type = htmlentities(mysqli_real_escape_string($conn, $_GET["type"]));
        $id = htmlentities(mysqli_real_escape_string($conn, $_GET["id"]));
            if($type == "complete"){
                $sql = "update tasks set status_db = '1' where id = '$id'";
            }
            if($type == "pending"){
                $sql = "update tasks set status_db = '0' where id = '$id'";
            }
            $resultStatus = mysqli_query($conn, $sql);
            if($resultStatus){
                echo '<div class="alert alert-success msg custom">
                <strong>Success</strong> Status is updated.
            </div>';
            } else{
                echo '<div class="alert alert-danger msg custom">
                <strong>Note!</strong> Status is not updated.
            </div>';
            }

        }
?>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <?php
        require_once ("./inc/sidebar.php");
        ?>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <?php
            require_once ("./inc/navbar.php");
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
                            $i = 1;
                            $sql = "select * from tasks order by id desc";
                            $res = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($res) > 0) {
                                while ($row = mysqli_fetch_assoc($res)) {

                                    ?>
                                    <tr class="text-center">
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $row["id"] ?></td>
                                        <td><?php echo $row["title_db"] ?></td>
                                        <td><?php echo $row["description_db"] ?></td>
                                        <td><img src="images/<?php echo $row["image_db"] ?>" alt=" " width="60px"></td>
                                        <td><?php echo date("D. d-M-Y", strtotime($row["added_date_db"])) ?></td>
                                        <td><?php echo date("D. d-M-Y", strtotime($row["expire_date_db"])) ?></td>
                                        <td> <?php
                                        if ($row["status_db"] == 1) {
                                            echo '<a href="?type=pending&id=' . $row["id"] . '" class="btn btn-sm btn-success">Completed</a>';
                                        }
                                        else {
                                            echo '<a href="?type=complete&id=' . $row["id"] . '" class="btn btn-sm btn-warning">Pending</a>';
                                        }
                                        ?></td>
                                        <td>
                                            <form action="" method="post">
                                                <input type="hidden" name="del-id" value="<?php echo $row["id"] ?>"></input>
                                                <button class="btn btn-sm btn-danger" name="btn-del"><span class="fas fa-trash"
                                                        onclick="return confirm('Are you sure?')"></span></button>
                                            </form>
                                            <a href="edit-tasks.php?id=<?php echo $row["id"] ?>"
                                                class="btn btn-sm btn-info mt-2"><span class="fas fa-pen"></span>
                                        </td>
                                    </tr>



                                    <?php
                                    $i++;
                                }
                            } else {
                                echo '<div class="alert alert-warning">
                                            <strong>Warning!</strong>data not found
                                            </div> ';
                            }

                            if (isset($_SESSION["msg"])) {
                                echo $_SESSION["msg"];
                                unset($_SESSION["msg"]);
                            }

                            if (isset($_SESSION["msg1"])) {
                                echo $_SESSION["msg1"];
                                unset($_SESSION["msg1"]);
                            }

                            ?>




                        </tbody>
                    </table>


                </div>
            </div>


        </div>
    </div>
    </div>
    <!-- Bootstrap core JS-->
    <?php
    require_once ("./inc/bottom.php");
    ?>
</body>

</html>