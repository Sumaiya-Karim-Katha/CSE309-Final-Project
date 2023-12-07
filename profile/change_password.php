<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newPassword = $_POST["newPassword"];
    $confirmPassword = $_POST["confirmPassword"];

    if (!password_match($newPassword, $confirmPassword)) {
        http_response_code(400);
        echo "Passwords do not match.";
        exit();
    }

    // Update the database with the new password
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
    // Replace 'current_user_id' with the actual user ID
    $updateQuery = "UPDATE users SET password = '$hashedPassword' WHERE user_id = 'current_user_id'";

    // Execute the update query using your database connection ($conn)
    // $conn->query($updateQuery);

    // Redirect back to the profile page or display a success message
    header("Location: profile.php");
    exit();
}

function password_match($password1, $password2) {
    return $password1 === $password2;
}
?>