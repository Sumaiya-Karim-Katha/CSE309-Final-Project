<?php 
// Connection with database
$servername = "localhost";
$username = "root";
$password = "";
$database = "cse309_final_project";

$conn = new mysqli($servername, $username, $password, $database);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="profile.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <img class="profile-picture" src="../homepage/images/p1.jpg" alt=""/>
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
        <br>
        <br>
        <div class="card" style="border-radius: 10px">
            <img src="../homepage/images/lol.jpg" alt="John" style="width:100%; border-radius: 10px">
            <br> <br>
            <h1>John Doe</h1>
            
            <!-- <p>Harvard University</p> -->
            <br>

            <div style="background-color: #D5A8A9;">
                <label>Image</label>
                <input type="file" name="bookImage" class="form-control">
                <p><button style="background-color: #dd87a5;">Update Profile Picture</button></p>
            </div>
            
            <p><button style="border-radius: 0 0 10px 10px">Change password</button></p>
          </div>

          <br>

          <div class="card" style="border-radius: 10px">
            
            <h1>Favourite Books</h1>
            <p>Coming soon</p>
            
            
          </div>


    </div>
</div>


</body>
</html>
