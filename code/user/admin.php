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
                    <h1 class="title-font font-bold text-6xl text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-pink-600 animate-pulse md:mx-0">Welcome Administrator</h1>
                </div>
                <div class="lg:w-2/6 md:w-1/2 bg-gray-800 rounded-xl p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 shadow-2xl shadow-black">
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
                </div>
            </div>
        </form>
        <!-- HL4    svg      -->
        <div class="fixed bottom-0 left-0 -z-10">
            <svg id="visual" viewBox="0 0 1920 1080" width="1920" height="1080" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><path d="M0 734L45.7 739.7C91.3 745.3 182.7 756.7 274.2 763.7C365.7 770.7 457.3 773.3 548.8 762.2C640.3 751 731.7 726 823 732.8C914.3 739.7 1005.7 778.3 1097 789.7C1188.3 801 1279.7 785 1371.2 787.7C1462.7 790.3 1554.3 811.7 1645.8 821.3C1737.3 831 1828.7 829 1874.3 828L1920 827L1920 1081L1874.3 1081C1828.7 1081 1737.3 1081 1645.8 1081C1554.3 1081 1462.7 1081 1371.2 1081C1279.7 1081 1188.3 1081 1097 1081C1005.7 1081 914.3 1081 823 1081C731.7 1081 640.3 1081 548.8 1081C457.3 1081 365.7 1081 274.2 1081C182.7 1081 91.3 1081 45.7 1081L0 1081Z" fill="#686de0"></path><path d="M0 719L45.7 722.2C91.3 725.3 182.7 731.7 274.2 752.5C365.7 773.3 457.3 808.7 548.8 818.8C640.3 829 731.7 814 823 814.2C914.3 814.3 1005.7 829.7 1097 827.5C1188.3 825.3 1279.7 805.7 1371.2 784.8C1462.7 764 1554.3 742 1645.8 737.7C1737.3 733.3 1828.7 746.7 1874.3 753.3L1920 760L1920 1081L1874.3 1081C1828.7 1081 1737.3 1081 1645.8 1081C1554.3 1081 1462.7 1081 1371.2 1081C1279.7 1081 1188.3 1081 1097 1081C1005.7 1081 914.3 1081 823 1081C731.7 1081 640.3 1081 548.8 1081C457.3 1081 365.7 1081 274.2 1081C182.7 1081 91.3 1081 45.7 1081L0 1081Z" fill="#6467df"></path><path d="M0 787L45.7 801.3C91.3 815.7 182.7 844.3 274.2 857.7C365.7 871 457.3 869 548.8 868.3C640.3 867.7 731.7 868.3 823 864.3C914.3 860.3 1005.7 851.7 1097 844.7C1188.3 837.7 1279.7 832.3 1371.2 825.8C1462.7 819.3 1554.3 811.7 1645.8 813.7C1737.3 815.7 1828.7 827.3 1874.3 833.2L1920 839L1920 1081L1874.3 1081C1828.7 1081 1737.3 1081 1645.8 1081C1554.3 1081 1462.7 1081 1371.2 1081C1279.7 1081 1188.3 1081 1097 1081C1005.7 1081 914.3 1081 823 1081C731.7 1081 640.3 1081 548.8 1081C457.3 1081 365.7 1081 274.2 1081C182.7 1081 91.3 1081 45.7 1081L0 1081Z" fill="#6061de"></path><path d="M0 890L45.7 888.8C91.3 887.7 182.7 885.3 274.2 880.2C365.7 875 457.3 867 548.8 865.8C640.3 864.7 731.7 870.3 823 870.2C914.3 870 1005.7 864 1097 858C1188.3 852 1279.7 846 1371.2 836.2C1462.7 826.3 1554.3 812.7 1645.8 813.8C1737.3 815 1828.7 831 1874.3 839L1920 847L1920 1081L1874.3 1081C1828.7 1081 1737.3 1081 1645.8 1081C1554.3 1081 1462.7 1081 1371.2 1081C1279.7 1081 1188.3 1081 1097 1081C1005.7 1081 914.3 1081 823 1081C731.7 1081 640.3 1081 548.8 1081C457.3 1081 365.7 1081 274.2 1081C182.7 1081 91.3 1081 45.7 1081L0 1081Z" fill="#5c5bdd"></path><path d="M0 863L45.7 874C91.3 885 182.7 907 274.2 907.3C365.7 907.7 457.3 886.3 548.8 882.7C640.3 879 731.7 893 823 898.3C914.3 903.7 1005.7 900.3 1097 902.5C1188.3 904.7 1279.7 912.3 1371.2 913.2C1462.7 914 1554.3 908 1645.8 893C1737.3 878 1828.7 854 1874.3 842L1920 830L1920 1081L1874.3 1081C1828.7 1081 1737.3 1081 1645.8 1081C1554.3 1081 1462.7 1081 1371.2 1081C1279.7 1081 1188.3 1081 1097 1081C1005.7 1081 914.3 1081 823 1081C731.7 1081 640.3 1081 548.8 1081C457.3 1081 365.7 1081 274.2 1081C182.7 1081 91.3 1081 45.7 1081L0 1081Z" fill="#5855dc"></path><path d="M0 898L45.7 899.8C91.3 901.7 182.7 905.3 274.2 911.5C365.7 917.7 457.3 926.3 548.8 920C640.3 913.7 731.7 892.3 823 896.2C914.3 900 1005.7 929 1097 942.7C1188.3 956.3 1279.7 954.7 1371.2 941C1462.7 927.3 1554.3 901.7 1645.8 893C1737.3 884.3 1828.7 892.7 1874.3 896.8L1920 901L1920 1081L1874.3 1081C1828.7 1081 1737.3 1081 1645.8 1081C1554.3 1081 1462.7 1081 1371.2 1081C1279.7 1081 1188.3 1081 1097 1081C1005.7 1081 914.3 1081 823 1081C731.7 1081 640.3 1081 548.8 1081C457.3 1081 365.7 1081 274.2 1081C182.7 1081 91.3 1081 45.7 1081L0 1081Z" fill="#544fda"></path><path d="M0 937L45.7 935.2C91.3 933.3 182.7 929.7 274.2 930.7C365.7 931.7 457.3 937.3 548.8 934C640.3 930.7 731.7 918.3 823 921.2C914.3 924 1005.7 942 1097 954C1188.3 966 1279.7 972 1371.2 972.7C1462.7 973.3 1554.3 968.7 1645.8 965.7C1737.3 962.7 1828.7 961.3 1874.3 960.7L1920 960L1920 1081L1874.3 1081C1828.7 1081 1737.3 1081 1645.8 1081C1554.3 1081 1462.7 1081 1371.2 1081C1279.7 1081 1188.3 1081 1097 1081C1005.7 1081 914.3 1081 823 1081C731.7 1081 640.3 1081 548.8 1081C457.3 1081 365.7 1081 274.2 1081C182.7 1081 91.3 1081 45.7 1081L0 1081Z" fill="#5149d9"></path><path d="M0 998L45.7 1000.7C91.3 1003.3 182.7 1008.7 274.2 1000.2C365.7 991.7 457.3 969.3 548.8 968.3C640.3 967.3 731.7 987.7 823 991.7C914.3 995.7 1005.7 983.3 1097 973.3C1188.3 963.3 1279.7 955.7 1371.2 961.2C1462.7 966.7 1554.3 985.3 1645.8 986C1737.3 986.7 1828.7 969.3 1874.3 960.7L1920 952L1920 1081L1874.3 1081C1828.7 1081 1737.3 1081 1645.8 1081C1554.3 1081 1462.7 1081 1371.2 1081C1279.7 1081 1188.3 1081 1097 1081C1005.7 1081 914.3 1081 823 1081C731.7 1081 640.3 1081 548.8 1081C457.3 1081 365.7 1081 274.2 1081C182.7 1081 91.3 1081 45.7 1081L0 1081Z" fill="#4e42d7"></path><path d="M0 1003L45.7 1009.2C91.3 1015.3 182.7 1027.7 274.2 1031.8C365.7 1036 457.3 1032 548.8 1022.2C640.3 1012.3 731.7 996.7 823 995.7C914.3 994.7 1005.7 1008.3 1097 1014C1188.3 1019.7 1279.7 1017.3 1371.2 1017.7C1462.7 1018 1554.3 1021 1645.8 1015.3C1737.3 1009.7 1828.7 995.3 1874.3 988.2L1920 981L1920 1081L1874.3 1081C1828.7 1081 1737.3 1081 1645.8 1081C1554.3 1081 1462.7 1081 1371.2 1081C1279.7 1081 1188.3 1081 1097 1081C1005.7 1081 914.3 1081 823 1081C731.7 1081 640.3 1081 548.8 1081C457.3 1081 365.7 1081 274.2 1081C182.7 1081 91.3 1081 45.7 1081L0 1081Z" fill="#4b3bd6"></path><path d="M0 1045L45.7 1042.3C91.3 1039.7 182.7 1034.3 274.2 1032.3C365.7 1030.3 457.3 1031.7 548.8 1034.8C640.3 1038 731.7 1043 823 1044C914.3 1045 1005.7 1042 1097 1044.3C1188.3 1046.7 1279.7 1054.3 1371.2 1051.8C1462.7 1049.3 1554.3 1036.7 1645.8 1029.3C1737.3 1022 1828.7 1020 1874.3 1019L1920 1018L1920 1081L1874.3 1081C1828.7 1081 1737.3 1081 1645.8 1081C1554.3 1081 1462.7 1081 1371.2 1081C1279.7 1081 1188.3 1081 1097 1081C1005.7 1081 914.3 1081 823 1081C731.7 1081 640.3 1081 548.8 1081C457.3 1081 365.7 1081 274.2 1081C182.7 1081 91.3 1081 45.7 1081L0 1081Z" fill="#4834d4"></path></svg>
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
        include "db_con.php";
            
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