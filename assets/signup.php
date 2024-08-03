<?php
require_once ("./inc/top.php");
?>

<body class="body">
    <div class="col-3 border rounded shadow pt-5">
        <h1 class="text-center text-uppercase display-4 fw-bold"><?php echo $pageName; ?></h1>
        <div class="col-10 mx-auto">
            <form action="" method="post" class="formgroup">
                <input type="text" class="form-control my-3" name="username" placeholder="Username" autofocus required>
                <div>
                    <input type="email" class="form-control my-3 email" name="email" placeholder="Email" id="email"
                        required>

                </div>
                <div>
                    <input type="email" class="form-control my-3 re-email" name="re-email" placeholder="Retype Email"
                        id="re-email" required>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password" id="pswd"
                        required>
                    <button class="btn btn-outline-secondary" type="button" id="btn-pswd"><span class="fas fa-eye"
                            id="eye-pswd"></span></button>
                </div>

                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Retype Password" name="re-password"
                        id="re-pswd" required>
                    <button class="btn btn-outline-secondary" type="button" id="btn-repswd"><span class="fas fa-eye"
                            id="eye-repswd"></span></button>
                </div>

                <button class="btn btn-primary mb-3" name="btn-register" value="submit" id="btn">Register</button>
            </form>


            <?php

            if (isset($_POST["btn-register"])) {
                $name = htmlentities(mysqli_real_escape_string($conn, $_POST["username"]));
                $email = htmlentities(mysqli_real_escape_string($conn, $_POST["email"]));
                $password = htmlentities(mysqli_real_escape_string($conn, $_POST["password"]));

                $sqlreg = "insert into users(name_db, email_db, password_db) values('$name', '$email', '$password')";
                $resreg = mysqli_query($conn, $sqlreg);

                if ($resreg) {
                    $_SESSION["msg2"] = '<div class="alert alert-success custom">
                                    <p><strong>Success!</strong>Account is created</p> 
                                 </div>';
                }

                header("location:add-tasks.php");

            }
            ?>



            <p class="text-center">Already have an account? <a href="index.php">Login</a></p>
        </div>
    </div>
</body>



<?php
require_once ("./inc/bottom.php");
?>

<script>
    $("#btn-pswd").click(function () {
        $("#eye-pswd").toggleClass("fa-eye-slash");
        if ($("#eye-pswd").hasClass("fa-eye-slash")) {
            $("#pswd").attr("type", "text");
        } else {
            $("#pswd").attr("type", "password");
        }
    });
    $("#btn-repswd").click(function () {
        $("#eye-repswd").toggleClass("fa-eye-slash");
        if ($("#eye-repswd").hasClass("fa-eye-slash")) {
            $("#re-pswd").attr("type", "text");
        } else {
            $("#re-pswd").attr("type", "password");
        }
    });

    //check whether the password and retype password are the same
    $("#pswd, #re-pswd").keyup(function () {


        if ($("#pswd").val() != $("#re-pswd").val()) {
            $("#pswd, #re-pswd").css({ "border": "3px solid #FF5555" });

        }
        if ($("#pswd").val() == $("#re-pswd").val()) {
            $("#pswd, #re-pswd").css({ "border": "3px solid #57AB57" });
        }
    });


    //check whether the email and retype email are the same
    $("#email, #re-email").keyup(function () {


        if ($("#email").val() != $("#re-email").val()) {
            $("#email, #re-email").css({ "border": "3px solid #FF5555" });

        }
        if ($("#email").val() == $("#re-email").val()) {
            $("#email, #re-email").css({ "border": "3px solid #57AB57" });
        }
    });



</script>