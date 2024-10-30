<?php

function selectAllUsers()
{
    global $mysqli;
    $users_data = array();
    $stmt = $mysqli->prepare('SELECT * FROM users');
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    if ($result->num_rows !== 0) :
        while ($row = $result->fetch_assoc()) {
            $users_data[] = $row;
        }
    else:
        $_SESSION['message'] = ['type' => 'danger', 'msg' => 'There is no users information'];
    endif;

    return $users_data;
}

function loginUser($username = NULL, $password = NULL)
{
    global $mysqli;
    $stmt = $mysqli->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows !== 0) :
        while ($row = $result->fetch_assoc()) {
            $hash = $row['password'];
            if (password_verify($password, $hash)) {
                $_SESSION['user']['id'] = $row['id'];
                $_SESSION['user']['username'] = $row['username'];
                $_SESSION['user']['fname'] = $row['fname'];
                $_SESSION['user']['lname'] = $row['lname'];
                $_SESSION['user']['level'] = $row['level'];
                header('Location: ./index.php');
            } else {
                $_SESSION['message'] = ["type" => 'danger', 'msg' => 'Your username or password incorrect'];
            }
        }
    else:
        $_SESSION['message'] = ["type" => 'danger', 'msg' => 'Your username or password incorrect'];
    endif;

    $stmt->close();
}


function logoutUser()
{
    unset($_SESSION['user']);
    $_SESSION['message'] = ['type' => 'success', 'msg' => 'You successfully logged out'];
    header('Location: ./login.php');
    exit();
}



function registerUser($username = NULL, $fname = NULL, $lname = NULL, $password = NULL, $active = NULL)
{
    global $mysqli;
    $stmt = $mysqli->prepare('SELECT * FROM users WHERE username=?');
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0):
        $password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $mysqli->prepare('INSERT INTO users (username, fname, lname, password, active) VALUES (?,?,?,?,?)');
        $stmt->bind_param('ssssi', $username, $fname, $lname, $password, $active);
        $stmt->execute();
        header('Location: login.php');
    else:
        $_SESSION['message'] = ['type' => 'danger', 'msg' => 'Username you are trying to choose already in use'];
        header('Location: register.php');
        exit();
    endif;
    $stmt->close();
}

// function setupMessage() {
//     $_SESSION['message'] = ['type'=>'danger', 'msg'=>'This is the message'];
// }
