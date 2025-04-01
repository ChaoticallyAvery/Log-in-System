<?php
    include ('../connect/connect.php');
 
{
$username = $_POST['user'];
$password = $_POST['pass'];

if (!empty('user') && !empty('$pass')){
    $sql = "SELECT username, password FROM login WHERE username='$username' AND password='$password'";
    
    $result = $conn->query($sql);
    
    $queryResult = mysqli_num_rows($result);
    
    if ($queryResult > 0)
    {
        $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        echo $row["id"];

        session_start();
        $_SESSION['user'] = [
            "id"=>$row["id"],
            "username"=>$row["username"],
            "admin"=>$row["admin"]
        ];
        foreach ($result as $row) {
            $loc = $row['location'];
        }
        $_SESSION['loc'] = $loc;
        header("Location: ../index.php?status=success");
    }
    else
    {
        die("<p>Error: Login unsuccessful");
    }
    
}
}
   
?>