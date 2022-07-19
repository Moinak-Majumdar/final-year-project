<?php
if(isset($_GET['id']))
{
    include "../db/db_con.php";
    $id=$_GET['id'];
    $select="SELECT * FROM `non_existing_prisoner` WHERE `prisoner_id`='$id'";
    $query=mysqli_query($connection,$select);
    $res=mysqli_fetch_assoc($query);
}
else
{
    ?>
    <script>
        alert("Oops! something went wrong !!")
        window.location.href='work.php'
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
    <meta name="description" content="Criminal Record Management System" />
    <meta name="author" content="Moinak Majumdar"/>
    <meta name='keywords' content = 'crime, prisoner, punishment'/>
    <link rel="icon" type="image/png" sizes="32x32" href="../icon/logo32.png"/>
    <title>Criminal <?php echo "$id"; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel ="stylesheet" href="../css/hide.css">
</head>
<body class="bg-zinc-200 flex">
    <div class="py-10 mx-auto px-2">
        <h1 class="font-medium text-5xl text-purple-600 border-double border-b-2 border-purple-400">Criminal Information</h1>
        <div class="mt-8 grid lg:grid-cols-3 gap-y-0.5 gap-x-0.5">
                <div>
                        <h1 class="text-xl text-indigo-700 block mb-1">Name :
                                <span class="font-medium text-3xl text-rose-600">
                                <?php echo $res['name']?></span>
                        </h1>
                </div>

                <div>
                        <h1 class="text-xl text-indigo-700 block mb-1">Date Of Birth :
                                <span class="font-medium text-2xl text-slate-800">
                                <?php echo $res['dob']?></span>
                        </h1>
                </div>

                <div class="row-span-4">
                        <h1 class="text-xl text-indigo-700 block mb-1">Photo :</h1>
                        <img class="h-72 w-64 p-1 border-double border-4 border-gray-900" src="<?php echo $res['photo'];?>"></img>
                </div>

                <div>
                        <h1 class="text-xl text-indigo-700 block mb-1">Criminal Id :
                                <span class="font-medium text-3xl text-green-500">
                                        <?php echo $res['prisoner_id']?></span>
                        </h1>
                </div>

                <div>
                        <h1 class="text-xl text-indigo-700 block mb-1">Sex :
                                <span class="font-medium text-2xl text-slate-800">
                                        <?php echo $res['sex']?></span>
                        </h1>
                </div>

                <div>
                        <h1 class="text-xl text-indigo-700 block mb-1">Identity type :
                                <span class="font-medium text-2xl text-slate-800">
                                        <?php echo $res['identity_type']?></span>
                        </h1>
                </div>

                <div>
                        <h1 class="text-xl text-indigo-700 block mb-1">Identity Number :
                                <span class="font-medium text-2xl text-slate-800">
                                        <?php echo $res['identity_no']?></span>
                        </h1>
                </div>

                <div>
                        <h1 class="text-xl text-indigo-700 block mb-1">Guardian Name :
                                <span class="font-medium text-2xl text-slate-800">
                                        <?php echo $res['g_name']?></span>
                        </h1>
                </div>

                <div>
                        <h1 class="text-xl text-indigo-700 block mb-1">Phone Number :
                                <span class="font-medium text-2xl text-slate-800">
                                        <?php echo $res['phone_no']?></span>
                        </h1>
                </div>

                <div>
                        <h1 class="text-xl text-indigo-700 block mb-1">Address :
                                <span class="font-medium text-2xl text-slate-800">
                                        <?php echo $res['address']?></span>
                        </h1>
                </div>
                     
                <div>
                        <h1 class="text-xl text-indigo-700 block mb-1">Date of Arrest :
                            <span class="font-medium text-2xl text-slate-800 italic">
                                    <?php echo $res['arrest_date']?></span>
                        </h1>
                </div>

                <div class="row-span-4">
                        <h1 class="text-xl text-indigo-700 block mb-1">Case File :</h1>
                        <img class="h-72 w-64 p-1 border-double border-4 border-rose-600" src="<?php echo $res['file'];?>"></img>
                </div>
        
                <div>
                        <h1 class="text-xl text-indigo-700 block mb-1">Crime(s) committed:
                                <span class="font-medium text-2xl text-slate-800">
                                        <?php echo $res['crime']?></span>
                        </h1>
                </div>

                <div>
                        <h1 class="text-xl text-indigo-700 block mb-1">Punishment :
                                <span class="font-medium text-2xl text-slate-800">
                                        <?php echo $res['punishment']?></span>
                        </h1>
                </div>        

                <div>
                        <h1 class="text-xl text-indigo-700 block mb-1">Date of Release :
                            <span class="font-medium text-2xl text-slate-800 italic">
                                    <?php echo $res['release_date']?></span>
                        </h1>
                </div>
                    
                <div>
                    <h1 class="text-xl text-indigo-700 block mb-1">From :
                            <span class="font-medium text-2xl text-slate-800 italic">
                                    <?php echo $res['non_existing_from']?></span>
                        </h1>
                </div>

                <div>
                    <h1 class="text-xl text-indigo-700 block mb-1">Reason
                            <span class="font-medium text-2xl text-slate-800">
                                    <?php echo $res['reason']?></span>
                        </h1>
                </div>
        </div>
        <div class="w-fit mt-10">
                <a href="all_non_existing.php" class="text-white bg-gradient-to-r from-green-400 to-blue-400 border-0 py-2 px-8 focus:outline-none hover:from-pink-500 hover:to-yellow-500  rounded-full text-lg shadow-xl shadow-black">Back</a>
        </div>
        <div class = "fixed -bottom-10 left-0 -z-10 opacity-80">
        <?php 
                include '../svg/svg.php';
                echo $svg4 
        ?>
        </div>
    </div>
</body>
</html>