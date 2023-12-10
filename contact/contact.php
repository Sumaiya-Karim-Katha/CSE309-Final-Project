<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$feedback = $_POST['feedback'];
// 4 variables taken to store the info submitted before sending to database.

echo "Name: " . $name;
echo " Email: " . $email;
echo " Phone: " . $phone;
echo " Feedback: " . $feedback;

$link = mysqli_connect('localhost', 'root', '', 'cse309_final_project');
// established connection with my server
// xmapp use kori tai localhost, 

if ($link === false) {
    die('Error establishing connection' . mysqli_connect_error());
}

$query = "INSERT INTO contactinfo (`Name`, `Email`, `Phone`, `Feedback`) VALUES ('$name', '$email', '$phone', '$feedback')";
// query to add data to DB

if (mysqli_query($link, $query)) {
    echo "Entry Added!";
} else {
    echo "Problem occured" . mysqli_error($link);
}

mysqli_close($link);
header("location: ../homepage/homepage.php");
// close connection with the database
?>