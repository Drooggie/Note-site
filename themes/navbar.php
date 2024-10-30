<?php
if (!isset($_SESSION['user'])) {
  header('Location: ./login.php');
}

$fname = $_SESSION['user']['fname'];
$lname = $_SESSION['user']['lname'];
$current_user_id = $_SESSION['user']['id'];
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

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
  <div class="container">
    <a class="navbar-brand" href="index.php ">
      <img src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">
      Main
    </a>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="users.php">Users</a>
        </li>
      </ul>
      <span class="navbar-text">
        Welcome <?php echo $fname . ' ' . $lname ?>
        (<a href="./logout.php">Logout User</a>)
      </span>
    </div>
  </div>
</nav>