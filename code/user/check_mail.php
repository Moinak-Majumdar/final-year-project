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
    <meta charset="UTF-8 border-stone-400 border-2">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Mails</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/hide.css">
</head>
<body class="bg-gray-300 body-font sticky flex justify-center items-center place-items-center">
    <h1 class="relative top-8 font-bold text-4xl text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-indigo-700">Check All Mail</h1>
    <div class="absolute top-32">
        <table>
            <thead class="text-blue-700">
                <tr>
                    <th class="p-4 border-blue-600 border-2">User ID</th>
                    <TH class="p-4 border-blue-600 border-2">From</TH>
                    <th class="p-4 border-blue-600 border-2">User Mail</th>
                    <th class="p-4 border-blue-600 border-2">Received At</th>
                    <th class="p-4 border-blue-600 border-2 text-green-600">FULL <br> DETAILS</th>
                    <th class="p-4 border-blue-600 border-2 text-red-600">Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include "../db/db_con.php";
                $select="select * from mail";
                $q1=mysqli_query($connection,$select);
                $no=mysqli_num_rows($q1);
                if($no)
                {
                    while($data=mysqli_fetch_assoc($q1))
                    {
                ?>
                <tr>
                    <td class="px-8 border-stone-900 border-2"> <?php echo $data['user_ID'];?></td>
                    <td class="px-8 border-stone-900 border-2"> <?php echo $data['name'];?></td>
                    <td class="px-8 border-stone-900 border-2"> <?php echo $data['email'];?></td>
                    <td class="px-8 border-stone-900 border-2"> <?php echo $data['date'];?></td>
                    <td class="px-8 border-stone-900 border-2 text-center">
                        <a href="view_mail.php?id=<?php echo $data['user_ID'];?>" target="_moinak">
                            <ion-icon name="search-sharp" class="text-xl text-green-600 mt-1 cursor-pointer"></ion-icon>
                        </a>
                    </td>
                    <td class="px-8 border-stone-900 border-2 text-center">
                        <a href="delete_mail.php?id=<?php echo $data['user_ID'];?>">
                            <ion-icon name="trash-sharp" class="text-xl text-red-600 mt-1 cursor-pointer"></ion-icon>
                        </a>
                    </td>
                </tr>
                <?php
                    }
                }
                else
                {
                    ?>
                        <script>
                            alert("No Mail to view !!");
                            location.replace("admin_work.php");
                        </script>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <button class="w-full h-auto flex justify-center mt-10">
            <a href="admin_work.php" class="relative inline-flex items-center px-12 py-3 overflow-hidden text-lg font-medium text-zinc-800 border-2 border-pink-400 rounded-full hover:text-white group hover:bg-gray-50">
                    <span class="absolute left-0 block w-full h-0 transition-all bg-pink-400 opacity-100 group-hover:h-full top-1/2 group-hover:top-0 duration-400 ease"></span>
                    <span class="absolute right-0 flex items-center justify-start w-10 h-10 duration-300 transform translate-x-full group-hover:translate-x-0 ease">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </span>
                    <span class="relative">Administrator</span>
            </a>
        </button>

    </div>
    <!-- HL4    svg      -->
    <div class="fixed top-0 left-0 bg-opacity-70 -z-10">
        <?php
            include '../svg/svg.php';
            echo $svg9;
        ?>
    </div>
</body>
</html>