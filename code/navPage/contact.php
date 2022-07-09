<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#000000" />
        <meta name="description" content="Criminal Record Management System" />
        <meta name="author" content="Moinak Majumdar"/>
        <meta name='keywords' content = 'crime, prisoner, punishment'/>
        <link rel="icon" type="image/png" sizes="32x32" href="../icon/logo32.png"/>
        <link rel="manifest" href="../manifest.json"/>
        <title>Contact</title>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="js/preloader.js"></script>
        <script src="js/show_pass.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="../css/prealoader.css">
        <link rel ="stylesheet" href="../css/hide.css">
        <link rel="stylesheet" href="../css/index.css">
    </head>
    <body class='min-h-screen flex flex-col'>
        <!--        loading            -->
        <div id="preloader"></div>
        <!--        navbar             -->
        <div class="container_navigation"> 
            <div class="navigation">
                <ul>
                    <li class="list">
                        <a href="../index.php">
                            <span class="icon"><ion-icon name="home"></ion-icon></span>
                            <span class="text">Home</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="contact.php">
                            <span class="icon"><ion-icon name="chatbox-ellipses-sharp"></ion-icon></span>
                            <span class="text">Contact</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="about.php">
                            <span class="icon"><ion-icon name="document-text-sharp"></ion-icon></span>
                            <span class="text">About</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="help.php">
                            <span class="icon"><ion-icon name="extension-puzzle-sharp"></ion-icon></span>
                            <span class="text">Help</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="team.php">
                            <span class="icon"><ion-icon name="code-slash-sharp"></ion-icon></span>
                            <span class="text">Team</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post" autocomplete="off">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white capitalize">Connect with us</h1>
                </div>
                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                    <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="user_ID" class="leading-7 text-sm text-gray-400">User Id</label>
                                <input type="text" name="user_ID" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
                                <input type="text" name="email" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="massage" class="leading-7 text-sm text-gray-400">Message</label>
                                <textarea name="massage" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 h-32 text-base outline-none text-gray-100 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" required></textarea>
                            </div>
                        </div>
                        <div class="p-2 w-full inline-flex justify-center">
                            <button type="submit" name="submit">
                                <a class="relative px-5 py-2 font-medium text-white group">
                                    <span class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform translate-x-0 -skew-x-12 bg-pink-700 group-hover:bg-indigo-700 group-hover:skew-x-12"></span>
                                    <span class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform skew-x-12 bg-indigo-700 group-hover:bg-pink-700 group-hover:-skew-x-12"></span>
                                    <span class="absolute bottom-0 left-0 hidden w-10 h-20 transition-all duration-100 ease-out transform -translate-x-8 translate-y-10 bg-pink-700 -rotate-12"></span>
                                    <span class="absolute bottom-0 right-0 hidden w-10 h-20 transition-all duration-100 ease-out transform translate-x-10 translate-y-8 bg-indigo-700 -rotate-12"></span>
                                    <span class="relative text-2xl px-2">Send</span>
                                </a>
                            </button>
                        </div>
                        <div class="p-2 w-full pt-8 mt-8 border-t border-gray-800 text-center">
                            <a class="text-indigo-400 text-lg font-bold">@Moinak Majumdar</a>
                            <p class="text-zinc-400 my-5">301,Satinagar Palta
                                <br>North 24 Pgs, West Bengal.
                            </p>
                            <span class="mt-2 w-40 h-auto inline-flex justify-between">
                                <a href="https://www.facebook.com/moinak.majumdar.9" target="_moinak"><ion-icon name="logo-facebook" class="facebook text-2xl cursor-pointer"></ion-icon></a>
                                <a href="tel:9804139678" target="_moinak"><ion-icon name="call" class="instagram text-2xl cursor-pointer"></ion-icon></a>
                                <a href="https://twitter.com/messages/compose?recipient_id=moinak005&ref_src=twsrc%5Etfw&text=Hi" target="_moinak"><ion-icon name="logo-twitter" class="twitter text-2xl cursor-pointer"></ion-icon></a>
                                <a href="https://api.whatsapp.com/send?phone=+919804139678&text=Hi" target="_moinak"><ion-icon name="logo-whatsapp" class="whatsapp text-2xl cursor-pointer"></ion-icon></a>
                                <a href="mailto:moinak2000@gmail.com" target="_moinak"><ion-icon name="mail-outline" class="gmail text-2xl cursor-pointer"></ion-icon></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <footer class='mt-auto'>
            <h2 class="w-full text-center text-white bg-black bg-opacity-50">Copyright &copy; Criminal System - All rights reserved</h2>
        </footer>
    </body> 
</html>


<!--HL3                       -->
<!------------ php ------------->
<!--HL3                       -->

<?php
    include "../db/db_con.php";
    if(isset($_POST['submit']))
    {
        $user_ID=mysqli_real_escape_string($connection,$_POST['user_ID']);
        $mail=mysqli_real_escape_string($connection,$_POST['email']);
        $massage=mysqli_real_escape_string($connection,$_POST['massage']);


        $userQuery="select * from user where user_ID='$user_ID'";
        $query1=mysqli_query($connection,$userQuery);
        $userCount=mysqli_num_rows($query1);

        $last_row="SELECT serial_no FROM mail ORDER BY serial_no DESC LIMIT 1";
        $query4=mysqli_query($connection,$last_row);
        $res=mysqli_fetch_assoc($query4);
        $next=$res['serial_no']+1;

        // echo($next.' '.$mail.' '.$massage.' '.$db_name.' '.$mail.' '.$db_mail)

        if($userCount)
        {
            $res=mysqli_fetch_assoc($query1);
            $db_name=$res['name'];
            $db_mail=$res['email'];

            $idQuery="SELECT * FROM `mail` WHERE `user_ID`='$user_ID'";
            $query3=mysqli_query($connection,$idQuery);
            $idCount=mysqli_num_rows($query3);

            if($idCount < 1)
            {
                if($db_mail == $mail)
                {
                    $insertQuery = "INSERT INTO `mail` (`serial_no`, `user_ID`, `name`, `email`, `massage`) VALUE('$next','$user_ID','$db_name','$db_mail','$massage')";
                    $query2 = mysqli_query($connection,$insertQuery);
                    if($query2)
                    {
                        ?>
                            <script>
                                alert("Massage sent.");
                                location.replace("../index.php");
                            </script>
                        <?php
                    }
                    else
                    {
                        ?>
                            <script>
                                alert("OPPS! something went wrong ☠️");
                            </script>
                        <?php
                    }
                }
                else
                {
                    ?>
                        <script>
                            alert("OPPS! invalid email id ⚔️");
                        </script>
                    <?php
                }
            }
            else 
            {
                ?>
                    <script>
                        alert("you can send only one message at ones. 😃");
                    </script>
                <?php
            }
           
        }
        else
        {
            ?>
                <script>
                    alert("OPPS! invalid USER ID  ⚔️");
                </script>
            <?php

        }
    }
?>

                   