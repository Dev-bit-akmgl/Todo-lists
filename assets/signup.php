<?php
require_once ("./inc/top.php");
?>

<body class="body">
    <div class="col-3 border rounded shadow pt-5">
        <h1 class="text-center text-uppercase display-4 fw-bold"><?php echo $pageName; ?></h1>
        <div class="col-10 mx-auto">
            <form action="" method="post">
                <input type="text" class="form-control my-3" name="username" placeholder="Username">
                <input type="email" class="form-control my-3" name="email" placeholder="Email" id="email">
                <input type="email" class="form-control my-3" name="re-email" placeholder="Retype Email" id="re-email">
                <input type="password" class="form-control my-3" name="password" placeholder="Password">
                <input type="password" class="form-control my-3" name="re-password" placeholder="Retype Password">

                <button class="btn btn-primary mb-3" name="btn-register" value="submit" id="btn">Register</button>
            </form>

            <p class="text-center">Already have an account? <a href="index.php">Login</a></p>
        </div>
    </div>
</body>

<?php
require_once ("./inc/bottom.php");
?>