<?php
include "../db/db_con.php";
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $select="select * from prisoner where prisoner_id='$id'";
    $query=mysqli_query($connection,$select);
    $res=mysqli_fetch_assoc($query);
} else { 
    ?>
    <script>
        alert("error");
        window.location.href='work.php';
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
    <title>Prisoner <?php echo "$id"; ?></title>
    <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel ="stylesheet" href="../css/hide.css">
    <script>
        function generatePDF()
        {
            const element= document.getElementById("pdf");

            var settings = 
			{
			  margin:       1,
			  filename:     'Prisoner_'+"<?php echo $res['prisoner_id']."_".$res['name']."_";?>"+'.pdf',
			  image:        { type: 'jpeg', quality: 1 },
			  html2canvas:  { scale: 2 },
			  jsPDF:        { unit: 'cm', format: 'letter', orientation: 'portrait' }
			};
            html2pdf().set(settings).from(element).save();
        }
    </script>
</head>
<body class="bg-slate-200">
<section class='mb-8'>
    <div class="lg:px-40 px-4">
        <div id="pdf">
            <h1 class="font-bold text-5xl text-purple-600 border-double border-b-2 border-purple-400 w-fit">Prisoner Information</h1>
            <div class="mt-8 grid xl:gird-cols-3 lg:grid-cols-3 sm:grid-cols-1 grid-cols-1 gap-y-0.5 gap-x-0.5">
                <div>
                    <h1 class="text-xl text-indigo-700 block mb-1 font-bold">Name :
                        <span class="font-medium text-2xl text-rose-600">
                            <?php echo $res['name']?></span>
                    </h1>
                </div>

                <div>
                    <h1 class="text-xl text-indigo-700 block mb-1 font-bold">Date Of Birth :
                        <span class="font-medium text-2xl text-slate-800">
                            <?php echo $res['dob']?></span>
                    </h1>
                </div>

                <div class="row-span-4">
                    <h1 class="text-xl text-indigo-700 block mb-1 font-bold">Photo :</h1>
                        <img class="h-72 w-64 p-1 border-double border-4 border-gray-900 shadow-2xl shadow-black" src="<?php echo $res['photo'];?>"></img>
                    </h1>
                </div>

                <div>
                    <h1 class="text-xl text-indigo-700 block mb-1 font-bold">Prisoner Id :
                        <span class="ml-2 font-medium text-3xl text-green-500">
                            <?php echo $res['prisoner_id']?></span>
                    </h1>
                </div>
            
                <div>
                    <h1 class="text-xl text-indigo-700 block mb-1 font-bold">Penal Code :
                        <span class="ml-2 font-medium text-3xl text-green-500">
                            <?php echo $res['penal_code']?></span>
                    </h1>
                </div>

                <div>
                    <h1 class="text-xl text-indigo-700 block mb-1 font-bold">Sex :
                        <span class="font-medium text-2xl text-slate-800">
                            <?php echo $res['sex']?></span>
                    </h1>
                </div>

                <div>
                    <h1 class="text-xl text-indigo-700 block mb-1 font-bold">Medical Record :
                        <span class="font-medium text-2xl text-slate-800">
                            <?php echo $res['medical']?></span>
                    </h1>
                </div>

                <div>
                    <h1 class="text-xl text-indigo-700 block mb-1 font-bold">Identity type :
                        <span class="font-medium text-2xl text-slate-800">
                            <?php echo $res['identity_type']?></span>
                    </h1>
                </div>

                <div>
                    <h1 class="text-xl text-indigo-700 block mb-1 font-bold">Identity Number :
                        <span class="font-medium text-2xl text-slate-800">
                            <?php echo $res['identity_no']?></span>
                    </h1>
                </div>

                <div>
                    <h1 class="text-xl text-indigo-700 block mb-1 font-bold">Crime(s) committed :
                        <span class="font-medium text-2xl text-slate-800">
                            <?php echo $res['crime']?></span>
                    </h1>
                </div>
                
                <div>
                    <h1 class="text-xl text-indigo-700 block mb-1 font-bold">Guardian Name :
                        <span class="font-medium text-2xl text-slate-800">
                            <?php echo $res['g_name']?></span>
                    </h1>
                </div>

                <div class="row-span-4">
                    <h1 class="text-xl text-indigo-700 block mb-1 font-bold">Case File :</h1>
                        <img class="h-72 w-64 p-1 border-double border-4 border-rose-600 shadow-2xl shadow-black" src="<?php echo $res['file'];?>"></img>
                    </div>
            </h1>

                <div>
                    <h1 class="text-xl text-indigo-700 block mb-1 font-bold">Phone Number :
                        <span class="font-medium text-2xl text-slate-800">
                            <?php echo $res['phone_no']?></span>
                    </h1>
                </div>

                <div>
                    <h1 class="text-xl text-indigo-700 block mb-1 font-bold">Address :
                        <span class="font-medium text-2xl text-slate-800">
                            <?php echo $res['address']?></span>
                    </h1>
                </div>

                <div>
                    <h1 class="text-xl text-indigo-700 block mb-1 font-bold">Previous Crime(s):
                        <span class="font-medium text-2xl text-slate-800">
                            <?php echo $res['previous_crime']?></span>
                    </h1>
                </div>

                <div>
                    <h1 class="text-xl text-indigo-700 block mb-1 font-bold">Case Status:
                        <span class="font-medium text-2xl text-slate-800">
                            <?php echo $res['case_status']?></span>
                    </h1>
                </div>

                <div>
                    <h1 class="text-xl text-indigo-700 block mb-1 font-bold">Punishment :
                        <span class="font-medium text-2xl text-slate-800">
                            <?php echo $res['punishment']?></span>
                    </h1>
                </div>

                <div>
                    <h1 class="text-xl text-indigo-700 block mb-1 font-bold">Date of Arrest :
                        <span class="font-medium text-2xl text-slate-800 italic">
                            <?php echo $res['arrest_date']?></span>
                    </h1>
                </div>

                <div>
                    <h1 class="text-xl text-pink-600 block mb-1 font-extrabold italic">Case In-charge :
                        <span class="font-medium text-2xl italic text-black">
                            <?php echo $res['in_charge']?></span>
                    </h1>
                </div>

            </div>
        </div>
        <div class="space-x-4 mt-10">
          <button onclick="generatePDF()" class="py-2 px-4 bg-blue-500 text-white rounded-lg hover:bg-blue-600 active:bg-blue-700 shadow-xl shadow-black">Print Information</button>
          <a href="work.php" class="text-white bg-gradient-to-r from-green-400 to-blue-400 border-0 py-2 px-8 focus:outline-none hover:from-pink-500 hover:to-yellow-500 text-lg rounded-full shadow-xl shadow-black">Back</a>
        </div>
        <!-- Hl4  SVG   -->
        <div class = "fixed -bottom-32 left-0 -z-10 opacity-80">
            <?php 
                include '../svg/svg.php';
                echo $svg2
            ?>
        </div>
    </div>
</section>
</body>
</html>