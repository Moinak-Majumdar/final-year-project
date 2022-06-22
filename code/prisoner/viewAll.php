<?php 
    session_start();
    if(!isset($_SESSION['name']))
    {
        ?>
        <script>
            alert("You are logged out. Please login again");
            location.replace("../index.php")
        </script>
        <?php
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8 border-stone-400 border-2">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Criminal Record Management System" />
    <meta name="author" content="Moinak Majumdar"/>
    <meta name='keywords' content = 'crime, prisoner, punishment'/>
    <link rel="icon" type="image/png" sizes="32x32" href="../icon/logo32.png"/>
    <link rel="icon" type="image/png" sizes="36x36" href="../icon/logo36.png"/>
    <link rel="icon" type="image/png" sizes="48x48" href="../icon/logo48.png"/>
    <link rel="icon" type="image/png" sizes="72x72" href="../icon/logo72.png"/>
    <link rel="icon" type="image/png" sizes="96x96" href="../icon/logo96.png"/>
    <link rel="icon" type="image/png" sizes="128x128" href="../icon/logo128.png"/>
    <link rel="icon" type="image/png" sizes="144x144" href="../icon/logo144.png"/>
    <link rel="icon" type="image/png" sizes="152x152" href="../icon/logo152.png"/>
    <link rel="icon" type="image/png" sizes="152x152" href="../icon/logo152.png"/>
    <link rel="icon" type="image/png" sizes="192x192" href="../icon/logo192.png"/>
    <link rel="icon" type="image/png" sizes="384x384" href="../icon/logo384.png"/>
    <link rel="icon" type="image/png" sizes="512x512" href="../icon/logo512.png"/>
    <link rel="apple-touch-icon" href="../icon/logo192.png" />
    <link rel="manifest" href="../manifest.json" />
    <title>All Prisoners</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel ="stylesheet" href="../css/hide.css">
</head>
<body class="body-font sticky flex justify-center items-center place-items-center">
    <div class="">
        <h1 class="mt-8 text-center font-semibold text-5xl text-indigo-700">View All Prisoners</h1>
    </div>
    <!-- HL4    svg      -->
    <div class="fixed top-0 left-0 -z-20">
        <?php 
            include '../svg/svg.php';
            echo $svg6;
        ?>
    </div>
    <div class="absolute top-32">
        <table>
            <thead class="text-blue-700">
                <tr>
                    <th class="p-4 border-blue-600 border-2">NAME</th>
                    <th class="p-4 border-blue-600 border-2">PRISONER ID</th>
                    <th class="p-4 border-blue-600 border-2">PENAL CODE</th>
                    <th class="p-4 border-blue-600 border-2">MEDICAL</th>
                    <th class="p-4 border-blue-600 border-2">DATE OF ARREST</th>
                    <th class="p-4 border-blue-600 border-2">PUNISHMENT</th>
                    <th class="p-4 border-blue-600 border-2">GUARDIAN PHONE NUMBER</th>
                    <th class="p-4 border-blue-600 border-2">FULL DETAILS</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include "../db/db_con.php";
                $select="select * from prisoner";
                $q1=mysqli_query($connection,$select);
                $no=mysqli_num_rows($q1);
                if($no)
                {
                    while($data=mysqli_fetch_assoc($q1))
                    {
                    ?>
                        <tr>
                            <td class="px-8 border-stone-900 border-2"> <?php echo $data['name'];?></td>
                            <td class="px-8 border-stone-900 border-2"> <?php echo $data['prisoner_id'];?></td>
                            <td class="px-8 border-stone-900 border-2"> <?php echo $data['penal_code'];?></td>
                            <td class="px-8 border-stone-900 border-2"> <?php echo $data['medical'];?></td>
                            <td class="px-8 border-stone-900 border-2"> <?php echo $data['arrest_date'];?></td>
                            <td class="px-8 border-stone-900 border-2"> <?php echo $data['punishment'];?></td>
                            <td class="px-8 border-stone-900 border-2"> <?php echo $data['phone_no'];?></td>
                            <td class="px-8 border-stone-900 border-2"><a class="text-blue-500 no-underline hover:underline ..." href="viewCriminal.php?id=<?php echo $data['prisoner_id'];?>">View More</a></td>
                        </tr>
                    <?php
                    }
                }
                else
                {
                    ?>
                        <script>
                            alert("No Prisoners to view !!");
                            location.replace("work.php");
                        </script>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <div class="w-full h-auto mt-10 flex justify-center">
            <a href="work.php" class="text-white bg-gradient-to-r from-green-400 to-blue-400 border-0 py-2 px-8 focus:outline-none hover:from-pink-500 hover:to-yellow-500  rounded-full text-lg shadow-xl shadow-black">Back</a>
        </div>
    </div>
</body>
</html>