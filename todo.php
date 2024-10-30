<?php 
    $todos_of_current_user = selectAllTodo($current_user_id);

    if(isset($_POST['changeStatusBtn'])) {
        changeTodoStatus(
            $_POST['todo_id'],
            $_POST['status']
        );
    }
?>

<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="card-deck shadow p-3 mb-5 bg-white rounded">

        <?php 

            if(isset($todos_of_current_user)) {
                foreach ($todos_of_current_user as $todo) {

                    $id = $todo['id'];
                    $title = $todo['title'];
                    $description = $todo['description'];
                    $status = $todo['status'];
                    $deadline = date('d', $todo['deadline'] - time());
                    echo <<<END
                        <div class="card-to-close col-4">
                            <div class="card-custom">
                                <span class="close-icon" data-effect="fadeOut" data-target="#deleteBuffer" data-toggle="modal" onclick="transferToDeleteBuffer($id)">
                                    <img src="./img/close.png" alt="">
                                </span>
                                <h4 class="card-title">$title</h4>
                                <div class="card-body">
                                <p class="card-text card-description">$description</p>
                                <p class="card-text text-right">$status</p>
                                <p class="card-text"><small class="text-muted">$deadline days/day left</small></p>
                                <p class="text-right">
                                    <a data-toggle="modal" data-backdrop="false " data-target="#changeStatusModal" href="#" onclick="transferTodoID($id)">
                                        Change status
                                    </a>
                                </p>
                                </div>
                            </div>
                        </div>
                    END;
    
                }
            } else {
                echo '
                    <h2>No To-do Cards</h2>
                    You can add them in the second table
                ';
            }

        ?>


    </div>
</div>

