<?php
require_once ("./inc/top.php");
?>

<body class="body">
    <div class="col-3 border rounded shadow pt-5">
        <h1 class="text-center text-uppercase display-4 fw-bold"><?php echo $pageName; ?></h1>
        <div class="col-10 mx-auto">
            <form action="" method="post">
                <input type="email" class="form-control my-3" name="email" placeholder="Email" autofocus required>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password" id="pswd" required>
                    <button class="btn btn-outline-secondary" type="button" id="btn-pswd"><span class="fas fa-eye" id="eye-pswd"></span></button>
                </div>

                <button class="btn btn-primary mb-3" name="btn-login" value="submit">Login</button>
            </form>

            <p class="text-center">Don't have an account? <a href="signup.php">Register</a></p>
        </div>
    </div>
</body>

<?php
require_once ("./inc/bottom.php");
?>

<script>
     $("#btn-pswd").click(function() {
        $("#eye-pswd").toggleClass("fa-eye-slash");
        if($("#eye-pswd").hasClass("fa-eye-slash")) {
            $("#pswd").attr("type", "text");
        }else{
            $("#pswd").attr("type", "password");
        }
    });
</script>

