<?php
// Connection with database
$servername = "localhost";
$username = "root";
$password = "";
$database = "cse309_final_project";

$conn = new mysqli($servername, $username, $password, $database);


// Fetch books from the database
$sqlClassics = "SELECT * FROM book WHERE Genre = 'classics'";
$resultClassics = $conn->query($sqlClassics);

$sqlFantasy = "SELECT * FROM book WHERE Genre = 'fantasy'";
$resultFantasy = $conn->query($sqlFantasy);

$sqlMystery = "SELECT * FROM book WHERE Genre = 'mystery'";
$resultMystery = $conn->query($sqlMystery);

$sqlRomance = "SELECT * FROM book WHERE Genre = 'romance'";
$resultRomance = $conn->query($sqlRomance);

// Close the database connection after using all the results
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="homepage.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <title>Homepage</title>
</head>
<body>
<!-- navbar -->
<div class="navbar">
    <div class="navbar-container">
        <div class="logo-container"><h1 class="logo">Vocable</h1></div>
        <div class="menu-container">
            <ul class="menu-list">
                <li class="menu-list-item active">Home</li>
                <li class="menu-list-item">Books</li>
                <li class="menu-list-item">Contact</li>
            </ul>
        </div>
        <!-- search bar -->

        <!-- profile -->
        <div class="profile-container">
            <img class="profile-picture" src="images/user.jpg" alt=""/>
            <div class="profile-text-container">
                <span class="profile-text">Profile</span>
                <i class="fas fa-caret-down" style="cursor: pointer;">
                    <div class="dropdown-menu">
                        <a href="#">My Profile</a>
                        <a href="#">Sign Out</a>
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
        <div
                class="featured-content"
                style="
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0), #6b808b),
              url(images/Elevate\ Your\ Reading\ Experience\,\ One\ Word\ at\ a\ Time!.png);
            background-size: cover;
          "
        >
            <!-- <h1>The ABC Murders</h1>
            <p style="margin-bottom: 10px">Agatha Christie</p>

            <button class="featured-button">Start Learning Words</button> -->
        </div>

        <!-- Classics container -->
        <div class="book-list-container">
            <h1 class="book-list-title">Classics</h1>
            <div class="book-list-wrapper">
                <div class="book-list">
                    <?php
                    while ($row = mysqli_fetch_assoc($resultClassics)) {
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
                <i class="fas fa-chevron-right arrow"></i>
            </div>
        </div>

        <!-- Fantasy container -->
        <div class="book-list-container">
            <h1 class="book-list-title">Fantasy</h1>
            <div class="book-list-wrapper">
                <div class="book-list">
                    <?php
                    while ($row = mysqli_fetch_assoc($resultFantasy)) {
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
                <i class="fas fa-chevron-right arrow"></i>
            </div>
        </div>

        <!-- Mystery container -->
        <div class="book-list-container">
            <h1 class="book-list-title">Mystery</h1>
            <div class="book-list-wrapper">
                <div class="book-list">
                    <?php
                    while ($row = mysqli_fetch_assoc($resultMystery)) {
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
                <i class="fas fa-chevron-right arrow"></i>
            </div>
        </div>

        <!-- Romance container -->
        <div class="book-list-container">
            <h1 class="book-list-title">Romance</h1>
            <div class="book-list-wrapper">
                <div class="book-list">
                    <?php
                    while ($row = mysqli_fetch_assoc($resultRomance)) {
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
                <i class="fas fa-chevron-right arrow"></i>
            </div>
        </div>

    </div>
</div>

<script
src="homepage.js"></script>
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"
></script>
</body>
</html>
