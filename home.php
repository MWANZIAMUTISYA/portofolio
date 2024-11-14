<?php
sesseion_start();
include("connect.php");
?>
<html>
    <head>
        <title>HOME PAGE</title>
    </head>
    <body>
        <p>hi
            <?php
            if(isset($_SESSION['email'])){
                $email=$_SESSION['email'];
                $query=mysqli_query($conn, "SELECT message.*FROM 'message' WHERE users.email='$email'");
                while($row=mysqli_fetch_array($query)){
                    echo $row['email'].''.$row.['username'];
                }
            }
            ?>
            :
        </p>
    </body>
</html>