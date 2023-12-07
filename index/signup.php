<?php

$link = mysqli_connect('localhost', 'root', '', 'cse309_final_project');

$name_insert = $_POST["userNameSU"];
$email_insert = $_POST["userEmailSU"];
$pass_insert = $_POST["userPassSU"];

// Insert data into the database
$sql = "INSERT INTO user (userName, userEmail, userPass) VALUES ('$name_insert', '$email_insert', '$pass_insert')";

if (mysqli_query($link, $sql) == TRUE) {
    echo '<script>alert("User Has Been Added");</script>';
} else {
    echo '<script>alert("Error Occured");</script> ';
}
mysqli_close($link);
?>