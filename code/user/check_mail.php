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
    <h1 class="relative top-8 font-semibold text-5xl text-indigo-700">Check All Mail</h1>
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
                include "db_con.php";
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
        <svg id="visual" viewBox="0 0 1920 1080" width="1920" height="1080" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="1920" height="1080" fill="#a5b1c2"></rect><defs><linearGradient id="grad1_0" x1="43.8%" y1="100%" x2="100%" y2="0%"><stop offset="14.444444444444446%" stop-color="#2d98da" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#2d98da" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad1_1" x1="43.8%" y1="100%" x2="100%" y2="0%"><stop offset="14.444444444444446%" stop-color="#2d98da" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#4d9bd7" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad1_2" x1="43.8%" y1="100%" x2="100%" y2="0%"><stop offset="14.444444444444446%" stop-color="#629fd4" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#4d9bd7" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad1_3" x1="43.8%" y1="100%" x2="100%" y2="0%"><stop offset="14.444444444444446%" stop-color="#629fd4" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#73a2d0" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad1_4" x1="43.8%" y1="100%" x2="100%" y2="0%"><stop offset="14.444444444444446%" stop-color="#82a6cd" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#73a2d0" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad1_5" x1="43.8%" y1="100%" x2="100%" y2="0%"><stop offset="14.444444444444446%" stop-color="#82a6cd" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#8ea9c9" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad1_6" x1="43.8%" y1="100%" x2="100%" y2="0%"><stop offset="14.444444444444446%" stop-color="#9aadc6" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#8ea9c9" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad1_7" x1="43.8%" y1="100%" x2="100%" y2="0%"><stop offset="14.444444444444446%" stop-color="#9aadc6" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#a5b1c2" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad2_0" x1="0%" y1="100%" x2="56.3%" y2="0%"><stop offset="14.444444444444446%" stop-color="#2d98da" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#2d98da" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad2_1" x1="0%" y1="100%" x2="56.3%" y2="0%"><stop offset="14.444444444444446%" stop-color="#4d9bd7" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#2d98da" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad2_2" x1="0%" y1="100%" x2="56.3%" y2="0%"><stop offset="14.444444444444446%" stop-color="#4d9bd7" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#629fd4" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad2_3" x1="0%" y1="100%" x2="56.3%" y2="0%"><stop offset="14.444444444444446%" stop-color="#73a2d0" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#629fd4" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad2_4" x1="0%" y1="100%" x2="56.3%" y2="0%"><stop offset="14.444444444444446%" stop-color="#73a2d0" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#82a6cd" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad2_5" x1="0%" y1="100%" x2="56.3%" y2="0%"><stop offset="14.444444444444446%" stop-color="#8ea9c9" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#82a6cd" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad2_6" x1="0%" y1="100%" x2="56.3%" y2="0%"><stop offset="14.444444444444446%" stop-color="#8ea9c9" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#9aadc6" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad2_7" x1="0%" y1="100%" x2="56.3%" y2="0%"><stop offset="14.444444444444446%" stop-color="#a5b1c2" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#9aadc6" stop-opacity="1"></stop></linearGradient></defs><g transform="translate(1920, 1080)"><path d="M-1080 0C-1106 -183.5 -1132 -366.9 -997.8 -413.3C-863.6 -459.7 -569.2 -369 -466.7 -466.7C-364.1 -564.3 -453.4 -850.3 -407.6 -983.9C-361.7 -1117.5 -180.9 -1098.8 0 -1080L0 0Z" fill="#a0afc4"></path><path d="M-945 0C-967.7 -160.5 -990.5 -321 -873.1 -361.6C-755.7 -402.2 -498.1 -322.9 -408.4 -408.4C-318.6 -493.8 -396.7 -744 -356.6 -860.9C-316.5 -977.8 -158.3 -961.4 0 -945L0 0Z" fill="#94abc7"></path><path d="M-810 0C-829.5 -137.6 -849 -275.2 -748.3 -310C-647.7 -344.8 -426.9 -276.8 -350 -350C-273.1 -423.3 -340 -637.7 -305.7 -737.9C-271.3 -838.2 -135.7 -824.1 0 -810L0 0Z" fill="#88a7cb"></path><path d="M-675 0C-691.2 -114.7 -707.5 -229.3 -623.6 -258.3C-539.8 -287.3 -355.8 -230.6 -291.7 -291.7C-227.6 -352.7 -283.4 -531.5 -254.7 -615C-226.1 -698.5 -113 -686.7 0 -675L0 0Z" fill="#7aa4ce"></path><path d="M-540 0C-553 -91.7 -566 -183.5 -498.9 -206.6C-431.8 -229.8 -284.6 -184.5 -233.3 -233.3C-182.1 -282.2 -226.7 -425.2 -203.8 -492C-180.9 -558.8 -90.4 -549.4 0 -540L0 0Z" fill="#6ba0d2"></path><path d="M-405 0C-414.7 -68.8 -424.5 -137.6 -374.2 -155C-323.9 -172.4 -213.5 -138.4 -175 -175C-136.5 -211.6 -170 -318.9 -152.8 -369C-135.7 -419.1 -67.8 -412 0 -405L0 0Z" fill="#589dd5"></path><path d="M-270 0C-276.5 -45.9 -283 -91.7 -249.4 -103.3C-215.9 -114.9 -142.3 -92.3 -116.7 -116.7C-91 -141.1 -113.3 -212.6 -101.9 -246C-90.4 -279.4 -45.2 -274.7 0 -270L0 0Z" fill="#3f9ad8"></path><path d="M-135 0C-138.2 -22.9 -141.5 -45.9 -124.7 -51.7C-108 -57.5 -71.2 -46.1 -58.3 -58.3C-45.5 -70.5 -56.7 -106.3 -50.9 -123C-45.2 -139.7 -22.6 -137.3 0 -135L0 0Z" fill="#2d98da"></path></g><g transform="translate(0, 0)"><path d="M1080 0C1096.6 168.2 1113.2 336.4 997.8 413.3C882.4 490.2 635 475.8 503.5 503.5C371.9 531.1 356.2 600.9 291.6 704C227 807.1 113.5 943.6 0 1080L0 0Z" fill="#a0afc4"></path><path d="M945 0C959.5 147.2 974 294.4 873.1 361.6C772.1 428.9 555.6 416.3 440.5 440.5C325.4 464.7 311.7 525.8 255.2 616C198.6 706.2 99.3 825.6 0 945L0 0Z" fill="#94abc7"></path><path d="M810 0C822.4 126.2 834.9 252.3 748.3 310C661.8 367.6 476.3 356.8 377.6 377.6C278.9 398.4 267.2 450.7 218.7 528C170.3 605.3 85.1 707.7 0 810L0 0Z" fill="#88a7cb"></path><path d="M675 0C685.4 105.1 695.7 210.3 623.6 258.3C551.5 306.4 396.9 297.4 314.7 314.7C232.4 332 222.6 375.6 182.3 440C141.9 504.4 70.9 589.7 0 675L0 0Z" fill="#7aa4ce"></path><path d="M540 0C548.3 84.1 556.6 168.2 498.9 206.6C441.2 245.1 317.5 237.9 251.7 251.7C186 265.6 178.1 300.4 145.8 352C113.5 403.6 56.8 471.8 0 540L0 0Z" fill="#6ba0d2"></path><path d="M405 0C411.2 63.1 417.4 126.2 374.2 155C330.9 183.8 238.1 178.4 188.8 188.8C139.5 199.2 133.6 225.3 109.4 264C85.1 302.7 42.6 353.8 0 405L0 0Z" fill="#589dd5"></path><path d="M270 0C274.1 42.1 278.3 84.1 249.4 103.3C220.6 122.5 158.8 118.9 125.9 125.9C93 132.8 89.1 150.2 72.9 176C56.8 201.8 28.4 235.9 0 270L0 0Z" fill="#3f9ad8"></path><path d="M135 0C137.1 21 139.1 42.1 124.7 51.7C110.3 61.3 79.4 59.5 62.9 62.9C46.5 66.4 44.5 75.1 36.5 88C28.4 100.9 14.2 117.9 0 135L0 0Z" fill="#2d98da"></path></g></svg>
    </div>
</body>
</html>