<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/hide.css">
    <link rel ="stylesheet" href="../css/reset.css">
</head>
<body class="bg-slate-600 px-4">
    <section class="reset shadow-2xl shadow-black">
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post" autocomplete="off">
            <div class="mx-8 mt-8">
                <p class="text-2xl text-pink-600">An activation link will be send within 30 s to</p>
                <p class="text-2xl text-pink-600">your registerd email.</p> 
                <p class="text-2xl text-pink-600">To save changes visit your email.</p>
            </div>
            <div class="inline-grid lg:grid-cols-1 gap-4 p-8 mx-auto w-full">

                <div>
                    <label class="text-xl text-sky-500 block mb-1 font-large">User ID</label>
                    <input type="text" name="id"
                        class="bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-rose-600 focus:bg-gray-900 focus:ring-2 focus:ring-pink-600 text-base outline-none text-rose-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out w-full "
                        placeholder="Enter User ID *" required/>
                </div>

                <div>
                    <label class="text-xl text-sky-500 block mb-1 font-large">Email</label>
                    <input type="email" name="email"
                        class="bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-rose-600 focus:bg-gray-900 focus:ring-2 focus:ring-pink-600 text-base outline-none text-rose-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out w-full"
                        placeholder="Enter users's Email *" required/>
                </div>

                <div class="m-10">
                    <input type="submit" name="submit" value="SEND" 
                        class="flex text-white bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded text-lg cursor-pointer">
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
    include "db_con.php";
    if(isset($_POST['submit']))
    {
        $id=mysqli_real_escape_string($connection,$_POST['id']);
        $email=mysqli_real_escape_string($connection,$_POST['email']);
        $selectquery="select * from user where user_ID='$id'";
        $query1=mysqli_query($connection,$selectquery);
        $id_count=mysqli_num_rows($query1);

        if($id_count)
        {
            $res=mysqli_fetch_assoc($query1);
            $dbemail=$res['email'];
            $token=$res['token'];
            $bits=bin2hex(random_bytes(10));
            if($dbemail==$email)
            {//valid
                $link="http://localhost/projects/on_going/code/user/reset_2.php?link=$token";
                $to_email = "$dbemail";
                $subject = "Reset Password.";
                $body = "Hello ".$res['post']." ".$res['name']." click this link to reset your password => ".$link;
                $headers = "From: userotp55@gmail.com";

                if (mail($to_email, $subject, $body, $headers)) 
                {
                    ?>
                        <script>
                            alert("Reset link has been send to your registered email address.");
                            location.replace("../index.php");
                        </script>
                    <?php
                }
                else 
                {
                   ?>
                        <script>
                            alert("Email sending failed...")
                        </script>
                   <?php
                }
            }
            else
            {//different email or id
               ?> 
                <script>
                    alert('Invalid email for user ID');
                </script>
               <?php 
            }
        }
        else
        {
            ?>
            <script>
                alert("Invalid User ID");
            </script>
            <?php
        }  
    }
?>
