<?php
    session_start();
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
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Criminal Record Management System"/>
    <meta name="author" content="Moinak Majumdar"/>
    <meta name='keywords' content = 'crime, prisoner, punishment'/>
    <link rel="icon" type="image/png" sizes="32x32" href="../icon/logo32.png"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/hide.css">
    <title>Administrator</title>
</head>
<body class="text-gray-700 body-font bg-slate-400">
    <section class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-3xl text-4xl font-medium title-font mb-4 text-pink-600">Administrator Portal</h1>
                <h1 class="sm:text-xl font-medium title-font mb-4 text-gray-700">Welcome Administrator</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Here you can add an user for the database, remove an user from the database and view suggestions and queries that were sent by the users.</p>
            </div>
            <div class="w-full flex flex-wrap justify-center">
                <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 mx-4 mb-4 rounded-xl bg-gradient-to-b from-slate-800 via-gray-900 to-neutral-900 shadow-2xl shadow-black">
                    <h2 class="text-lg sm:text-xl text-green-500 font-medium title-font mb-2">Add User</h2>
                    <p class="leading-relaxed text-base mb-4 text-gray-300">Add a new user in the database by verifying all the relevant documents.</p>
                    <a href="addUser.php" class="text-green-500 cursor-pointer text-xl hover:underline inline-flex items-center">Go
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 mx-4 mb-4 rounded-xl bg-gradient-to-b from-slate-800 via-gray-900 to-neutral-900 shadow-2xl shadow-black">
                    <h2 class="text-lg sm:text-xl text-red-500 font-medium title-font mb-2">Remove User</h2>
                    <p class="leading-relaxed text-base mb-4 text-gray-300">Remove a user from database and specify the grounds for his/her removal.</p>
                    <a href="removeUser.php" class="text-red-500 cursor-pointer text-xl hover:underline inline-flex items-center">Go
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                    </a>
                </div>
                <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 mx-4 mb-4 rounded-xl bg-gradient-to-b from-slate-800 via-gray-900 to-neutral-900 shadow-2xl shadow-black">
                    <h2 class="text-lg sm:text-xl text-teal-400 font-medium title-font mb-2">Check Mail</h2>
                    <p class="leading-relaxed text-base mb-4 text-gray-300">See suggestions and queries from respective users.</p>
                    <a href="check_mail.php" class="text-teal-400 cursor-pointer text-xl hover:underline inline-flex items-center">Go
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <button class="flex mx-auto mt-24 h-auto w-auto">
                <a href="admin_logOut.php" class="relative px-6 py-3 font-bold text-zinc-900 rounded-lg group">
                    <span class="absolute inset-0 w-full h-full transition duration-300 transform -translate-x-1 -translate-y-1 bg-teal-400 ease group-hover:translate-x-0 group-hover:translate-y-0"></span>
                    <span class="absolute inset-0 w-full h-full transition duration-300 transform translate-x-1 translate-y-1 bg-pink-600 ease group-hover:translate-x-0 group-hover:translate-y-0 mix-blend-screen"></span>
                    <span class="relative">Log Out</span>
                </a>
            </button>
             <!-- HL4    svg      -->
            <div class="fixed bottom-0 left-0 bg-opacity-70 -z-10">
                <?php
                    include '../svg/svg.php';
                    echo $svg7;
                ?>
            </div>
    </section>
</body>
</html>