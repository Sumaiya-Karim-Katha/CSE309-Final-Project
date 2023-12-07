<?php

$link = mysqli_connect('localhost', 'root', '', 'webappdb');
$name = $_POST['userName'];
$password = $_POST['userPass'];
$role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_STRING);

if ($role == 'user') {
    $query = "SELECT * FROM `user` WHERE userName='$name' AND userPass='$password'";
    $result = mysqli_query($link, $query);

    if ($result->num_rows > 0) {
        header('Location: homepage2.html');
        exit();
    } else {
        echo '<script>alert("Wrong User credentials");</script>';
        exit();
    }
} elseif ($role == 'admin') {
    $query2 = "SELECT * FROM `admin` WHERE admin_name='$name' AND admin_pass='$password'";
    $result2 = mysqli_query($link, $query2);

    if ($result2->num_rows > 0) {
        header('Location: admin.html');
        exit();
    } else {
        echo '<script>alert("Wrong Admin credentials");</script>';
        exit();
    }
    
}
mysqli_close($link);
?>