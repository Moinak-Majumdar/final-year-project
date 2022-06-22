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
    <link rel="icon" type="image/png" sizes="36x36" href="../icon/logo36.png"/>
    <link rel="icon" type="image/png" sizes="48x48" href="../icon/logo48.png"/>
    <link rel="icon" type="image/png" sizes="72x72" href="../icon/logo72.png"/>
    <link rel="icon" type="image/png" sizes="96x96" href="../icon/logo96.png"/>
    <link rel="icon" type="image/png" sizes="128x128" href="../icon/logo128.png"/>
    <link rel="icon" type="image/png" sizes="144x144" href="../icon/logo144.png"/>
    <link rel="icon" type="image/png" sizes="152x152" href="../icon/logo152.png"/>
    <link rel="icon" type="image/png" sizes="152x152" href="../icon/logo152.png"/>
    <link rel="icon" type="image/png" sizes="192x192" href="../icon/logo192.png"/>
    <link rel="icon" type="image/png" sizes="384x384" href="../icon/logo384.png"/>
    <link rel="icon" type="image/png" sizes="512x512" href="../icon/logo512.png"/>
    <link rel="apple-touch-icon" href="../icon/logo192.png" />
    <link rel="manifest" href="../manifest.json" />
    <title>All Mails</title>
</head>
<body>
</body>
</html>
