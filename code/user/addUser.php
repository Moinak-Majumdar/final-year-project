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
    <section class="w-auto h-auto flex justify-center items-center flex-col">
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post" autocomplete="off">
                <div class="w-full text-center my-4">
                    <h1 class="text-3xl text-indigo-600 font-bold">Add User</h1>
                </div>
                <div class="grid xl:grid-cols-2 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 grid-cols-1 gap-4 p-8 mx-6">
                    <div>
                        <label class="text-xl text-sky-600 block mb-1 font-large">User Name</label>
                        <input type="text" name="name"
                            class="w-full bg-gray-400 rounded-lg border border-indigo-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-400 focus:bg-transparent bg-opacity-10 text-base outline-none text-gray-800 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            placeholder="Enter User name *" required/>
                    </div>

                    <div>
                        <label class="text-xl text-sky-600 block mb-1 font-large">Email</label>
                        <input type="text" name="email"
                            class="w-full bg-gray-400 rounded-lg border border-indigo-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-400 focus:bg-transparent bg-opacity-10 text-base outline-none text-gray-800 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            placeholder="Enter User email *" required/>
                    </div>

                    <div>
                        <label class="text-xl text-sky-600 block mb-1 font-large">Phone Number</label>
                        <input type="text" name="ph_no"
                            class="w-full bg-gray-400 rounded-lg border border-indigo-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-400 focus:bg-transparent bg-opacity-10 text-base outline-none text-gray-800 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            placeholder="Enter User Phone Number *" required/>
                    </div>

                    <div>
                        <label class="text-xl text-sky-600 block mb-1 font-large">User ID</label>
                        <input type="text" name="user_ID"
                            class="w-full bg-gray-400 rounded-lg border border-indigo-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-400 focus:bg-transparent bg-opacity-10 text-base outline-none text-gray-800 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            placeholder="Enter User ID *" required/>
                    </div>

                    <div>
                        <label class="text-xl text-sky-600 block mb-1 font-large">Designation</label>
                        <input type="text" name="post"
                            class="w-full bg-gray-400 rounded-lg border border-indigo-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-400 focus:bg-transparent bg-opacity-10 text-base outline-none text-gray-800 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            placeholder="Enter User's Designation *" required/>
                    </div>

                    <div></div>

                    <div>
                        <label class="text-xl text-sky-600 block mb-1 font-large">Password</label>
                        <input type="password" name="password" id="password"
                            class="w-full focus:bg-transparent rounded-lg border border-indigo-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500 bg-gray-400 bg-opacity-10 text-base outline-none text-gray-800 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            placeholder="Enter User Password *" required/>
                        <div class="inline-flex">
                            <input type="checkbox" onclick="showPassword2()" id="ckbox"
                                class="mx-4 ml-8 mt-4 cursor-pointer">
                            <h2 onclick="showPassword3()"
                                class="mx-1 mt-4 text-xl text-pink-600 cursor-pointer hover:text-pink-700">Show Password</h2>
                        </div>    
                    </div>

                    <div>
                        <label class="text-xl text-sky-600 block mb-1 font-large">Confirm Password</label>
                        <input type="password" name="confirm_Password" id="confirm_password"
                            class="w-full focus:bg-transparent rounded-lg border border-indigo-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500 bg-gray-400 bg-opacity-10 text-base outline-none text-gray-800 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
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
            <svg id="visual" viewBox="0 0 1920 1080" width="1920" height="1080" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><path d="M0 832L35.5 834C71 836 142 840 213.2 845C284.3 850 355.7 856 426.8 851C498 846 569 830 640 822.5C711 815 782 816 853.2 817.3C924.3 818.7 995.7 820.3 1066.8 828C1138 835.7 1209 849.3 1280 848.7C1351 848 1422 833 1493.2 829.8C1564.3 826.7 1635.7 835.3 1706.8 844.5C1778 853.7 1849 863.3 1884.5 868.2L1920 873L1920 1081L1884.5 1081C1849 1081 1778 1081 1706.8 1081C1635.7 1081 1564.3 1081 1493.2 1081C1422 1081 1351 1081 1280 1081C1209 1081 1138 1081 1066.8 1081C995.7 1081 924.3 1081 853.2 1081C782 1081 711 1081 640 1081C569 1081 498 1081 426.8 1081C355.7 1081 284.3 1081 213.2 1081C142 1081 71 1081 35.5 1081L0 1081Z" fill="#fd7272"></path><path d="M0 867L35.5 871.5C71 876 142 885 213.2 887.7C284.3 890.3 355.7 886.7 426.8 885.3C498 884 569 885 640 887.5C711 890 782 894 853.2 886.7C924.3 879.3 995.7 860.7 1066.8 855.7C1138 850.7 1209 859.3 1280 866.8C1351 874.3 1422 880.7 1493.2 880C1564.3 879.3 1635.7 871.7 1706.8 868C1778 864.3 1849 864.7 1884.5 864.8L1920 865L1920 1081L1884.5 1081C1849 1081 1778 1081 1706.8 1081C1635.7 1081 1564.3 1081 1493.2 1081C1422 1081 1351 1081 1280 1081C1209 1081 1138 1081 1066.8 1081C995.7 1081 924.3 1081 853.2 1081C782 1081 711 1081 640 1081C569 1081 498 1081 426.8 1081C355.7 1081 284.3 1081 213.2 1081C142 1081 71 1081 35.5 1081L0 1081Z" fill="#f76b6d"></path><path d="M0 862L35.5 869.7C71 877.3 142 892.7 213.2 900.3C284.3 908 355.7 908 426.8 905.3C498 902.7 569 897.3 640 893.5C711 889.7 782 887.3 853.2 882.8C924.3 878.3 995.7 871.7 1066.8 871.3C1138 871 1209 877 1280 876.5C1351 876 1422 869 1493.2 872C1564.3 875 1635.7 888 1706.8 889.8C1778 891.7 1849 882.3 1884.5 877.7L1920 873L1920 1081L1884.5 1081C1849 1081 1778 1081 1706.8 1081C1635.7 1081 1564.3 1081 1493.2 1081C1422 1081 1351 1081 1280 1081C1209 1081 1138 1081 1066.8 1081C995.7 1081 924.3 1081 853.2 1081C782 1081 711 1081 640 1081C569 1081 498 1081 426.8 1081C355.7 1081 284.3 1081 213.2 1081C142 1081 71 1081 35.5 1081L0 1081Z" fill="#f06368"></path><path d="M0 897L35.5 893.5C71 890 142 883 213.2 881C284.3 879 355.7 882 426.8 887.2C498 892.3 569 899.7 640 904.5C711 909.3 782 911.7 853.2 915C924.3 918.3 995.7 922.7 1066.8 916.8C1138 911 1209 895 1280 890.5C1351 886 1422 893 1493.2 898.2C1564.3 903.3 1635.7 906.7 1706.8 905.5C1778 904.3 1849 898.7 1884.5 895.8L1920 893L1920 1081L1884.5 1081C1849 1081 1778 1081 1706.8 1081C1635.7 1081 1564.3 1081 1493.2 1081C1422 1081 1351 1081 1280 1081C1209 1081 1138 1081 1066.8 1081C995.7 1081 924.3 1081 853.2 1081C782 1081 711 1081 640 1081C569 1081 498 1081 426.8 1081C355.7 1081 284.3 1081 213.2 1081C142 1081 71 1081 35.5 1081L0 1081Z" fill="#ea5c64"></path><path d="M0 921L35.5 917.3C71 913.7 142 906.3 213.2 907.7C284.3 909 355.7 919 426.8 923C498 927 569 925 640 925.8C711 926.7 782 930.3 853.2 928.7C924.3 927 995.7 920 1066.8 916.8C1138 913.7 1209 914.3 1280 918.3C1351 922.3 1422 929.7 1493.2 932.2C1564.3 934.7 1635.7 932.3 1706.8 933.5C1778 934.7 1849 939.3 1884.5 941.7L1920 944L1920 1081L1884.5 1081C1849 1081 1778 1081 1706.8 1081C1635.7 1081 1564.3 1081 1493.2 1081C1422 1081 1351 1081 1280 1081C1209 1081 1138 1081 1066.8 1081C995.7 1081 924.3 1081 853.2 1081C782 1081 711 1081 640 1081C569 1081 498 1081 426.8 1081C355.7 1081 284.3 1081 213.2 1081C142 1081 71 1081 35.5 1081L0 1081Z" fill="#e4555f"></path><path d="M0 939L35.5 939.3C71 939.7 142 940.3 213.2 941.3C284.3 942.3 355.7 943.7 426.8 943.2C498 942.7 569 940.3 640 941.5C711 942.7 782 947.3 853.2 945.2C924.3 943 995.7 934 1066.8 929.5C1138 925 1209 925 1280 924C1351 923 1422 921 1493.2 922.8C1564.3 924.7 1635.7 930.3 1706.8 930.7C1778 931 1849 926 1884.5 923.5L1920 921L1920 1081L1884.5 1081C1849 1081 1778 1081 1706.8 1081C1635.7 1081 1564.3 1081 1493.2 1081C1422 1081 1351 1081 1280 1081C1209 1081 1138 1081 1066.8 1081C995.7 1081 924.3 1081 853.2 1081C782 1081 711 1081 640 1081C569 1081 498 1081 426.8 1081C355.7 1081 284.3 1081 213.2 1081C142 1081 71 1081 35.5 1081L0 1081Z" fill="#dd4d5a"></path><path d="M0 967L35.5 969.7C71 972.3 142 977.7 213.2 979.3C284.3 981 355.7 979 426.8 978.2C498 977.3 569 977.7 640 974.7C711 971.7 782 965.3 853.2 961.7C924.3 958 995.7 957 1066.8 955.7C1138 954.3 1209 952.7 1280 954C1351 955.3 1422 959.7 1493.2 958.3C1564.3 957 1635.7 950 1706.8 953.2C1778 956.3 1849 969.7 1884.5 976.3L1920 983L1920 1081L1884.5 1081C1849 1081 1778 1081 1706.8 1081C1635.7 1081 1564.3 1081 1493.2 1081C1422 1081 1351 1081 1280 1081C1209 1081 1138 1081 1066.8 1081C995.7 1081 924.3 1081 853.2 1081C782 1081 711 1081 640 1081C569 1081 498 1081 426.8 1081C355.7 1081 284.3 1081 213.2 1081C142 1081 71 1081 35.5 1081L0 1081Z" fill="#d74556"></path><path d="M0 967L35.5 970.7C71 974.3 142 981.7 213.2 982.7C284.3 983.7 355.7 978.3 426.8 979.2C498 980 569 987 640 985.3C711 983.7 782 973.3 853.2 968C924.3 962.7 995.7 962.3 1066.8 968C1138 973.7 1209 985.3 1280 990C1351 994.7 1422 992.3 1493.2 990.3C1564.3 988.3 1635.7 986.7 1706.8 987.3C1778 988 1849 991 1884.5 992.5L1920 994L1920 1081L1884.5 1081C1849 1081 1778 1081 1706.8 1081C1635.7 1081 1564.3 1081 1493.2 1081C1422 1081 1351 1081 1280 1081C1209 1081 1138 1081 1066.8 1081C995.7 1081 924.3 1081 853.2 1081C782 1081 711 1081 640 1081C569 1081 498 1081 426.8 1081C355.7 1081 284.3 1081 213.2 1081C142 1081 71 1081 35.5 1081L0 1081Z" fill="#d03d51"></path><path d="M0 1011L35.5 1007.2C71 1003.3 142 995.7 213.2 991.5C284.3 987.3 355.7 986.7 426.8 986C498 985.3 569 984.7 640 984.5C711 984.3 782 984.7 853.2 986.7C924.3 988.7 995.7 992.3 1066.8 994.7C1138 997 1209 998 1280 998.2C1351 998.3 1422 997.7 1493.2 995.8C1564.3 994 1635.7 991 1706.8 992.8C1778 994.7 1849 1001.3 1884.5 1004.7L1920 1008L1920 1081L1884.5 1081C1849 1081 1778 1081 1706.8 1081C1635.7 1081 1564.3 1081 1493.2 1081C1422 1081 1351 1081 1280 1081C1209 1081 1138 1081 1066.8 1081C995.7 1081 924.3 1081 853.2 1081C782 1081 711 1081 640 1081C569 1081 498 1081 426.8 1081C355.7 1081 284.3 1081 213.2 1081C142 1081 71 1081 35.5 1081L0 1081Z" fill="#ca354d"></path><path d="M0 1020L35.5 1019.8C71 1019.7 142 1019.3 213.2 1021C284.3 1022.7 355.7 1026.3 426.8 1027.5C498 1028.7 569 1027.3 640 1025.7C711 1024 782 1022 853.2 1021.2C924.3 1020.3 995.7 1020.7 1066.8 1020.5C1138 1020.3 1209 1019.7 1280 1016.7C1351 1013.7 1422 1008.3 1493.2 1007.2C1564.3 1006 1635.7 1009 1706.8 1012.5C1778 1016 1849 1020 1884.5 1022L1920 1024L1920 1081L1884.5 1081C1849 1081 1778 1081 1706.8 1081C1635.7 1081 1564.3 1081 1493.2 1081C1422 1081 1351 1081 1280 1081C1209 1081 1138 1081 1066.8 1081C995.7 1081 924.3 1081 853.2 1081C782 1081 711 1081 640 1081C569 1081 498 1081 426.8 1081C355.7 1081 284.3 1081 213.2 1081C142 1081 71 1081 35.5 1081L0 1081Z" fill="#c42c48"></path><path d="M0 1024L35.5 1026.5C71 1029 142 1034 213.2 1036.8C284.3 1039.7 355.7 1040.3 426.8 1038.7C498 1037 569 1033 640 1031.3C711 1029.7 782 1030.3 853.2 1032.7C924.3 1035 995.7 1039 1066.8 1038.3C1138 1037.7 1209 1032.3 1280 1032.2C1351 1032 1422 1037 1493.2 1038.3C1564.3 1039.7 1635.7 1037.3 1706.8 1035.8C1778 1034.3 1849 1033.7 1884.5 1033.3L1920 1033L1920 1081L1884.5 1081C1849 1081 1778 1081 1706.8 1081C1635.7 1081 1564.3 1081 1493.2 1081C1422 1081 1351 1081 1280 1081C1209 1081 1138 1081 1066.8 1081C995.7 1081 924.3 1081 853.2 1081C782 1081 711 1081 640 1081C569 1081 498 1081 426.8 1081C355.7 1081 284.3 1081 213.2 1081C142 1081 71 1081 35.5 1081L0 1081Z" fill="#bd2244"></path><path d="M0 1058L35.5 1059C71 1060 142 1062 213.2 1060.2C284.3 1058.3 355.7 1052.7 426.8 1049.5C498 1046.3 569 1045.7 640 1046.2C711 1046.7 782 1048.3 853.2 1050.5C924.3 1052.7 995.7 1055.3 1066.8 1055.8C1138 1056.3 1209 1054.7 1280 1052.5C1351 1050.3 1422 1047.7 1493.2 1048.3C1564.3 1049 1635.7 1053 1706.8 1054.5C1778 1056 1849 1055 1884.5 1054.5L1920 1054L1920 1081L1884.5 1081C1849 1081 1778 1081 1706.8 1081C1635.7 1081 1564.3 1081 1493.2 1081C1422 1081 1351 1081 1280 1081C1209 1081 1138 1081 1066.8 1081C995.7 1081 924.3 1081 853.2 1081C782 1081 711 1081 640 1081C569 1081 498 1081 426.8 1081C355.7 1081 284.3 1081 213.2 1081C142 1081 71 1081 35.5 1081L0 1081Z" fill="#b71540"></path></svg>
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
    include "db_con.php";
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
                            alert("Password atlest 5 to 10 character long.");
                        </script>
                        <?php   
                        
                    }
                    elseif(!preg_match($regx4,$password))
                    {   
                        ?>
                        <script>
                            alert("password should contain atleast one number and one special character.");
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
                                alert("OOPS! something went wrong");</script>
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
 