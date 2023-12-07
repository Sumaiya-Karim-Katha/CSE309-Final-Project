<?php
// Connection with database
$servername = "localhost";
$username = "root";
$password = "";
$database = "webappdb2";

$conn = new mysqli($servername, $username, $password, $database);

// Connection check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch books from the database
$sqlAllbooks = "SELECT * FROM book";
$result = $conn->query($sqlAllbooks);

// Close the database connection after using all the results
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="allBooks.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <title>All Books</title>
</head>
<body>
<!-- navbar -->
<div class="navbar">
    <div class="navbar-container">
        <div class="logo-container"><h1 class="logo">Vocable</h1></div>
        <div class="menu-container">
            <ul class="menu-list">
                <a style="color: aliceblue;" href="../homepage/homepage.php"><li class="menu-list-item">Home</li></a>
                <a style="color: aliceblue;" href=""><li class="menu-list-item active">Books</li></li></a>
                <a style="color: aliceblue;" href="../contact/contact.php"><li class="menu-list-item">Contact</li></a>
            </ul>
        </div>
        <div class="profile-container">
            <img class="profile-picture" src="images/user.jpg" alt=""/>
            <div class="profile-text-container">
                <span class="profile-text">Profile</span>
                <i class="fas fa-caret-down" style="cursor: pointer;">
                    <div class="dropdown-menu">
                        <a href="../profile/profile.php">My Profile</a>
                        <a href="../index/index.html">Sign Out</a>
                    </div>
                </i>
            </div>
        </div>
    </div>
</div>
<!-- sidebar -->
<div class="sidebar"></div>

<!-- container -->
<div class="container">
    <div class="content-container">
        <!-- All container -->
        <div class="book-list-container" style="align-items: center;">
            <h1 class="book-list-title" style="text-align: relative;">All Books</h1>
            <div class="book-list-wrapper">
                <div class="book-list">
                    <?php
                    // include "searchbook.php";
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="book-list-item">
                            <img class="book-list-item-img" src="books-img/<?php echo $row['Image']; ?>" alt="<?php echo $row['Name']; ?>"/>
                            <span class="book-list-item-title"><?php echo $row['Name']; ?></span>
                            <button class="book-list-item-button">Learn Words</button>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <!-- <i class="fas fa-chevron-right arrow"></i> -->
            </div>
        </div>

    </div>
</div>
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"
></script>
</body>
</html>
