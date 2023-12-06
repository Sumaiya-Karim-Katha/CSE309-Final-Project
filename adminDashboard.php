<div class="container">
  <?php
  // connect to database
  $link = mysqli_connect('localhost', 'root', '', 'cse309_final_project');

  // sql query
  $queryCountUser = "";
  $queryCountBook = "SELECT * FROM `book`";
  $queryCountWord = "SELECT * FROM `word`";

  // sending data by linking query and the database
  // $totalUser = mysqli_query($link, $queryCountUser);
  $bookCount = mysqli_query($link, $queryCountBook);
  $wordCount = mysqli_query($link, $queryCountWord);

  // $totalUser = mysqli_num_rows();
  $totalBook = mysqli_num_rows($bookCount);
  $totalWord = mysqli_num_rows($wordCount);

  // close connection to db
  mysqli_close($link);
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

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-1 shadow">

    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Vocable Admin</a>

    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
      data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </header>

  <div class="container-fluid">
    <div class="row">

      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse mt-3">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">

                <span class="d-flex align-items-center"> <img src="SVG/home.svg" alt="">
                  <span style="font-size: 20px; margin-left: 10px;">Dashboard</span>
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="adminManageBook.php">
                <span class="d-flex align-items-center"> <img src="SVG/book.svg" alt="">
                  <span style="font-size: 20px; margin-left: 10px;">Manage Books</span>
                </span>
              </a>
            </li>
          </ul>

          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="d-flex align-items-center"> <img src="SVG/log-out.svg" alt="">
                  <span style="font-size: 20px; margin-left: 10px;">Logout</span>
                </span>
              </a>
            </li>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-4 mt-4">

        <div style="background-color: #F0ECE5; margin: 10px; padding: 10px; border-radius: 10px; text-align: center;">

          <h2 class="container py-3">Analytics</h2>

          <div class="row">
            <!-- analytics -->
            <div class="col-lg-3 col-sm-12 mx-auto"
              style="background-color: #9EC8B9; border-radius: 10px; margin: 20px; padding: 10px;">
              
              <h2 style="text-align: center;">Total Users <span><img src="SVG/user.svg" alt=""></span> </h2>
              <h3>3
                <!-- <?php
                echo '<h3>'.$totalBook.'</h3>';
                ?>
              </h3> -->
            </div>

            <div class="col-lg-3 col-sm-12 mx-auto"
              style="background-color: #9EC8B9; border-radius: 10px; margin: 20px; padding: 10px;">
              <h2 style="text-align: center;">Total Books <span><img src="SVG/bookbig.svg" alt=""></h2>
              <h3>
                <?php
                echo '<h3>'.$totalBook.'</h3>';
                ?>
              </h3>
            </div>

            <div class="col-lg-3 col-sm-12 mx-auto"
              style="background-color: #9EC8B9; border-radius: 10px; margin: 20px; padding: 10px;">
              <h2 style="text-align: center;">Total Words <span><img src="SVG/book-open.svg" alt=""></h2>
              <h3>
                <?php
                echo '<h3>'.$totalWord.'</h3>';
                ?>
              </h3>
            </div>
          </div>
        </div>
        <hr>
        <div style="background-color: #F0ECE5; margin: 10px; padding: 10px; border-radius: 10px; text-align: center;">

          <h2 class="container py-3">User Feedback</h2>
          <table class="table table-success table-striped">
            <thead style="font-size: 20px">
              <tr style="">
                <th>Name</th>
                <th>Email</th>
                <th>Feedback</th>
              </tr>
            </thead>

            <tbody>
              <?php
              $link = mysqli_connect('localhost', 'root', '', '2120117_cse309_ass_3');

              if($link === false) {
                die('Error establishing connection'.mysqli_connect_error());
              }

              $query = "SELECT * FROM contactinfo";
              $result = $link->query($query);

              if(!$result) {
                die("SQL query failed ".$connection->error);
              }

              while($row = $result->fetch_assoc()) {

                echo "<tr>
                                    <td>".$row["Name"]."</td>
                                    <td>".$row["Email"]."</td>
                                    <td>".$row["Feedback"]."</td>
                                    </tr>";

              }
              ?>
            </tbody>
          </table>
        </div>
    </div>

  </div>
  </main>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/feather-icons"></script>
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