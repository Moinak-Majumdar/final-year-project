<?php session_start();
?>
<html>
    <head>
        <title>Devolpoment Team</title>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="js/preloader.js"></script>
        <script src="js/show_pass.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="../css/prealoader.css">
        <link rel ="stylesheet" href="../css/hide.css">
        <link rel="stylesheet" href="../css/index.css">
    </head>
    <body>
        <!--        loading            -->
        <div id="preloader"></div>
        <!--        navbar             -->
        <div class="container_navigation"> 
            <div class="navigation">
                <ul>
                    <li class="list">
                        <a href="../index.php">
                            <span class="icon"><ion-icon name="home"></ion-icon></span>
                            <span class="text">Home</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="contact.php">
                            <span class="icon"><ion-icon name="chatbox-ellipses-sharp"></ion-icon></span>
                            <span class="text">Contact</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="about.php">
                            <span class="icon"><ion-icon name="document-text-sharp"></ion-icon></span>
                            <span class="text">About</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="mail.php">
                            <span class="icon"><ion-icon name="mail-unread-sharp"></ion-icon></span>
                            <span class="text">Help</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="help.php">
                            <span class="icon"><ion-icon name="code-slash-sharp"></ion-icon></span>
                            <span class="text">Team</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <section class="body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex items-center lg:w-1/2 mx-auto border-b pb-10 mb-10 border-gray-800 sm:flex-row flex-col">
                    <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full text-teal-400 bg-gray-800 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                        <h2 class="text-teal-400 text-xl title-font font-bold mb-2 tracking-wide">Arkadyuti Das</h2>
                        <p class="leading-relaxed text-lg text-pink-600">1.Module Analyst.<br>2.Project Manager.</p>
                        <span class="mt-2 w-40 h-auto flex justify-between">
                            <a href="https://www.facebook.com/Arkadyuti.Das.2017" target="_moinak"><ion-icon name="logo-facebook" class="facebook text-2xl cursor-pointer"></ion-icon></a>
                            <a href="" target="_moinak"><ion-icon name="logo-instagram" class="instagram text-2xl cursor-pointer"></ion-icon></a>
                            <a href="" target="_moinak"><ion-icon name="logo-twitter" class="twitter text-2xl cursor-pointer"></ion-icon></a>
                            <a href="" target="_moinak"><ion-icon name="logo-whatsapp" class="whatsapp text-2xl cursor-pointer"></ion-icon></a>
                        </span>
                    </div>
                </div>
                <!-- <div class="flex items-center lg:w-1/2 mx-auto border-b pb-10 mb-10 border-gray-800 sm:flex-row flex-col">
                    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                        <h2 class="text-teal-400 text-xl title-font font-bold mb-2 tracking-wide">Debabrata Adhikari</h2>
                        <p class="leading-relaxed text-lg text-gray-300">1.Ui Designer.<br>2.Database Analyst.</p>
                        <span class="mt-2 w-40 h-auto flex justify-between">
                            <a href="https://www.facebook.com/debabrata.adhikari.7906" target="_moinak"><ion-icon name="logo-facebook" class="facebook text-2xl cursor-pointer"></ion-icon></a>
                            <a href="" target="_moinak"><ion-icon name="logo-instagram" class="instagram text-2xl cursor-pointer"></ion-icon></a>
                            <a href="" target="_moinak"><ion-icon name="logo-twitter" class="twitter text-2xl cursor-pointer"></ion-icon></a>
                            <a href="" target="_moinak"><ion-icon name="logo-whatsapp" class="whatsapp text-2xl cursor-pointer"></ion-icon></a>
                        </span>
                    </div>
                    <div class="sm:w-32 order-first sm:order-none sm:h-32 h-20 w-20 sm:ml-10 inline-flex items-center justify-center rounded-full text-blue-500 bg-gray-800 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                </div> -->
                <div class="flex items-center lg:w-1/2 mx-auto sm:flex-row flex-col">
                    <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full text-pink-500 bg-gray-800 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                        <h2 class="text-teal-400 text-xl title-font font-bold mb-2 tracking-wide">Moinak Majumdar</h2>
                        <p class="leading-relaxed text-lg text-sky-400">1.Lead Programmer.<br>2.Technical Analyst.</p>
                        <span class="mt-2 w-40 h-auto flex justify-between">
                            <a href="https://www.facebook.com/moinak.majumdar.9" target="_moinak"><ion-icon name="logo-facebook" class="facebook text-2xl cursor-pointer"></ion-icon></a>
                            <a href="" target="_moinak"><ion-icon name="logo-instagram" class="instagram text-2xl cursor-pointer"></ion-icon></a>
                            <a href="" target="_moinak"><ion-icon name="logo-twitter" class="twitter text-2xl cursor-pointer"></ion-icon></a>
                            <a href="" target="_moinak"><ion-icon name="logo-whatsapp" class="whatsapp text-2xl cursor-pointer"></ion-icon></a>
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <h2 class="w-full fixed bottom-0 text-center text-white">Copyright &copy; Criminal System - All rights reserved</h2>
        </footer>
    </body> 
</html>


<!-- --------------------- -->
<!--------- php ------------->
<!-- --------------------- -->


