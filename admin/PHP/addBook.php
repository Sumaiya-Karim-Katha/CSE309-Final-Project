<?php

// if Addbook is pressed
if (isset($_POST["addBook"])) {
    // path for image storage
    $target = "BookImages/" . basename($_FILES['bookImage']['name']);

    // connect to database
    $link = mysqli_connect('localhost', 'root', '', 'cse309_final_project');

    // variables to catch input data
    $isbn = $_POST['bookISBN'];
    $bookname = $_POST['bookName'];
    $booknamesafe = mysqli_real_escape_string($link, $bookname);
    // booknamesafe can handle ' in book names.
    $bookauthor = $_POST['bookAuthor'];
    $bookgenre = filter_input(INPUT_POST, 'bookGenre', FILTER_SANITIZE_STRING);
    $bookimage = $_FILES['bookImage']['name'];

    // sql query
    $queryAddBook = "INSERT INTO `book`(`Isbn`, `Name`, `Author`, `Genre`, `Image`) VALUES ('$isbn','$booknamesafe','$bookauthor','$bookgenre','$bookimage')";

    // sending data by linking query and the database
    mysqli_query($link, $queryAddBook);

    // move added images to "BookImages" folder
    move_uploaded_file($_FILES["bookImage"]["tmp_name"], $target);

    // close connection to db
    mysqli_close($link);

    // redirect to managebook page
    header("location: ../adminManageBook.php");
}
?>