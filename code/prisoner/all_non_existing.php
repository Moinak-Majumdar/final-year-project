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
    <title>Non existing Prisoner</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/hide.css">
</head>
<body class="bg-slate-300 overflow-x-hidden">
    <section class='w-full max-h-fit flex flex-col pb-8 md:px-24 px-6'>
        <h1 class="my-6 font-semibold text-5xl text-indigo-700 text-center">All Non Existing Prisoners</h1>
        <div class="mt-4 mx-auto">
            <table>
                <thead class="text-rose-600">
                    <tr>
                        <th class="p-4 border-red-500 border-2">Prisoner ID</th>
                        <th class="p-4 border-red-500 border-2">Name</th>
                        <th class="p-4 border-red-500 border-2">Sex</th>
                        <th class="p-4 border-red-500 border-2">Identity Type</th>
                        <th class="p-4 border-red-500 border-2">Identity Number</th>
                        <th class="p-4 border-red-500 border-2">Date of Arrest</th>
                        <th class="p-4 border-red-500 border-2">Punishment</th>
                        <th class="p-4 border-red-500 border-2">Reason</th>
                        <th class="p-4 border-red-500 border-2">Removed At</th>
                        <th class="p-4 border-red-500 border-2">Removed By</th>
                        <th class="p-4 border-red-500 border-2">Full Details</th>
                    </tr>   
                </thead>
                <tbody class="text-slate-900">
                        <?php
                            include "../db/db_con.php";
                            $select="select * from non_existing_prisoner";
                            $q1=mysqli_query($connection,$select);
                            $no=mysqli_num_rows($q1);
                            if($no)
                            {
                                while($data=mysqli_fetch_assoc($q1))
                                {
                                    ?>
                                    <tr>
                                        <td class="px-8 border-slate-900 border-2"> <?php echo $data['prisoner_id'];?></td>
                                        <td class="px-8 border-slate-900 border-2"> <?php echo $data['name'];?></td>
                                        <td class="px-8 border-slate-900 border-2"> <?php echo $data['sex'];?></td>
                                        <td class="px-8 border-slate-900 border-2"> <?php echo $data['identity_type'];?></td>
                                        <td class="px-8 border-slate-900 border-2"> <?php echo $data['identity_no'];?></td>
                                        <td class="px-8 border-slate-900 border-2"> <?php echo $data['arrest_date'];?></td>         
                                        <td class="px-8 border-slate-900 border-2"> <?php echo $data['punishment'];?></td>
                                        <td class="px-8 border-slate-900 border-2"> <?php echo $data['reason'];?></td>
                                        <td class="px-8 border-slate-900 border-2"> <?php echo $data['non_existing_from'];?></td>
                                        <td class="px-8 border-slate-900 border-2"> <?php echo $data['in_charge'];?></td>
                                        <td class="px-8 border-slate-900 border-2"><a class="text-blue-500 no-underline hover:underline ..." href="viewCriminal2.php?id=<?php echo $data['prisoner_id'];?>">View More</a></td>
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
                    </code>
                </tbody>
            </table>
        </div>
        <div class="mx-auto mt-10">
            <a href="work.php" class="text-white bg-gradient-to-r from-green-400 to-blue-400 border-0 py-2 px-8 focus:outline-none hover:from-pink-500 hover:to-yellow-500  rounded-full text-lg shadow-xl shadow-black">Back</a>
        </div>
    </section>
</body>
</html>