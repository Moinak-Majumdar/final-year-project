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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Criminal Record Management System" />
    <meta name="author" content="Moinak Majumdar"/>
    <meta name='keywords' content = 'crime, prisoner, punishment'/>
    <link rel="icon" type="image/png" sizes="32x32" href="../icon/logo32.png"/>
    <title>Main Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel ="stylesheet" href="../css/hide.css">
    <link rel="stylesheet" href="../css/work.css">
</head>
<body class="text-gray-400 bg-gray-800 body-font overflow-x-hidden">
    <section class='w-full h-auto flex flex-col px-4 md:px-0 justify-center pb-8'>
        <!-- Hl5    heading massage         -->
        <div class="w-fit mx-auto grid lg:grid-cols-1 gap-x-32 mt-8">
            <h1 class="text-center font-semibold text-5xl text-transparent bg-clip-text  bg-gradient-to-r from-indigo-600 via-purple-500 to-pink-600">
                Sãlϋté <?php echo $_SESSION['post']."  ". $_SESSION['name']; ?></h1>
            <div class="mx-auto mt-6">
                <a href="logout.php" class="py-2 px-8 h-12 w-auto text-white bg-gradient-to-r from-green-400 to-cyan-600 border-0  focus:outline-none hover:from-rose-500 hover:to-amber-500  rounded-full text-lg shadow-xl shadow-black">
                    Log out</a>
            </div>  
        </div>
        <!-- Hl2    Working section      -->
        <div class="mt-10 max-w-5xl mx-auto grid lg:grid-cols-2 gap-x-32 gap-y-16">
            <!--HL1                           add                                            -->
            <div>
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post" autocomplete="off">
                    <label class="text">Add New Prisoner</label>
                    <input type="text" name='prisoner_id1' placeholder="Prisoner ID"
                        class="bg-gray-800 bg-opacity-40 rounded border border-indigo-500 focus:border-indigo-600 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-400 text-base outline-none text-gray-100 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out" required><br>
                    <button class="button b1" type="submit" name="submit1">Add</button>
                </form>              
                <?php
                        include "../db/db_con.php";
                        if(isset($_POST['submit1']))
                        {
                            $prisoner_id=mysqli_real_escape_string($connection,$_POST["prisoner_id1"]);
                  
                            $idQuery1="select * from prisoner where prisoner_id='$prisoner_id'";
                            $idQuery2="select * from non_existing_prisoner where prisoner_id='$prisoner_id'";
                            $sqlquery1=mysqli_query($connection,$idQuery1);
                            $sqlquery2=mysqli_query($connection,$idQuery2);
                            $id_count1=mysqli_num_rows($sqlquery1);
                            $id_count2=mysqli_num_rows($sqlquery2);

                            if($prisoner_id!=null)
                            {
                                if($id_count2>0)
                                {
                                    ?>
                                    <script>
                                        alert("Prisoner ID already Used. Prisoner present as non-existing");
                                    </script>
                                    <?php
                                }
                               
                                if($id_count1 == 0 && $id_count2 ==0) 
                                {
                                    $lastrow="SELECT penal_code FROM prisoner ORDER BY penal_code DESC LIMIT 1";
                                    $q2=mysqli_query($connection,$lastrow);
                                    $res=mysqli_fetch_assoc($q2);
                                    $val=$res['penal_code'] + 2;
                                    $_SESSION['prisoner_id']=$prisoner_id;
                                    $_SESSION['penal_code']=$val;
                                    //header("location:addCriminal.php");
                                    ?>
                                        <script>
                                            window.location.href="addCriminal.php"
                                        </script>
                                    <?php
                                }
                                if($id_count1>0)
                                {
                                    ?>
                                    <script>
                                        alert("Prisoner already exist.");
                                    </script>
                                    <?php
                                }

                            }
                            else
                            {
                                ?>
                                    <script>
                                        alert("Invalid Prisoner Id.");
                                    </script>
                                <?php  
                            }
                            
                        }
                ?>
            </div>
            <!--Hl3                                     update                               -->
            <div>
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post" autocomplete="off">
                        <label class="text">Update Prisoner Information</label>
                        <input type="text" name="prisoner_id2" placeholder="Prisoner ID" required
                            class="bg-gray-800 bg-opacity-40 rounded border border-emerald-500 focus:border-emerald-600 focus:bg-gray-900 focus:ring-2 focus:ring-emerald-400 text-base outline-none text-gray-100 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out"><br>
                        <button class="button b2" type="submit" name="submit2">Update</button>
                    </form>
                    <?php
                    include "../db/db_con.php";
                    if(isset($_POST['submit2']))
                    {
                        $prisoner_id2=mysqli_real_escape_string($connection,$_POST['prisoner_id2']);
                        $select="SELECT * FROM `prisoner` WHERE prisoner_id='$prisoner_id2'";
                        $query=mysqli_query($connection,$select);
                        
                        $id_count3=mysqli_num_rows($query);
                        
                        if($id_count3==1)
                        {
                            $_SESSION['prisoner_id']=$prisoner_id2;
                            //header("location:updateCriminal.php");
                            ?>
                                <script>
                                    window.location.href='updateCriminal.php';
                                </script>
                            <?php
                            $_SESSION['in_charge']=$_SESSION['name'];
                        }
                        else
                        {
                            ?>
                            <script>
                                alert("Invalid Prisoner Id.");
                            </script>
                            <?php  
                        }
                    }
                    ?>
            </div>
            <!--HL5                          view                                            -->
            <div>
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post" autocomplete="off">
                        <label class="text">View Prisoner Information</label>
                        <input type="text" name="prisoner_id3" placeholder="Prisoner ID" required
                            class="bg-gray-800 bg-opacity-40 rounded border border-amber-300 focus:border-amber-600 focus:bg-gray-900 focus:ring-2 focus:ring-amber-400 text-base outline-none text-gray-100 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out"><br>
                        <button class="button b3" type="submit" name="submit3">View</button>
                    </form>
                    <?php
                    include "../db/db_con.php";
                    if(isset($_POST['submit3']))
                    {
                        $prisoner_id3=mysqli_real_escape_string($connection,$_POST['prisoner_id3']);
                        $select2="SELECT * FROM `prisoner` WHERE prisoner_id='$prisoner_id3'";
                        $query2=mysqli_query($connection,$select2);
                        
                        $id_count4=mysqli_num_rows($query2);

                        if($id_count4==1)
                        {
                            $_SESSION['prisoner_id']=$prisoner_id3;
                            //header("location:viewCriminal.php");
                            ?>
                                <script>
                                    window.location.href='viewCriminal.php?id=<?php echo $prisoner_id3;?>'
                                </script>
                            <?php
                        }
                        else
                        {
                            ?>
                            <script>
                                alert("Invalid Prisoner Id.");
                                </script>
                            <?php  
                        }
                    }
                    ?>
            </div>
            <!--Hl6                                        remove                             -->
            <div>
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post" autocomplete="off">
                        <label class="text">Remove Prisoner Information</label>
                        <input type="text" name="prisoner_id4" placeholder="Prisoner ID" required
                            class="bg-gray-800 bg-opacity-40 rounded border border-red-500 focus:border-red-600 focus:bg-gray-900 focus:ring-2 focus:ring-red-500 text-base outline-none text-gray-100 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out"><br>
                        <button class="button b4" type="submit" name="submit4">Remove</button>
                    </form>
                    <?php
                    include "../db/db_con.php";
                    if(isset($_POST['submit4']))
                    {
                        $prisoner_id4=mysqli_real_escape_string($connection,$_POST['prisoner_id4']);
                        $select3="SELECT * FROM `prisoner` WHERE prisoner_id='$prisoner_id4'";
                        $query3=mysqli_query($connection,$select3);
                        
                        $id_count5=mysqli_num_rows($query3);
                        
                        if($id_count5==1)
                        {
                            $_SESSION['prisoner_id']=$prisoner_id4;
                            // header("location:temp.php");
                            echo "<script>window.location.href='removeCriminal.php'</script>";
                        }
                        else
                        {
                            ?>
                            <script>
                                alert("Invalid Prisoner Id.");
                            </script>
                            <?php  
                        }

                    }
            ?>
            </div>
            <!-- view all existing prisoner  -->
            <div class="d5 flex justify-center">
                <a href="viewAll.php" target="">
                    <span>View All Prisoners In Sort</span>
                </a>
            </div>
            <!--view all non existing prisoner-->
            <div class="d6 flex justify-center">
                <a href="all_non_existing.php" target="">
                    <span>View All Removed Prisoners</span>
                </a>
            </div>
            </div>
        <!-- HL4    SVG      -->
        <div class = "fixed bottom-0 left-0 -z-10 opacity-80">
            <?php 
                include '../svg/svg.php';
                echo $svg3;
            ?>
        </div>
    </section>
</body>
</html>
