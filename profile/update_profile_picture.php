<?php
session_start();
$name = $_SESSION["usersession"];

$servername = "localhost";
$username = "root";
$password = "";
$database = "cse309_final_project";

$conn = new mysqli($servername, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle image upload
    $targetFile = 'profile_images/' . basename($_FILES["profileImage"]["name"]);

    // Validate file type if needed

    if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $targetFile)) {
        // Update the database with the new file name
        $newImageName = $_FILES["profileImage"]["name"];
        // Replace 'current_user_id' with the actual user ID
        $updateQuery = "UPDATE `user` SET `userImage`='$newImageName' WHERE `userName`='$name'";

        // Execute the update query using your database connection ($conn)
        $conn->query($updateQuery);

        // Redirect back to the profile page or display a success message
        header("Location: profile.php");
        exit();
    } else {
        // Handle errors during file upload
        echo "Error uploading file.";
    }
}
?>