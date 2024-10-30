<?php
include('./includes/functions.php');

$users = selectAllUsers();

if (isset($_POST['createTodoBtn'])) {
    $deadline = (time() + $_POST['deadline'] * 24 * 60 * 60);
    createTodo(
        $_POST['title'],
        $_POST['description'],
        $deadline,
        'ongoing',
        $_POST['user_id']
    );
}

// if(isset($_POST['alertBtn'])) {
//     setupMessage();
//     print_r($_SESSION['message']);
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List with Login</title>
    <?php include('./themes/header.php') ?>
</head>

<body>
    <?php include('./themes/navbar.php') ?>


    <div class="container container-custom">
        <h1 class='mb-5'>To Do List</h1>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="main-tab" data-toggle="tab" href="#main" role="tab" aria-controls="main" aria-selected="true">Main</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="create-tab" data-toggle="tab" href="#create" role="tab" aria-controls="create" aria-selected="false">Create</a>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">

            <?php include('./todo.php') ?>

            <?php include('createTodo.php') ?>

            <!-- Modal -->
            <?php include('./modal.php') ?>

        </div>

    </div>


    <!-- <form action="" method='post'>
        <button class="btn btn-primary" name='alertBtn'>
            Toggle alert
        </button>
    </form> -->


    <?php include('./themes/footer.php') ?>
</body>

</html>