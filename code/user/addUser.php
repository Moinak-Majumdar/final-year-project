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
    <title>ADD USER</title>
    <script src="../js/show_pass.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/hide.css">
</head>
<body class="bg-gray-300 h-full w-full flex justify-center items-center">
    <section class="w-auto h-auto flex justify-center items-center flex-col py-8">
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post" autocomplete="off">                
                <h1 class="mx-auto text-4xl text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-500 to-indigo-800 font-extrabold w-fit">Add User</h1>
                <div class="grid xl:grid-cols-2 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 grid-cols-1 gap-4 p-8 mx-6">
                    <div>
                        <label class="text-xl text-sky-600 block mb-1 font-large">User Name</label>
                        <input type="text" name="name"
                            class="w-full bg-gray-400 rounded-lg border border-indigo-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-400 focus:bg-transparent bg-opacity-10 text-base outline-none text-gray-800 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out shadow-2xl shadow-black"
                            placeholder="Enter User name *" required/>
                    </div>

                    <div>
                        <label class="text-xl text-sky-600 block mb-1 font-large">Email</label>
                        <input type="text" name="email"
                            class="w-full bg-gray-400 rounded-lg border border-indigo-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-400 focus:bg-transparent bg-opacity-10 text-base outline-none text-gray-800 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out shadow-2xl shadow-black"
                            placeholder="Enter User email *" required/>
                    </div>

                    <div>
                        <label class="text-xl text-sky-600 block mb-1 font-large">Phone Number</label>
                        <input type="text" name="ph_no"
                            class="w-full bg-gray-400 rounded-lg border border-indigo-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-400 focus:bg-transparent bg-opacity-10 text-base outline-none text-gray-800 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out shadow-2xl shadow-black"
                            placeholder="Enter User Phone Number *" required/>
                    </div>

                    <div>
                        <label class="text-xl text-sky-600 block mb-1 font-large">User ID</label>
                        <input type="text" name="user_ID"
                            class="w-full bg-gray-400 rounded-lg border border-indigo-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-400 focus:bg-transparent bg-opacity-10 text-base outline-none text-gray-800 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out shadow-2xl shadow-black"
                            placeholder="Enter User ID *" required/>
                    </div>

                    <div>
                        <label class="text-xl text-sky-600 block mb-1 font-large">Designation</label>
                        <input type="text" name="post"
                            class="w-full bg-gray-400 rounded-lg border border-indigo-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-400 focus:bg-transparent bg-opacity-10 text-base outline-none text-gray-800 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out shadow-2xl shadow-black"
                            placeholder="Enter User's Designation *" required/>
                    </div>

                    <div></div>

                    <div>
                        <label class="text-xl text-sky-600 block mb-1 font-large">Password</label>
                        <input type="password" name="password" id="password"
                            class="w-full focus:bg-transparent rounded-lg border border-indigo-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500 bg-gray-400 bg-opacity-10 text-base outline-none text-gray-800 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out shadow-2xl shadow-black"
                            placeholder="Enter User Password *" required/>
                        <div class="inline-flex justify-center">
                            <input type="checkbox" onclick="showPassword2()" id="ckbox"
                                class="mx-4 ml-8 mt-4 cursor-pointer">
                            <h2 onclick="showPassword3()"
                                class="mx-1 mt-4 text-xl text-pink-600 cursor-pointer hover:text-pink-700">Show Password</h2>
                        </div>    
                    </div>

                    <div>
                        <label class="text-xl text-sky-600 block mb-1 font-large">Confirm Password</label>
                        <input type="password" name="confirm_Password" id="confirm_password"
                            class="w-full focus:bg-transparent rounded-lg border border-indigo-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500 bg-gray-400 bg-opacity-10 text-base outline-none text-gray-800 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out shadow-2xl shadow-black"
                            placeholder="Confirm New Password *" required/>
                    </div>

                    <div class="mx-auto my-2">                    
                        <button type="submit" name="submit">
                            <a class="relative inline-flex items-center justify-center p-4 px-5 py-3 overflow-hidden font-medium text-indigo-600 transition duration-300 ease-out rounded-full shadow-xl group hover:ring-1 hover:ring-purple-500">
                                <span class="absolute inset-0 w-full h-full bg-gradient-to-br from-blue-600 via-purple-600 to-pink-700"></span>
                                <span class="absolute bottom-0 right-0 block w-64 h-64 mb-32 mr-4 transition duration-500 origin-bottom-left transform rotate-45 translate-x-24 bg-pink-500 rounded-full opacity-30 group-hover:rotate-90 ease"></span>
                                <span class="relative text-white text-xl">Add User</span>
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
<!--Hl3      php           -->
<!-- --------------------- -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{   
    include "../db/db_con.php";
    if(isset($_POST['submit']))
    {
        $name=mysqli_real_escape_string($connection,$_POST['name']);
        $email=mysqli_real_escape_string($connection,$_POST['email']);
        $ph_no=mysqli_real_escape_string($connection,$_POST['ph_no']);
        $user_ID=mysqli_real_escape_string($connection,$_POST['user_ID']);
        $post=mysqli_real_escape_string($connection,$_POST['post']);
        $password=mysqli_real_escape_string($connection,$_POST['password']);
        $confirm_Password=mysqli_real_escape_string($connection,$_POST['confirm_Password']);
        $token=bin2hex(random_bytes(20));

        $encrip_pass=password_hash($password,PASSWORD_BCRYPT);

        $emailquery="select * from user where email='$email'";
        $query1=mysqli_query($connection,$emailquery);
        $emailCount=mysqli_num_rows($query1);

        $phquery="select * from user where ph_no='$ph_no'";
        $query2=mysqli_query($connection,$phquery);
        $phCount=mysqli_num_rows($query2);

        $userquery="select * from user where user_ID='$user_ID'";
        $query3=mysqli_query($connection,$userquery);
        $userCount=mysqli_num_rows($query3);

        $last_row="SELECT serial_no FROM user ORDER BY serial_no DESC LIMIT 1";
        $query4=mysqli_query($connection,$last_row);
        $res=mysqli_fetch_assoc($query4);
        $next=$res['serial_no']+1;

        if($emailCount>0 || $phCount>0 || $userCount>0)
        {
            if($emailCount>0)
            {
                ?>
                <script>
                    alert("email id already exist");
                </script>
                <?php   
                mysqli_close($connection);
            }
            if($phCount>0)
            {   
                ?>
                <script>
                    alert("Phone number already exist");
                </script>
                <?php   
                mysqli_close($connection);
            }
            if($userCount>0)
            {   
                ?>
                <script>
                    alert("User already exist");
                </script>
                <?php
                mysqli_close($connection);
            }
        }
        else
        {
            $regx2='/^[of|ji]{2}[0-9]{4}$/';
            $regx4='/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{5,10}$/';
            if(preg_match($regx2,$user_ID))
            {
                if($password === $confirm_Password)
                {
                    if(strlen($password)<5 || strlen($password)>10)
                    {
                        ?>
                        <script>
                            alert("Password at least 5 to 10 character long.");
                        </script>
                        <?php   
                        
                    }
                    elseif(!preg_match($regx4,$password))
                    {   
                        ?>
                        <script>
                            alert("password should contain at least one number and one special character.");
                        </script>
                        <?php   
                
                    }
                    else
                    {   
                        $insertquery="insert into user(serial_no,name,user_ID,post,email,ph_no,password,token) values('$next','$name','$user_ID','$post','$email','$ph_no','$encrip_pass','$token')";

                        $query5=mysqli_query($connection,$insertquery);
                        if($query5)
                        {    
                            ?>
                            <script>
                               alert("User Added Successfully");
                            </script>
                            <?php
                            mysqli_close($connection);
                        }
                        else
                        {
                            ?>
                            <script>
                                alert("OOPS! something went wrong");
                            </script>
                            <?php   
                        }
                    }
                }
                else
                {
                    ?>
                    <script>
                        alert("Password mismatch");
                    </script>
                    <?php   
                    //mysqli_close($connection);
                }
            }
            else
            {
                ?>
                <script>
                    alert("Invalid User ID for the system");
                </script>
                <?php
            }
        }
    }
}
?>
 