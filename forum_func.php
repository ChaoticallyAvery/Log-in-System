<?php

include('../connect/connect.php');

$title = $_POST["title"];
$san_title = htmlspecialchars($title, ENT_QUOTES);
$author = $_POST["author"];
$san_author = htmlspecialchars($author, ENT_QUOTES);
$date = new DateTime('now', new DateTimeZone('Europe/London'));
$formatted_date = $date->format('Y-m-d H:i:s');

$cont = $_POST["content"];
$san_cont = htmlspecialchars($cont, ENT_QUOTES);

$sql = "INSERT INTO forum (title, author, date_written, content) VALUES ('$san_title', '$san_author','$formatted_date', '$san_cont')"; 

if (mysqli_query($conn, $sql) == TRUE){
        header("location: ../forum_display.php?status=success");
} else {
    echo "Error $sql. " .mysqli_error($conn);
}

?>
