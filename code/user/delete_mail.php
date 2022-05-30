<?php   
    if(isset($_GET['id']))
    {
        include "../db/db_con.php";
        $id=$_GET['id'];
        $delete="DELETE FROM `mail` WHERE `user_ID`='$id'";
        $query=mysqli_query($connection,$delete);
        
        if($query)
        {
            ?>
                <script>
                    alert("mail deleted");
                    location.replace("check_mail.php")
                </script>
            <?php
        }
        else
        {
            ?>
                <script>
                    alert("OOPS ! something went wrong 😢");
                    location.replace("check_mail.php")
                </script>
            <?php
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Mails</title>
</head>
<body>
</body>
</html>
