<?php

session_start();
$name = $_SESSION["usersession"];

$servername = "localhost";
$username = "root";
$password = "";
$database = "cse309_final_project";

$conn = new mysqli($servername, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newPassword = $_POST["newPassword"];
    $confirmPassword = $_POST["confirmPassword"];

    if (!password_match($newPassword, $confirmPassword)) {
        http_response_code(400);
        echo "Passwords do not match.";
        exit();
    }

 
    $updateQuery = "UPDATE user SET userPass = '$newPassword' WHERE userName = '$name'";

    $conn->query($updateQuery);

    header("Location: profile.php");
    exit();
}

function password_match($password1, $password2) {
    return $password1 === $password2;
}
?>