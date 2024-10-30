<?php
    include('./includes/functions.php');

    if (isset($_POST['registerBtn'])) {
        registerUser($_POST['username'],
                     $_POST['fname'],
                     $_POST['lname'],
                     $_POST['password'],
                     1
                    );
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('./themes/header.php')?>
</head>
<body>

<<<<<<< HEAD
<<<<<<< HEAD
    <?php include('./themes/message.php')?>

    <div class="container container-custom mt-5">
=======
=======
>>>>>>> 16c4ee7 (session user, login, register features; navbar, alert added)
    <?php if(isset($_SESSION['message'])) :?>
    <div class="fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="alert alert-<?php echo $_SESSION['message']['type']?> alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION['message']['msg']?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php unset($_SESSION['message']);
        endif;?>

    <div class="container">
<<<<<<< HEAD
>>>>>>> 16c4ee7 (session user, login, register features; navbar, alert added)
=======
>>>>>>> 16c4ee7 (session user, login, register features; navbar, alert added)
        <form action='' method='post'>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="fname">First name</label>
                        <input type="text" class="form-control" id="fname" name='fname' placeholder="Enter your first name">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="lname">Last name</label>
                        <input type="text" class="form-control" id="lname" name='lname' placeholder="Enter your last name">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name='username' placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name='password' placeholder="Enter password">
            </div>

            <button name='registerBtn' class="btn btn-primary">Register</button>
            <a href="login.php">Log In</a>

        </form>
    </div>

    <?php include('./themes/footer.php')?>

</body>
</html>