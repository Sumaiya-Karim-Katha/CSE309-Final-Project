<?php
// Establish a connection to your database
$servername = "localhost";  // Change this if your MySQL server is on a different host
$username = "root";         // Your MySQL username
$password = "";             // Your MySQL password
$database = "your_database_name"; // Your database name

$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch books from the database (replace 'books' with your actual table name)
$sql = "SELECT * FROM books";
$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="homepage.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
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
        <div class="search-container">
          <input type="text" class="search-bar" placeholder="Search Books" />
          <button class="search-button">
            <i class="fas fa-search"></i>
          </button>
        </div>
        <!-- profile -->
        <div class="profile-container">
          <img class="profile-picture" src="images/user.jpg" alt="" />
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
          <h1>The ABC Murders</h1>
          <p style="margin-bottom: 10px">Agatha Christie</p>

          <button class="featured-button">Start Learning Words</button>
        </div>
        <div class="book-list-container">
          <h1 class="book-list-title">Newest Addition</h1>
          <div class="book-list-wrapper">
            <div class="book-list">
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
            </div>
          </div>
          <i class="fas fa-chevron-right arrow"></i>
        </div>
        <!--  -->
        <div class="book-list-container">
          <h1 class="book-list-title">Classics</h1>
          <div class="book-list-wrapper">
            <div class="book-list">
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
            </div>
          </div>
          <i class="fas fa-chevron-right arrow"></i>
        </div>
        <!--  -->
        <div class="book-list-container">
          <h1 class="book-list-title">Fantasy</h1>
          <div class="book-list-wrapper">
            <div class="book-list">
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
            </div>
          </div>
          <i class="fas fa-chevron-right arrow"></i>
        </div>
        <!--  -->
        <div class="book-list-container">
          <h1 class="book-list-title">Mystery</h1>
          <div class="book-list-wrapper">
            <div class="book-list">
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
            </div>
          </div>
          <i class="fas fa-chevron-right arrow"></i>
        </div>
        <!--  -->
        <div class="book-list-container">
          <h1 class="book-list-title">Romance</h1>
          <div class="book-list-wrapper">
            <div class="book-list">
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
              <div class="book-list-item">
                <img
                  class="book-list-item-img"
                  src="images/the abc murders.jpg"
                  alt=""
                />
                <span class="book-list-item-title">The ABC Murders</span>
                <button class="book-list-item-button">Learn Words</button>
              </div>
            </div>
          </div>
          <i class="fas fa-chevron-right arrow"></i>
        </div>
        <!--  -->
      </div>
      </div>
    </div>
    <script src="homepage.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
