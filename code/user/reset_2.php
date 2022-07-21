<?php 
if(!isset($_GET['token'])) {
    ?>
     <script>
        location.replace('https://criminal-dev.rf.gd/user/reset_1.php');
    </script>
    <?php
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
    <title>Reset Password</title>
    <script src="../js/show_pass.js"></script>
    <link rel ="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/hide.css">
</head>
<body class="bg-slate-600 px-4">
    <section class="reset shadow-2xl shadow-black after:bg-slate-800">
        <form method="POST" autocomplete="off">
            <div class="mx-8 mt-10">
                    <p class="text-3xl text-pink-600">Set New Password.</p>
            </div>

            <div class="inline-grid lg:grid-cols-1 gap-4 p-8 mx-auto w-full">

                <div>
                    <label class="text-xl text-sky-500 block mb-1 font-large">New Password</label>
                    <input type="password" name="password" id="password"
                        class="bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-rose-600 focus:bg-gray-900 focus:ring-2 focus:ring-pink-600 text-base outline-none text-rose-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out w-full"
                        placeholder="Set New Password *" required/>
                    <div class="inline-flex">
                        <input type="checkbox" onclick="showPassword2()" id="ckbox"
                            class="mx-4 ml-8 mt-4 cursor-pointer">
                        <h2 onclick="showPassword3()"
                            class="mx-1 mt-4 text-xl text-pink-600 cursor-pointer hover:text-pink-700">Show Password</h2>
                    </div>    
                </div>

                <div>
                    <label class="text-xl text-sky-500 block mb-1 font-large">Confirm New Password</label>
                    <input type="password" name="confirm_password" id="confirm_password"
                        class="bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-rose-600 focus:bg-gray-900 focus:ring-2 focus:ring-pink-600 text-base outline-none text-rose-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out w-full"
                        placeholder="Confirm New Password *" required/>
                </div>

                <div class="m-10">
                    <button type="submit" name="submit">
                    <a class="relative px-5 py-2 font-medium text-white group">
                        <span class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform translate-x-0 -skew-x-12 bg-purple-500 group-hover:bg-purple-700 group-hover:skew-x-12"></span>
                        <span class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform skew-x-12 bg-purple-700 group-hover:bg-purple-500 group-hover:-skew-x-12"></span>
                        <span class="absolute bottom-0 left-0 hidden w-10 h-20 transition-all duration-100 ease-out transform -translate-x-8 translate-y-10 bg-purple-600 -rotate-12"></span>
                        <span class="absolute bottom-0 right-0 hidden w-10 h-20 transition-all duration-100 ease-out transform translate-x-10 translate-y-8 bg-purple-400 -rotate-12"></span>
                        <span class="relative">Save Change</span>
                    </a>
                    </button>   
                </div>

            </div>
        </form>
        <!-- HL4    SVG      -->
        <div class = "fixed -bottom-20 left-0 -z-10 opacity-80">
            <?php 
                include '../svg/svg.php';
                echo $svg10;
            ?>
        </div>
    </section>
   
</body>
</html>


<!-- --------------------- -->
<!--------- php ------------->
<!-- --------------------- -->

<?php
include '../db/db_con.php';
if(isset($_POST['submit'])) {

    if(isset($_GET['token'])) {
        $token=$_GET['token'];

        $password=mysqli_real_escape_string($connection,$_POST['password']);
        $confirm_password=mysqli_real_escape_string($connection,$_POST['confirm_password']);
    
        if($password === $confirm_password) {
            
            $enc_pass=password_hash($password,PASSWORD_BCRYPT);

            $update="UPDATE `user` SET `password`='$enc_pass' WHERE `token`='$token'";   
            $query2=mysqli_query($connection,$update);

            if($query2)
            {
                ?>
                    <script>
                        alert("Password has been updated successfully.");
                        location.replace("../index.php");
                    </>
                <?php
            }
            else
            {
                ?>
                    <script>
                        alert("Oops ! something went's wrong....");
                        //location.replace("../index.php");
                    </script>
                <?php
            }
        }
        else
        {
            ?>
                <script>
                    alert("Password mismatch");
                </script>
            <?php   
        }
    } else {
        ?>
            <script>
                alert("no token found");
                location.replace('https://criminal-dev.rf.gd/user/reset_1.php')
            </script>
        <?php 
    }
}
?>
    
