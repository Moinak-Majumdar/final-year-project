<?php
    if(!isset($_SESSION['admin']))
    {
        ?>
        <script>
            alert("You are logged out. Please login again");
            window.location.href="admin.php";
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
    <title>Remove User</title>
    <script src="../js/show_pass.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/hide.css">
</head>
<body class="bg-gray-300 h-full w-full flex justify-center items-center">
   <section class="h-auto w-auto flex justify-center items-center flex-col my-8">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST" autocomplete="off">              
                <h1 class="mx-auto text-4xl text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-500 to-indigo-800 font-extrabold w-fit">Remove User</h1>            
                <div class="grid xl:grid-cols-2 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 grid-cols-1 gap-8 p-8 mx-6">

                    <div>
                        <label class="text-xl text-sky-600 block mb-1 font-large">User Name</label>
                        <input type="text" name="name"
                            class="w-full focus:bg-transparent rounded-lg border border-indigo-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-400 bg-gray-400 bg-opacity-10 text-base outline-none text-gray-800 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out shadow-2xl shadow-black"
                            placeholder="Enter User Name *" required/>
                    </div>

                    <div>
                        <label class="text-xl text-sky-600 block mb-1 font-large">User ID</label>
                        <input type="text" name="id"
                            class="w-full focus:bg-transparent rounded-lg border border-indigo-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-400 bg-gray-400 bg-opacity-10 text-base outline-none text-gray-800 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out shadow-2xl shadow-black"
                            placeholder="Enter User ID *" required/>
                    </div>

                    <div>
                        <label class="text-xl text-sky-600 block mb-1 font-large">Password</label>
                        <input type="password" name="password" id="password"
                            class="w-full focus:bg-transparent rounded-lg border border-indigo-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-400 bg-gray-400 bg-opacity-10 text-base outline-none text-gray-800 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out shadow-2xl shadow-black"
                            placeholder="Enter User Password *" required/>
                        <div class="inline-flex">
                            <input type="checkbox" onclick="showPassword()" id="ckbox"
                                class="mx-4 ml-8 mt-4 cursor-pointer">
                            <h4 onclick="showPassword4()" class="mx-1 mt-4 text-xl text-pink-600 cursor-pointer">Show Password</h4>
                        </div>    
                    </div>

                    <div></div>

                    <div class="col-row-2">
                        <label class="text-xl text-sky-600 block mb-1 font-large">Reason</label>
                        <textarea  name="reason"
                            class="w-full bg-gray-400 bg-opacity-10 rounded border border-gray-700 focus:border-rose-600 focus:bg-transparent focus:ring-2 focus:ring-rose-400 h-32 text-base outline-none text-stone-900 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out shadow-2xl shadow-black"
                            placeholder="Proper valid reason *"></textarea>
                    </div>

                    <div></div>
                    <div class="mx-auto my-2">
                        <button type="submit" name="submit">
                            <a class="relative inline-flex items-center justify-center p-4 px-5 py-3 overflow-hidden font-medium text-indigo-600 transition duration-300 ease-out rounded-full shadow-xl group hover:ring-1 hover:ring-purple-500">
                                <span class="absolute inset-0 w-full h-full bg-gradient-to-br from-blue-600 via-purple-600 to-pink-700"></span>
                                <span class="absolute bottom-0 right-0 block w-64 h-64 mb-32 mr-4 transition duration-500 origin-bottom-left transform rotate-45 translate-x-24 bg-pink-500 rounded-full opacity-30 group-hover:rotate-90 ease"></span>
                                <span class="relative text-white text-xl">Remove User</span>
                            </a>
                        </button>
                    </div>
                </div>    
            </form>
        <button>
            <a href="admin_work.php" class="relative inline-flex items-center px-12 py-3 overflow-hidden text-lg font-medium text-indigo-600 border-2 border-indigo-400 rounded-full hover:text-white group hover:bg-gray-50">
                    <span class="absolute left-0 block w-full h-0 transition-all bg-indigo-400 opacity-100 group-hover:h-full top-1/2 group-hover:top-0 duration-400 ease"></span>
                    <span class="absolute right-0 flex items-center justify-start w-10 h-10 duration-300 transform translate-x-full group-hover:translate-x-0 ease">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </span>
                    <span class="relative">Administrator</span>
            </a>
        </button>
        <!-- HL4    svg      -->
        <div class="fixed bottom-0 left-0 bg-opacity-70 -z-10">
            <?php
                include '../svg/svg.php';
                echo $svg8;
            ?>
        </div>
    </section>
</body>
</html>


<!-- --------------------- -->
<!--HL3      php           -->
<!-- --------------------- -->


<?php
if(isset($_POST['submit']))
{
    include "../db/db_con.php";
    $id=mysqli_real_escape_string($connection,$_POST['id']);
    $password=mysqli_real_escape_string($connection,$_POST['password']);
    $name=mysqli_real_escape_string($connection,$_POST['name']);
    $reason=mysqli_real_escape_string($connection,$_POST['reason']);
    $selectQuery="select * from user where user_ID='$id'";
    $query1=mysqli_query($connection,$selectQuery);
    $res=mysqli_fetch_assoc($query1);
    if($res['name']==$name)
    {
        $dbpass=$res['password'];
        $dec_pass=password_verify($password,$dbpass);

        if($dec_pass)
        { //hl3 transfar
            $lastrow="SELECT serial_no FROM non_active_user ORDER BY serial_no DESC LIMIT 1";
            $qs=mysqli_query($connection,$lastrow);
            $lastno=mysqli_fetch_assoc($qs);
            $d1=$lastno['serial_no'] === null ? $d1=1 : $d1=$lastno['serial_no'] + 1;
            $d2=$res['user_ID'];
            $d3=$res['name'];
            $d4=$res['post'];
            $d5=$res['ph_no'];
            $d6=$res['email'];
            $insert="INSERT INTO `non_active_user`(`serial_no`, `user_ID`, `name`, `post`, `phone Number`, `email`, `reason`) VALUES ('$d1','$d2','$d3','$d4','$d5','$d6','$reason')";
            $q2=mysqli_query($connection,$insert);
            
            if($q2)
            {
                $delete="delete from user where user_ID='$id'";
                $q3=mysqli_query($connection,$delete);
                if($q3)
                {
                    ?>
                    <script>
                        alert("User deleted successfully...");
                    </script>
                    <?php
                }
            }
            else
            {
                ?>
                <script>
                    alert("Oops! something went wrong  :(");
                </script>
                <?php
            }
        }
        else
        {//password incorrect
            ?>
            <script>
                alert("Password Incorrect !");
            </script>
            <?php
        }
        
    }
    else{
        ?>
        <script>
            alert("Invalid user name");
        </script>
        <?php
    }
}
