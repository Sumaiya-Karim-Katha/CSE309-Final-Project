<div class="container">
  <?php

  // if Addbook is pressed
  if(isset($_POST["addBook"])) {
    // path for image storage
    $target = "Images/".basename($_FILES['bookImage']['name']);

    // connect to database
    $link = mysqli_connect('localhost', 'root', '', 'cse309_final_project');
    if($link === false) {
      die('Error establishing connection'.mysqli_connect_error());
    }

    // variables to catch input data
    $isbn = $_POST['bookISBN'];
    $bookname = $_POST['bookName'];
    $bookgenre = filter_input(INPUT_POST, 'bookGenre', FILTER_SANITIZE_STRING);
    $bookimage = $_FILES['bookImage']['name'];

    // sql query
    $queryAddBook = "INSERT INTO `book`(`Isbn`, `Name`, `Genre`, `Image`) VALUES ('$isbn','$bookname','$bookgenre','$bookimage')";

    // sending data by linking query and the database
    mysqli_query($link, $queryAddBook);

    // move added images to Images folder
    move_uploaded_file($_FILES["bookImage"]["tmp_name"], $target);

    // close connection to db
    mysqli_close($link);

  }
  ?>
</div>



<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/@jarstone/dselect/dist/css/dselect.css">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="dashboard.css" rel="stylesheet">
</head>

<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">

    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">BookStore Desu</a>

    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
      data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </header>

  <div class="container-fluid">
    <div class="row">

      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file"></span>
                Analytics
              </a>
            </li>
          </ul>

          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Sign Out
              </a>
            </li>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <div class="container"
          style="background-color: #F0ECE5; margin: 10px; padding: 10px; border-radius: 10px; text-align: center;">

          <h2>Welcome <span id="WelcomeUsername">"Admin"</span></h2>

          <div class="row">

            <!-- Add books box -->
            <div class="col-lg-4 col-md-12"
              style="background-color: #FAEED1; border-radius: 10px; margin: 20px; padding: 10px;">

              <h2 style="text-align: center;">Add Books</h2>

              <div class="form-floating mb-3 px-5">
                <form action="admin.php" method="post" enctype="multipart/form-data">

                  <div>
                    <label class="form-label mt-3">ISBN</label>
                    <input type="text" name="bookISBN" class="form-control">
                  </div>

                  <div>
                    <label class="form-label mt-3">Name</label>
                    <input type="text" name="bookName" class="form-control">
                  </div>

                  <div>
                    <label class="form-label mt-3">Image</label>
                    <input type="file" name="bookImage" class="form-control">
                  </div>

                  <div>
                    <label class="form-label mt-3">Genre</label>
                    <select name="bookGenre" id="bookGenre" class="form-select">
                      <option selected></option>
                      <option value="action">Action</option>
                      <option value="mystery">Mystery</option>
                      <option value="horror">Horror</option>
                      <option value="fantasy">Fantasy</option>
                      <option value="sci-fi">Sci-fi</option>
                      <option value="novel">Novel</option>
                    </select>
                  </div>

                  <div class="row-cols-2 text-center mt-4">
                    <input class="btn btn-lg btn-success" type="submit" name="addBook" value="Add Book">
                  </div>
                </form>
              </div>
            </div>

            <!-- Add Words Box -->
            <div class="col-lg-3 col-md-12"
              style="background-color: #9EC8B9; border-radius: 10px; margin: 20px; padding: 10px;">
              <h2 style="text-align: center;">Add Words</h2>

              <div class="form-floating mb-3 px-5">
                <form action="admin.php" method="post">

                  <div>
                    <label class="form-label mt-3">Book ISBN</label>

                    <div>
                      <!-- select the ISBN of the book -->
                      <select class="form-select" name="addWord" id="search">
                        <?php
                        // connect to db and fetch the ISBN
                        $link = mysqli_connect('localhost', 'root', '', 'cse309_final_project');
                        $queryFetchBook = "SELECT * FROM `book`";
                        $result = mysqli_query($link, $queryFetchBook); ?>

                        <!-- showing the database data in select menu -->
                        <?php while($row = mysqli_fetch_array($result)):
                          ; ?>
                          <option>
                            <?php echo $row[0]; ?>
                          </option>
                        <?php endwhile; ?>
                      </select>
                    </div>

                    <label class="form-label mt-3">Words</label>
                    <input type="text" name="bookWord" class="form-control">


                    <div>
                      <?php
                      if(isset($_POST["addWord"])) {

                        // variables to store book and the word
                        $book = $_POST['addWord'];
                        $word = $_POST['bookWord'];

                        // connect and send data
                        $link = mysqli_connect('localhost', 'root', '', 'cse309_final_project');
                        $queryAddWord = "INSERT INTO `word`(`bookIsbn`, `wordName`) VALUES ('$book','$word')";
                        mysqli_query($link, $queryAddWord);
                        mysqli_close($link);
                      }

                      ?>
                    </div>
                    <div class="row-cols-2 text-center mt-4">
                      <input class="btn btn-lg btn-success" type="submit" value="Add">
                    </div>
                </form>
              </div>
            </div>

          </div>

          <!-- Delete Book Box -->
          <div class="col-lg-3 col-md-12"
            style="background-color: #FAEED1; border-radius: 10px; margin: 20px; padding: 10px;">
            <h2 style="text-align: center;">Delete Books</h2>

            <div class="form-floating mb-3 px-5">
              <form action="admin.php" method="post">

                <div>
                  <label class="form-label mt-3">Book name</label>

                  <div>
                    <select class="form-select" name="delBook">
                      <?php
                      // connect to db and fetch the results
                      $link = mysqli_connect('localhost', 'root', '', 'cse309_final_project');
                      $queryFetchBook = "SELECT * FROM `book`";
                      $result = mysqli_query($link, $queryFetchBook); ?>

                      <!-- showing the database data in select menu -->
                      <?php while($row = mysqli_fetch_array($result)):
                        ; ?>
                        <option>
                          <?php echo $row[0]; ?>
                        </option>
                      <?php endwhile; ?>
                    </select>
                  </div>

                  <div class="row-cols-2 text-center mt-4">
                    <div>
                      <?php
                      if(isset($_POST['delBook'])) {
                        // Get the selected book from the form
                        $delBook = $_POST['delBook'];
                        $link = mysqli_connect('localhost', 'root', '', 'cse309_final_project');

                        // delete query
                        $queryDeleteBook = "DELETE FROM `book` WHERE `Isbn` = '$delBook'";
                        $result = mysqli_query($link, $queryDeleteBook);
                        mysqli_close($link);
                      }
                      ?>

                    </div>
                    <input class="btn btn-lg btn-danger" type="submit" value="Delete">
                  </div>
              </form>
            </div>
          </div>

        </div>
      </main>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/@jarstone/dselect/dist/js/dselect.js"></script>

  <script>
    dselect(document.querySelector('#search'), {
      search: true
    })
  </script>

  <script>
      (function () {
        'use strict'

        feather.replace({ 'aria-hidden': 'true' })
      })()
  </script>
</body>

</html>