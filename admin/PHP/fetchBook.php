<?php

// connect to db and fetch the ISBN
$link = mysqli_connect('localhost', 'root', '', 'cse309_final_project');
$queryFetchBook = "SELECT * FROM `book`";
$result = mysqli_query($link, $queryFetchBook);

?>