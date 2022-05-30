<?php
    $user="root";
    $host="localhost";
    $password="";
    $db="Criminal";

    $connection=mysqli_connect($host,$user,$password,$db);

    if($connection === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
        
?>
    