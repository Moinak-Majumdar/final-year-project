<?php
if(isset($_GET['id']))
{
    include "../db/db_con.php";
    $id=$_GET['id'];
    $select="SELECT * FROM `mail` WHERE `user_ID`='$id'";
    $query=mysqli_query($connection,$select);
    $res=mysqli_fetch_assoc($query);
} else {
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
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Criminal Record Management System"/>
    <meta name="author" content="Moinak Majumdar"/>
    <meta name='keywords' content = 'crime, prisoner, punishment'/>
    <link rel="icon" type="image/png" sizes="32x32" href="../icon/logo32.png"/>
    <title>Mail form <?php echo "$id"; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/hide.css">
</head>
<body class="bg-zinc-300">
        <section class="py-10 md:px-40 px-4">
            <h1 class="font-extrabold text-5xl text-purple-600 border-double border-b-2 border-purple-400 w-fit">Mail Information</h1>
            <div class="mt-8 grid lg:grid-cols-2 gap-y-0.5 gap-x-0.5">
                <div>
                    <label class="text-xl text-indigo-700 block mb-1 font-large">From :</label>
                    <h1 class="font-medium text-3xl text-green-500">
                    <?php echo $res['name']?></h1>
                </div>

                <div>
                        <label class="text-xl text-indigo-700 block mb-1 font-large">User Id :</label>
                        <h1 class="font-medium text-3xl text-green-500">
                        <?php echo $res['user_ID']?></h1>
                </div>

                <div>
                    <label class="text-xl text-indigo-700 block mb-1 font-large">Message :</label>
                    <div class="w-auto ml-2">
                        <h1 class="font-medium text-2xl text-slate-900">
                            <?php echo $res['massage']?></h1>
                    </div>
                </div>

                <div></div>
                    
                <div>
                        <label class="text-xl text-indigo-700 block mb-1 font-large">User Email :</label>
                        <h1 class="font-medium text-2xl text-blue-500 italic">
                        <?php echo $res['email']?></h1>
                </div>

                <div></div>    
                <div>
                        <label class="text-xl text-indigo-700 block mb-1 font-large">Received At :</label>
                        <h1 class="font-medium text-2xl text-rose-500 italic">
                        <?php echo $res['date']?></h1>
                </div>
                <div></div>

                <div class="space-x-4 mt-10 h-auto">
                    <a href="check_mail.php" class="m-4 text-white bg-gradient-to-r from-green-400 to-blue-400 border-0 py-2 px-8 focus:outline-none hover:from-pink-500 hover:to-yellow-500  rounded-full text-lg shadow-xl shadow-black">Back</a>

                </div>
            </div>
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

