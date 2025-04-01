<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<?php include("connect/connect.php") ?>
<?php include ("css/beer.php"); ?>
</head>

    <div class="header">
    <body class="light">
<?php include ("cosmetics/head.php");?>
<?php include ("cosmetics/bar.php");?>
    </div>  
    
    <h2 align='center'>Manage Accounts</h2>
    <hr class="medium">
    

<article style="
text-align: center;">
<?php
    
     $sql = "SELECT * FROM forum ORDER by id asc";
                $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {  ?>
    
    
        <div class="display">
           <form action="scripts/delete_art.php?id=<?php echo $row["id"]; ?>" method="POST">
            <input type='submit' name='delete' value='Delete' />
            </form>

            <p><?php echo 'ID: '; echo $row["id"];?></p>
            <p><?php echo 'Title: '; echo $row["title"];?></p>
            <p><?php echo 'Author: '; echo $row['Author'];?></p>
            <p><?php echo 'Date Written: '; echo $row["date_written"];?></p>
            <p><?php echo 'Content: '; echo $row["content"];?></p>
            </div>
            <hr class="medium">
            <br>
            <td>
                    
                    <?php } 
                } else 
                { echo "0 results"; } ?>
</article>

 </div>
   </body>
</html>