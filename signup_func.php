<?php

include('../connect/connect.php');

$name = $_POST["name"];
$email = $_POST["email"];
$user = $_POST["user"];
$pass = $_POST["pass"];
$loc = $_POST["loc"];

$sql = "INSERT INTO login (name, email, username, password, location) VALUES ('$name', '$email','$user', '$pass', '$loc')"; 

if (mysqli_query($conn, $sql) == TRUE){
    session_start();
        $_SESSION['user'] = $username;
        foreach ($result as $row) {
            $loc = $row['location'];
        }
        $_SESSION['loc'] = $loc;
        header("Location: ../forum_display.php");
    header("location: ../index.php?status=success");
} else {
    echo "Error $sql. " .mysqli_error($conn);
}


?>