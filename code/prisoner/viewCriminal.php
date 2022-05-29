<?php
include "db_con.php";
session_start();
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $select="select * from prisoner where prisoner_id='$id'";
    $query=mysqli_query($connection,$select);
    $res=mysqli_fetch_assoc($query);
}
if(isset($_SESSION['prisoner_id']))
{
    $id=$_SESSION['prisoner_id'];
    $select="select * from prisoner where prisoner_id='$id'";
    $query=mysqli_query($connection,$select);
    $res=mysqli_fetch_assoc($query);
}
if(isset($_GET['id']) && isset($_SESSION['prisoner_id']) )
{
    $id=$_GET['id'];
    $select="select * from prisoner where prisoner_id='$id'";
    $query=mysqli_query($connection,$select);
    $res=mysqli_fetch_assoc($query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<section>
    <div class="lg:px-40 px-4">
        <div id="pdf">
            <h1 class="font-medium text-5xl text-purple-600 border-double border-b-2 border-purple-400 w-fit">Prisoner Information</h1>
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
                        <img class="h-72 w-64 p-1 border-double border-4 border-gray-900" src="<?php echo $res['photo'];?>"></img>
                    </div>
            </h1>

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
                        <img class="h-72 w-64 p-1 border-double border-4 border-rose-600" src="<?php echo $res['file'];?>"></img>
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
                    <h1 class="text-xl text-indigo-700 block mb-1 font-bold">Previous Crime Record :
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
                    <h1 class="text-xl text-red-500 block mb-1 font-bold italic">Case In-charge :
                        <span class="font-medium text-2xl text-red-500  italic">
                            <?php echo $res['in_charge']?></span>
                    </h1>
                </div>

            </div>
        </div>
        <div class="space-x-4 mt-10">
          <button onclick="generatePDF()" class="py-2 px-4 bg-blue-500 text-white rounded-lg hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Print Information</button>
          <a href="work.php" class="text-white bg-gradient-to-r from-green-400 to-blue-400 border-0 py-2 px-8 focus:outline-none hover:from-pink-500 hover:to-yellow-500 text-lg rounded-full ...">Back</a>
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