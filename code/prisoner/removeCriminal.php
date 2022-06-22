<?php
  session_start();  
  include "../db/db_con.php";
  if(!isset($_SESSION['prisoner_id']))
    {
        ?>
        <script>
            alert("error");
            window.location.href='work.php'
        </script>
        <?php
    }
    else
    {
        $id=$_SESSION['prisoner_id'];
        $select="SELECT * FROM prisoner WHERE prisoner_id='$id'";
        $q1=mysqli_query($connection,$select);
        $res=mysqli_fetch_assoc($q1);
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
    <link rel="icon" type="image/png" sizes="32x32" href="%PUBLIC_URL%/../icon/logo32.png"/>
    <link rel="icon" type="image/png" sizes="36x36" href="%PUBLIC_URL%/../icon/logo36.png"/>
    <link rel="icon" type="image/png" sizes="48x48" href="%PUBLIC_URL%/../icon/logo48.png"/>
    <link rel="icon" type="image/png" sizes="72x72" href="%PUBLIC_URL%/../icon/logo72.png"/>
    <link rel="icon" type="image/png" sizes="96x96" href="%PUBLIC_URL%/../icon/logo96.png"/>
    <link rel="icon" type="image/png" sizes="128x128" href="%PUBLIC_URL%/../icon/logo128.png"/>
    <link rel="icon" type="image/png" sizes="144x144" href="%PUBLIC_URL%/../icon/logo144.png"/>
    <link rel="icon" type="image/png" sizes="152x152" href="%PUBLIC_URL%/../icon/logo152.png"/>
    <link rel="icon" type="image/png" sizes="152x152" href="%PUBLIC_URL%/../icon/logo152.png"/>
    <link rel="icon" type="image/png" sizes="192x192" href="%PUBLIC_URL%/../icon/logo192.png"/>
    <link rel="icon" type="image/png" sizes="384x384" href="%PUBLIC_URL%/../icon/logo384.png"/>
    <link rel="icon" type="image/png" sizes="512x512" href="%PUBLIC_URL%/../icon/logo512.png"/>
    <link rel="apple-touch-icon" href="%PUBLIC_URL%/../icon/logo192.png" />
    <link rel="manifest" href="%PUBLIC_URL%/../manifest.json" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/hide.css">
    <title>Remove Prisoner</title>
</head>
<body class="bg-slate-800">
    <div class="py-10 px-40">
        <h1 class="font-medium text-5xl text-pink-600">Remove Prisoner</h1>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
            <div class="mt-8 grid lg:grid-cols-5 gap-8 px-auto mx-auto">

                <div>
                <label class="text-xl text-sky-500 block mb-1 font-large">Name : </label>
                <h1 class="font-medium text-2xl text-purple-500 px-2">
                    <?php echo $res['name'];?>
                </h1>
                </div>

                <div>
                <label class="text-xl text-sky-500 block mb-1 font-large">Prisoner Id :</label>
                <h1 class="font-medium text-2xl text-purple-500">
                    <?php echo $_SESSION['prisoner_id']; ?></h1>
                </div>

                <div>
                <label class="text-xl text-sky-500 block mb-1 font-large">Date Of Birth : </label>
                <h1 class="font-medium text-2xl text-slate-300 px-2">
                    <?php echo $res['dob'];?>
                </h1>
                </div>

                <div class="row-span-4">
                <label class="text-xl text-sky-500 block mb-1 font-large">Photo : </label>
                <img src="<?php echo $res['photo']?>" id="display_photo" class="h-72 w-64 p-1 m-2 border-double border-4 border-pink-600"></img>
                </div>

                <div class="row-span-4" >
                <label class="text-xl text-sky-500 block mb-1 font-large">Police File : </label>
                <img src="<?php echo $res['file']?>" id="display_file" class="h-72 w-64 p-1 m-2 border-double border-4 border-pink-600"></img>
                </div>

                <div>
                <label class="text-xl text-sky-500 block mb-1 font-large">Sex</label>
                <h1 class="font-medium text-2xl text-slate-300 px-2">
                    <?php echo $res['sex'];?>
                </h1> 
                </div>

                <div>
                <label class="text-xl text-sky-500 block mb-1 font-large">Identity Type</label>
                <h1 class="font-medium text-2xl text-slate-300 px-2">
                    <?php echo $res['identity_type'];?>
                </h1>  
                </div>

                <div>
                <label class="text-xl text-sky-500 block mb-1 font-large">Identity Number</label>
                <h1 class="font-medium text-2xl text-slate-300 px-2"> 
                    <?php echo $res['identity_no'];?>
                </h1> 
                </div>

                <div>
                <label class="text-xl text-sky-500 block mb-1 font-large">Guardian Name : </label>
                <h1 class="font-medium text-2xl text-slate-300 px-2">
                    <?php echo $res['g_name'];?>
                </h1> 
                </div>

                <div>
                    <label class="text-xl text-sky-500 block mb-1 font-large">Phone Number : </label>
                    <h1 class="font-medium text-2xl text-slate-300 px-2">
                        <?php echo $res['phone_no'];?>
                    </h1> 
                </div>
        
                <div>
                <label class="text-xl text-sky-500 block mb-1 font-large">Address : </label>
                <h1 class="font-medium text-2xl text-slate-300 px-2">
                    <?php echo $res['address'];?>
                </h1>
                </div>

                <div>
                <label class="text-xl text-sky-500 block mb-1 font-large">Crime(s) committed</label>
                <h1 class="font-medium text-2xl text-slate-300 px-2">
                    <?php echo $res['crime'];?>
                </h1> 
                </div>

                <div>
                <label class="text-xl text-sky-500 block mb-1 font-large">Punishment : </label>
                <h1 class="font-medium text-2xl text-slate-300 px-2"> 
                    <?php echo $res['punishment'];?>
                </h1> 
                </div>

                <div>
                <label class="text-xl text-sky-500 block mb-1 font-large">Date of Arrest</label>
                <h1 class="font-medium text-2xl text-slate-300 px-2">
                    <?php echo $res['arrest_date'];?>
                </h1> 
                </div>

                <div>
                <label class="text-xl text-sky-500 block mb-1 font-large">Date of Release</label>
                <input type="date" name="release_date" required
                    class="bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-rose-600 focus:bg-gray-900 focus:ring-2 focus:ring-pink-600 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out w-full"/>
                </div>

                <div class="row-span-2">
                <label class="text-xl text-sky-500 block mb-1 font-large">Reason : </label>
                <textarea name="reason" required
                    class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-rose-600 focus:bg-gray-900 focus:ring-2 focus:ring-rose-400 h-32 text-base outline-none text-gray-100 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>   
            </div>

            <div class="space-x-4 space-y-4 mt-8">
                <input type="submit" name="submit" value="Remove Prisoner"
                class="py-2 px-4 bg-blue-500 text-white rounded-lg cursor-pointer hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50 ">
                <a href="work.php" class="cursor-pointer text-white bg-gradient-to-r from-green-400 to-blue-400 border-0 py-2 px-8 focus:outline-none hover:from-pink-500 hover:to-yellow-500  rounded-full text-lg ...">Back</a>
            </div>
        </form>
        <!-- Hl4  SVG   -->
        <div class = "fixed -bottom-20 left-0 -z-10 opacity-60 ">
            <?php 
                include '../svg/svg.php';
                echo $svg1 
            ?>
        </div>
    </div>
</body>
</html>

<!-------------------------->
<!--------- php ------------->
<!-- --------------------- -->

<?php
include "../db/db_con.php";
if(isset($_POST['submit']))
{
    $lastrow="SELECT serial_no FROM non_existing_prisoner ORDER BY serial_no DESC LIMIT 1";
    $qs=mysqli_query($connection,$lastrow);
    $lastno=mysqli_num_rows($qs);
    if($lastno == 0)
    {
        $d1=1;
    }
    else
    {
        $last=mysqli_fetch_assoc($qs);
        $d1=$last['serial_no']+1;
    }
        $d2=$res['prisoner_id'];
        $d3=$res['name'];
        $d4=$res['sex'];
        $d5=$res['dob'];
        $d6=$res['identity_type'];
        $d7=$res['identity_no'];
        $d8=$res['g_name'];
        $d9=$res['phone_no'];
        $d10=$res['address'];
        $d11=mysqli_real_escape_string($connection,$_POST['release_date']);
        $d12=$res['arrest_date'];
        $d13=$res['punishment'];
        $d14=mysqli_real_escape_string($connection,$_POST['reason']);
        $d15=$res['photo'];
        $d16=$res['file'];
        $d17=$_SESSION['name'];
        $d18=$res['crime'];
        
        //echo($d1.$d2.$d3.$d4.$d5.$d6.$d7.$d8.$d9.$d10.$d11.$d12.$d13.$d14.$d15.$d18.$reason);
        $insertQuery = "INSERT INTO `non_existing_prisoner`(`serial_No`, `prisoner_id`, `name`, `dob`, `identity_type`, `identity_no`, `crime`, `arrest_date`, `release_date`, `punishment`, `photo`, `file`, `reason`, `in_charge`, `g_name`, `phone_no`, `address`, `sex`) VALUES ('$d1','$d2','$d3','$d5','$d6','$d7','$d18','$d12','$d11','$d13','$d15','$d16','$d14','$d17','$d8','$d9','$d10','$d4')";

        $query2=mysqli_query($connection,$insertQuery);

        if($query2)
        {
            $delete="DELETE FROM `prisoner` WHERE prisoner_id='$d2'";
            $query3=mysqli_query($connection,$delete);
            if($query3)
            {
                ?>
                <script>
                    alert("Prisoner removed successfully...");
                    location.replace("work.php");
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

?>