<?php
// Connection with database
session_start();
$name = $_SESSION["usersession"];

$servername = "localhost";
$username = "root";
$password = "";
$database = "cse309_final_project";

$conn = new mysqli($servername, $username, $password, $database);

// Fetch books from the database
$queryAllBook = "SELECT * FROM book";
$resultAllBook = $conn->query($queryAllBook);

// Close the database connection after using all the results
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="allBooks.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <title>Book list</title>
</head>

<body>
    <!-- navbar -->
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <h1 class="logo">Vocable</h1>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <li class="menu-list-item"
                        style="display: block; padding: 10px; text-decoration: none; color: white; border-radius: 5px;">
                        <a href="../homepage/homepage.php"
                            style="display: block; padding: 10px; text-decoration: none; color: white; border-radius: 5px;">
                            Home
                        </a>
                    </li>
                    <li class="menu-list-item"
                        style="display: block; padding: 10px; text-decoration: none; color: white; border-radius: 5px;">
                        <a href="#"
                            style="display: block; padding: 10px; text-decoration: none; color: white; border-radius: 5px;">
                            All Books
                        </a>
                    </li>
                    <li class="menu-list-item"
                        style="display: block; padding: 10px; text-decoration: none; color: white; border-radius: 5px;">
                        <a href="../contact/contact.html"
                            style="display: block; padding: 10px; text-decoration: none; color: white; border-radius: 5px;">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>


            <!-- profile -->
            <div class="profile-container">
                <div class="profile-text-container">
                    <?php
                    echo '<h4> <span class="profile-text">Welcome ' . $name .
                        ' <i class="fas fa-caret-down" style="cursor: pointer;">
                    <div class="dropdown-menu">
                        <a href="../profile/profile.php">My Profile</a>
                        <a href="../index.html">Sign Out</a>
                    </div></i></span></h4>';
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- sidebar -->
    <div class="sidebar"></div>

    <!-- container -->
    <div class="container">
        <div class="content-container">
            <div class="book-list-container">
                <h1 class="book-list-title">All Books</h1>
                <div class="book-list-wrapper">
                    <div class="book-list">
                        <?php
                        // include "searchbook.php";
                        while ($row = mysqli_fetch_assoc($resultAllBook)) {
                            ?>
                            <div class="book-list-item">
                                <img class="book-list-item-img" src="../admin/PHP/BookImages/<?php echo $row['Image']; ?>"
                                    alt="<?php echo $row['Name']; ?>" />
                                <span class="book-list-item-title">
                                    <?php echo $row['Name']; ?>
                                </span>
                                <form action="../flashcard/flashcard.php" method="POST">
                                    <input type="hidden" name="selectedisbn" value="<?php echo $row['Isbn']; ?>">
                                    <button type="submit" class="book-list-item-button">Learn Words</button>
                                </form>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>