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
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Criminal Record Management System"/>
    <meta name="author" content="Moinak Majumdar"/>
    <meta name='keywords' content = 'crime, prisoner, punishment'/>
    <link rel="icon" type="image/png" sizes="32x32" href="../icon/logo32.png"/>
    <link rel="manifest" href="../manifest.json" />
    <title>All Mails</title>
</head>
<body>
</body>
</html>
