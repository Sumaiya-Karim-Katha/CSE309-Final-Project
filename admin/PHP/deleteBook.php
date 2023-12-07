<?php
if (isset($_POST['delBook'])) {
    // Get the selected book from the form
    $delBook = $_POST['selectedBook'];
    $link = mysqli_connect('localhost', 'root', '', 'cse309_final_project');

    // deleting image associated with the deleted book
    $queryDelImg = "SELECT `Image` FROM `book` WHERE `Isbn` = '$delBook'";
    $imgToDel = mysqli_query($link, $queryDelImg);
    $result = mysqli_fetch_column($imgToDel);
    $imgpath = "BookImages/" . $result;
    unlink( $imgpath );

    // delete from database
    $queryDeleteBook = "DELETE FROM `book` WHERE `Isbn` = '$delBook'";
    $result = mysqli_query($link, $queryDeleteBook);
    mysqli_close($link);

    header("location: ../adminManageBook.php");
}
?>