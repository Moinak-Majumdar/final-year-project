<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <script src="../js/show_pass.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/hide.css">
</head>
<body class="text-gray-600 bg-slate-400 body-font">
    <section>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post" autocomplete="off">
            <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
                <div class="w-fit px-4">
                    <h1 class="font-bold text-6xl text-transparent bg-clip-text bg-gradient-to-r from-purple-600 via-indigo-600 to-slate-800 md:mx-0 w-fit">Welcome Administrator</h1>
                </div>
                <div class="lg:w-2/6 md:w-1/2 bg-gradient-to-b from-slate-800 via-gray-900 to-neutral-900 rounded-xl p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 shadow-2xl shadow-black">
                    <h2 class="text-white text-lg font-medium title-font mb-5">Login</h2>
                    <div class="relative mb-4">
                        <label for="full-name" class="leading-7 text-sm text-indigo-500">User ID</label>
                        <input type="text" placeholder="Login id" name="user_ID" 
                            class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                    </div>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-indigo-500">Password</label>
                        <input type="password" placeholder="Password" name="password" id="password"
                            class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                    </div>
                    <div class="w-full h-auto flex justify-start flex-row p-4">
                        <input type="checkbox" onclick="showPassword()" id="ckbox" class="mx-1 my-2">
                        <h4 onclick="showPassword4()"
                            class="leading-7 text-sm text-indigo-500 cursor-pointer">
                            Show Password</h4>
                    </div>
                    <button type="submit" name="submit" 
                        class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                        Login</button>
                    <a href='../index.php' class='mt-4 text-center text-gray-500 capitalize'>go back : <span class='text-indigo-400 hover:underline'>Home</span></a>
                </div>
            </div>
        </form>
        <!-- HL4    svg      -->
        <div class="fixed bottom-0 left-0 -z-10">
            <?php
                include '../svg/svg.php';
                echo $svg7;
            ?>
        </div>
    </section>
    <footer>
        <h2 class="w-full fixed bottom-0 text-center text-white">Copyright &copy; Criminal System - All rights reserved</h2>
    </footer>
</body>
</html>

<!-- ----------------- -->
<!--HL3      php    -->
<!-- ----------------- -->

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        include "../db/db_con.php";
            
        if(isset($_REQUEST['submit']))
        {
            $id=mysqli_real_escape_string($connection,$_REQUEST['user_ID']);
            $password=mysqli_real_escape_string($connection,$_REQUEST['password']);

            $get="select * from user where serial_no='1'";
            $query1=mysqli_query($connection,$get);
            $res=mysqli_fetch_array($query1);
            $_SESSION['admin']='admin';

            if($res[2]==$id && $res[6]==$password)
            {
                
                ?>
                <script>
                    location.replace("admin_work.php");
                </script>
                <?php
            }
            else
            {
                ?>
                <script>
                    alert("Opps! ID and Passsword mismatched");
                </script>
                <?php
            }
        }        
    }        
    ?>