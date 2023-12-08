<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Book Manager</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <link rel="stylesheet" href="https://unpkg.com/@jarstone/dselect/dist/css/dselect.css">

  <link href="CSS/dashboard.css" rel="stylesheet">

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
</head>

<body>

  <header class="navbar navbar-dark sticky-top flex-md-nowrap p-1 shadow" style="background-color: #9bb8cd;">

    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Vocable Admin</a>

    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
      data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </header>

  <div class="container-fluid">
    <div class="row mx-auto">

      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse mt-3"
        style="background-color: #9bb8cd;">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="adminDashboard.php">
                <span class="d-flex align-items-center"> <img src="SVG/home.svg" alt="">
                  <span style="font-size: 20px; margin-left: 10px;">Dashboard</span>
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                <span class="d-flex align-items-center"> <img src="SVG/book.svg" alt="">
                  <span style="font-size: 20px; margin-left: 10px;"><b>Manage Books</b></span>
                </span>
              </a>
            </li>
          </ul>

          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="../index.html">
                <span class="d-flex align-items-center"> <img src="SVG/log-out.svg" alt="">
                  <span style="font-size: 20px; margin-left: 10px;">Logout</span>
                </span>
              </a>
            </li>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-4">
        <div style="background-color: #c5e8ef; margin: 10px; padding: 10px; border-radius: 10px; text-align: center;">

          <h2>Add/Delete Books</h2>

          <div class="row mx-auto">
            <!-- Add books box -->
            <div class="col-lg-3 col-md-12 mx-auto"
              style="background-color: #89b9ad; border-radius: 10px; margin: 20px; padding: 10px;">

              <h2 style="text-align: center;">Add Books</h2>

              <div class="form-floating mb-3 px-5">
                <form action="PHP/addBook.php" method="post" enctype="multipart/form-data">

                  <div>
                    <label class="form-label mt-3">ISBN</label>
                    <input type="text" name="bookISBN" class="form-control">
                  </div>

                  <div>
                    <label class="form-label mt-3">Name</label>
                    <input type="text" name="bookName" class="form-control">
                  </div>

                  <div>
                    <label class="form-label mt-3">Author</label>
                    <input type="text" name="bookAuthor" class="form-control">
                  </div>

                  <div>
                    <label class="form-label mt-3">Image</label>
                    <input type="file" name="bookImage" class="form-control">
                  </div>

                  <div>
                    <label class="form-label mt-3">Genre</label>
                    <select name="bookGenre" id="bookGenre" class="form-select">
                      <option selected></option>
                      <option value="classics">Classics</option>
                      <option value="mystery">Mystery</option>
                      <option value="horror">Horror</option>
                      <option value="fantasy">Fantasy</option>
                      <option value="sci-fi">Sci-fi</option>
                      <option value="romance">Romance</option>
                    </select>
                  </div>

                  <div class="row-cols-2 text-center mt-4">
                    <input class="btn btn-lg btn-success" type="submit" name="addBook" value="Add">
                  </div>
                </form>
              </div>
            </div>

            <!-- Add Words Box -->
            <div class="col-lg-3 col-md-12 mx-auto"
              style="background-color: #89b9ad; border-radius: 10px; margin: 20px; padding: 10px;">
              <h2 style="text-align: center;">Add Words</h2>

              <div class="form-floating mb-3 px-5">
                <form action="PHP/addWord.php" method="post">

                  <div>
                    <label class="form-label mt-3">Book ISBN</label>

                    <div>
                      <!-- select the ISBN of the book -->
                      <select class="form-select" name="selectedBook" id="searchAddWord">
                        <option value="...">...</option>
                        <?php include 'PHP/fetchBook.php'; ?>

                        <!-- showing the database data in select menu -->
                        <?php while ($row = mysqli_fetch_array($result)):
                          ; ?>
                          <option>
                            <?php echo $row[0]; ?>
                          </option>
                        <?php endwhile; ?>

                      </select>
                    </div>

                    <label class="form-label mt-3">Words</label>
                    <input type="text" name="bookWord" class="form-control">

                    <!-- <label class="form-label mt-3">Meaning</label>
                    <input type="text" name="wordMeaning" class="form-control"> -->


                    <div class="row-cols-2 text-center mt-4">
                      <input class="btn btn-lg btn-success" type="submit" name="addWord" value="Add">
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <!-- Delete Book Box -->
            <div class="col-lg-3 col-md-12 mx-auto"
              style="background-color: #89b9ad; border-radius: 10px; margin: 20px; padding: 10px;">
              <h2 style="text-align: center;">Delete Books</h2>

              <div class="form-floating mb-3 px-5">
                <form action="PHP/deleteBook.php" method="post">

                  <div>
                    <label class="form-label mt-3">Book name</label>

                    <div>
                      <select class="form-select" name="selectedBook" id="searchDelBook">
                        <option value="...">...</option>

                        <?php include 'PHP/fetchBook.php'; ?>
                        <!-- showing the database data in select menu -->
                        <?php while ($row = mysqli_fetch_array($result)):
                          ; ?>
                          <option>
                            <?php echo $row[0]; ?>
                          </option>
                        <?php endwhile; ?>
                      </select>
                    </div>

                    <div class="row-cols-2 text-center mt-4">
                      <input class="btn btn-lg btn-danger" type="submit" name="delBook" value="Delete">
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </main>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

  <script src="https://unpkg.com/@jarstone/dselect/dist/js/dselect.js"></script>

  <script>
    dselect(document.querySelector('#searchAddWord'), {
      search: true
    })

    dselect(document.querySelector('#searchDelBook'), {
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