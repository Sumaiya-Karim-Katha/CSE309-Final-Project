<?php

if (isset($_POST["addWord"])) {

    // variables to store book and the word
    $book = $_POST['selectedBook'];
    $word = $_POST['bookWord'];

    // connect and send data
    $link = mysqli_connect('localhost', 'root', '', 'cse309_final_project');

    // sql query
    $queryAddWord = "INSERT INTO `word`(`bookIsbn`, `wordName`) VALUES ('$book','$word')";

    // execute query in db
    mysqli_query($link, $queryAddWord);
    
    // close link
    mysqli_close($link);
    header("location: ../adminManageBook.php");
}
?>