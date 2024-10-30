<?php
    include('./includes/functions.php');

    $users = selectAllUsers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List with Login</title>
    <?php include('./themes/header.php')?>
</head>
<body>

    <?php include('./themes/navbar.php')?>

    <div class="container container-custom">
        <h1>List of Users</h1>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($users as $user):
                        echo '
                            <tr>
                                <th scope="row">'.$user['id'].'</th>
                                <td>'.$user['fname'].'</td>
                                <td>'.$user['lname'].'</td>
                                <td>'.$user['username'].'</td>
                            </tr>
                        ';
                    endforeach;
                ?>
            </tbody>
        </table>
    </div>

    <?php include('./themes/footer.php')?>
</body>
</html>