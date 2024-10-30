<?php

function createTodo($title = NULL, $description = NULL, $deadline = NULL, $status = NULL, $user_id)
{
    global $mysqli;
    $stmt = $mysqli->prepare('INSERT INTO todo (title, description, deadline, status, user_id) VALUES(?,?,?,?,?)');
    $stmt->bind_param('ssssi', $title, $description, $deadline, $status, $user_id);
    $stmt->execute();
    $stmt->close();
    $_SESSION['message'] = ['type' => 'success', 'msg' => 'You successfully added To-Do Card'];
    header('Location: ./index.php');
    exit();
}



function selectAllTodo($id)
{
    global $mysqli;
    $todo_data = [];
    $stmt = $mysqli->prepare('SELECT * FROM todo WHERE user_id=?');
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();


    if ($result->num_rows !== 0) :
        while ($row = $result->fetch_assoc()) {
            array_push($todo_data, $row);
        }
        return $todo_data;
    else:
        $_SESSION['message'] = ['type' => 'danger', 'msg' => 'No records'];
    endif;

    $stmt->close();
}




function changeTodoStatus($id, $status = NULL)
{
    global $mysqli;
    $stmt = $mysqli->prepare('UPDATE todo SET status=? WHERE id=?');
    $stmt->bind_param('si', $status, $id);
    $stmt->execute();
    $stmt->close();
    header('Location: ./index.php');
    $_SESSION['message'] = ['type' => 'success', 'msg' => 'Status successfully updated'];
    exit();
}



function deleteMultipleTodo($ids)
{
    global $mysqli;
    $todoToDelete = json_decode($ids);

    foreach ($todoToDelete as $todo_id) {
        $stmt = $mysqli->prepare('DELETE FROM todo WHERE id=?');
        $stmt->bind_param('i', $todo_id);
        $stmt->execute();
        $stmt->close();
    }
    header('Location: ./users.php');
}
