<?php
if (isset($_POST['delBook'])) {
    // Get the selected book from the form
    $delBook = $_POST['selectedBook'];
    $link = mysqli_connect('localhost', 'root', '', 'cse309_final_project');

    // delete query
    $queryDeleteBook = "DELETE FROM `book` WHERE `Isbn` = '$delBook'";
    // execute query
    $result = mysqli_query($link, $queryDeleteBook);
    // close db link
    mysqli_close($link);
    header("location: ../adminManageBook.php");
}
?>