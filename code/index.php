<?php session_start();?>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="theme-color" content="#000000" />
        <meta name="description" content="Criminal Record Management System" />
        <meta name="author" content="Moinak Majumdar"/>
        <meta name='keywords' content = 'crime, prisoner, punishment'/>
        <link rel="icon" type="image/png" sizes="32x32" href="icon/logo32.png"/>
        <title>Login page</title>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="js/show_pass.js"></script>
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/hide.css">
    </head>
    <body>
        <!--Hl4        navbar             -->
        <section class="container_navigation"> 
            <div class="navigation">
                <ul>
                    <li class="list">
                        <a href="index.php">
                            <span class="icon"><ion-icon name="home"></ion-icon></span>
                            <span class="text">Home</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="navPage/contact.php">
                            <span class="icon"><ion-icon name="chatbox-ellipses-sharp"></ion-icon></span>
                            <span class="text">Contact</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="navPage/about.php">
                            <span class="icon"><ion-icon name="document-text-sharp"></ion-icon></span>
                            <span class="text">About</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="navPage/help.php">
                            <span class="icon"><ion-icon name="extension-puzzle-sharp"></ion-icon></span>
                            <span class="text">Help</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="navPage/team.php">
                            <span class="icon"><ion-icon name="code-slash-sharp"></ion-icon></span>
                            <span class="text">Team</span>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <!--HL1    animation masage    -->
        <section class="container_welcome">
            <div class="sign">
                <span class="mid-flicker">:</span>
                <span class="fast-flicker">:</span>
                <span class="flicker">:</span>
                <span class="mid-flicker">w</span>el
                <span class="fast-flicker">c</span>o
                <span class="flicker">m</span>e
                <span class="fast-flicker">:</span>
                <span class="flicker">:</span>
                <span class="mid-flicker">:</span>
            </div>
        </section>
        <!--Hl2     input form       -->
        <section class="container_input">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>"  method="post" autocomplete="off">
                <div class="i_style">
                    <input placeholder="Login id" name="user_ID" id="id" required>
                    <input placeholder="Password" name="password" id="password" type="password" required>
                    <div class="showPassword">
                        <input type="checkbox" onclick="showPassword()" id="ckbox">
                        <h4 onclick="showPassword4()">Show Password</h4>
                    </div>
                    <input type="submit" name="submit" id="bt1" value="login">
                    <a href="user/reset_1.php" id="btf">Forgot password ?</a>
                    <a href="user/admin.php" id="bta">Administrator * </a>
                </div>
            </form>
        </section>
    </body> 
</html>


<!-- --------------------- -->
<!--------- php ------------->
<!-- --------------------- -->


<?php
{
    include "db/db_con.php";
        
    if(isset($_REQUEST['submit']))
    {
        $id=mysqli_real_escape_string($connection,$_REQUEST['user_ID']);
        $password=mysqli_real_escape_string($connection,$_REQUEST['password']);
        $selectquery="select * from user where user_ID='$id'";
        $query1=mysqli_query($connection,$selectquery);
        $id_count=mysqli_num_rows($query1);
        
        if($id_count)
        {
            $res=mysqli_fetch_assoc($query1);
            $dbpass=$res['password'];
            $_SESSION['name']=$res['name'];
            $_SESSION['post']=$res['post'];
            $dec_pass=password_verify($password,$dbpass);

            if($dec_pass)
            { //login
                ?>
                <script>
                    location.replace("prisoner/work.php");
                </script>
                <?php
            }
            else
            {   //password incorrect
                ?>
                <script>
                    alert("Password Incorrect !");
                </script>
                <?php
            }
        }
        else
        {   //invalid id
            ?>
            <script>
                alert("Invalid user ID.");
            </script>
            <?php 
        }
       
    }
}
?>
                   