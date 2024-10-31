<?php
include('./includes/functions.php');

if (isset($_GET['id'])) {
    $selected_user = selectUser($_GET['id']);
}

if (isset($_POST['updateUserBtn'])) {
    if ($_POST['password-showcase'] !== '') {
        updateUser(
            $_POST['fname'],
            $_POST['lname'],
            $_POST['username'],
            password_hash($_POST['password-showcase'], PASSWORD_DEFAULT),
            $_GET['id']
        );
    } else {
        updateUser(
            $_POST['fname'],
            $_POST['lname'],
            $_POST['username'],
            $_POST['password'],
            $_GET['id']
        );
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('./themes/header.php') ?>
</head>

<body>

    <?php include('./themes/navbar.php') ?>

    <div class="container container-custom mt-5">
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

        <div class="container">
            <form action='' method='post'>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="fname">First Name</label>
                            <input type="text" class="form-control" id="fname" name='fname' value="<?php echo $selected_user['fname'] ?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="lname">Last Name</label>
                            <input type="text" class="form-control" id="lname" name='lname' value="<?php echo $selected_user['lname'] ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name='username' value="<?php echo $selected_user['username'] ?>">
                </div>
                <div class="form-group">
                    <label for="password-showcase">Password</label>
                    <input type="password" class="form-control" id="password-showcase" name='password-showcase' value="">
                </div>

                <input type="hidden" name="password" id="password" value="<?php echo $password ?>">
                <button name='updateUserBtn' class="btn btn-primary">Update</button>

            </form>
        </div>

        <?php include('./themes/footer.php') ?>

</body>

</html>