<?php
include('./includes/functions.php');

if (isset($_POST['logInBtn'])) {
    loginUser($_POST['username'], $_POST['password']);
};
?>

<?php if (isset($_SESSION['message'])) : ?>
    <div class="fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="alert alert-<?php echo $_SESSION['message']['type'] ?> alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION['message']['msg'] ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php unset($_SESSION['message']);
endif; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('./themes/header.php') ?>
</head>

<body>

    <div class="container container-custom mt-5">
        <form action='' method='post'>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name='username' placeholder="Enter username ">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name='password' placeholder="Password">
            </div>
            <button name='logInBtn' class="btn btn-primary">Login</button>
            <a href="register.php">Register</a>
        </form>
    </div>

    <?php include('./themes/footer.php') ?>

</body>

</html>