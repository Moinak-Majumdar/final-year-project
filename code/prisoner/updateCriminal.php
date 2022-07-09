<?php
  session_start();
  include "../db/db_con.php";
  if(!isset($_SESSION['prisoner_id']))
    {
        ?>
        <script>
            alert("error");
            window.location.href="work.php";
        </script>
        <?php
    }
    else
    {
        $id=$_SESSION['prisoner_id'];
        $select="select * from prisoner where prisoner_id='$id'";
        $q1=mysqli_query($connection,$select);
        $res=mysqli_fetch_assoc($q1);
    }
    $class='bg-gray-800 bg-opacity-90 rounded border border-gray-700 focus:border-rose-600 focus:bg-gray-900 focus:ring-2 focus:ring-pink-600 text-base outline-none text-rose-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out w-full shadow-xl shadow-black';
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
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel ="stylesheet" href="../css/hide.css">
  <script src="../js/jquery-latest.min.js"></script>
  <script src="../js/showImg.js"></script>
  <title>Update Prisoner</title>
</head>
<body class="bg-slate-800">
    <div class="mt-10 lg:px-40 px-4">
      <h1 class="font-extrabold text-5xl text-transparent bg-clip-text bg-gradient-to-r from-teal-300 via-lime-400 to-green-400">Modify Prisoner Information</h1>
      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="mt-8 grid lg:grid-cols-5 gap-8 px-auto mx-auto">
            <div>
              <label class="text-xl text-cyan-400 block mb-1">Name</label>
              <input type="text" name="name" 
                value="<?php echo $res['name'];?>"
                class="<?php echo $class ?>"
                placeholder="Enter Full Name *" required/>
            </div>

            <div>
              <label class="text-xl text-cyan-400 block mb-1">Prisoner Id :</label>
              <h1 class="font-medium text-2xl text-fuchsia-600">
                <?php echo $_SESSION['prisoner_id']; ?></h1>
            </div>
            
            <div>
              <label class="text-xl text-cyan-400 block mb-1">Penal Code :</label>
              <h1 class="font-medium text-2xl text-fuchsia-600">
                <?php echo $res['penal_code'];?></h1>
            </div>

            <div class="row-span-4">
              <label class="text-xl text-cyan-400 block mb-1">Photo :</label>
              <img src="<?php echo $res['photo']?>" id="display_photo" class="h-72 w-64 p-1 m-2 border-double border-4 border-blue-600 shadow-xl shadow-black"></img>
            </div>

            <div class="row-span-4" >
              <label class="text-xl text-cyan-400 block mb-1">Police File :</label>
              <img src="<?php echo $res['file']?>" id="display_file" class="h-72 w-64 p-1 m-2 border-double border-4 border-blue-600 shadow-xl shadow-black"></img>
            </div>

            <div>
              <label class="text-xl text-cyan-400 block mb-1">Date Of Birth</label>
              <input type="date" name="dob"  
                value="<?php echo $res['dob'];?>"
                class="<?php echo $class ?>" required/>
            </div>

            <div>
              <label class="text-xl text-cyan-400 block mb-1">Sex</label>
              <input type="text" name="sex" 
                value="<?php echo $res['sex'];?>"
                class="<?php echo $class ?>"
                placeholder="Male/Female *"  required/>
            </div>

            <div>
              <label class="text-xl text-cyan-400 block mb-1">Medical Record</label>
              <input type="text" name="medical" 
                value="<?php echo $res['medical'];?>"
                class="<?php echo $class ?>"
                placeholder="Health status *"  required/>
            </div>

            <div>
              <label class="text-xl text-cyan-400 block mb-1">Identity type</label>
              <input type="text" name="identity_type" 
                value="<?php echo $res['identity_type'];?>"
                class="<?php echo $class ?>"
                placeholder="Enter Identity type *" required/>
            </div>

            <div>
              <label class="text-xl text-cyan-400 block mb-1">Identity Number</label>
              <input type="text" name="identity_no" 
                value="<?php echo $res['identity_no'];?> " 
                class="<?php echo $class ?>"
                placeholder="Enter Identity Number *" required/>
            </div>

            <div>
              <label class="text-xl text-cyan-400 block mb-1">Crime Record(s)</label>
              <input type="text" name="previous_crime" 
                value="<?php echo $res['previous_crime'];?>"
                class="<?php echo $class ?>"
                placeholder="Previous Crime Record (if any)" />
            </div>

            <div>
              <label class="text-xl text-cyan-400 block mb-1">Guardian</label>
              <input type="text" name="g_name" 
                value="<?php echo $res['g_name'];?>" 
                class="<?php echo $class ?>"
                placeholder="Guardian Name (with relation) *" required/>
            </div>

            <div>
              <label class="text-xl text-cyan-400 block mb-1">Phone Number</label>
              <input type="tel" name="phone_no" 
                value="<?php echo $res['phone_no'];?>"
                class="<?php echo $class ?>"
                placeholder="Phone Number *" />
            </div>

            <div>
              <label class="text-xl text-cyan-400 block mb-1">Address</label>
              <input type="text" name="address" 
                value="<?php echo $res['address'];?>"
                class="<?php echo $class ?>"
                placeholder="Current address *"  required/>
            </div>

            <div>
              <label class="text-xl text-cyan-400 block mb-1">Crime(s) committed</label>
              <input type="text" name="crime" 
                value="<?php echo $res['crime'];?>"
                class="<?php echo $class ?>"
                placeholder="Committed crime(s) *" required/>
            </div>

            <div>
              <label class="text-xl text-cyan-400 block mb-1">Case</label>
              <input type="text" name="case_status" 
                value="<?php echo $res['case_status'];?>"
                class="<?php echo $class ?>"
                placeholder="Case Status *" required/>
            </div>

            <div>
              <label class="text-xl text-cyan-400 block mb-1">Punishment</label>
              <input type="text" name="punishment" 
                value="<?php echo $res['punishment'];?>"
                class="<?php echo $class ?>"
                placeholder="Punishment (id declared)">
            </div>

            <div>
              <label class="text-xl text-cyan-400 block mb-1">Date of Arrest</label>
              <input type="date" name="arrest_date" 
                value="<?php echo $res['arrest_date'];?>"
                class="<?php echo $class ?>" required/>
            </div>

            <div>
              <label class="text-xl text-pink-600 block mb-1 font-extrabold italic">Case In-charge :</label>
              <h1 class="font-medium text-2xl text-zinc-100">
              <?php echo "-> ". $res['in_charge']?></h1>
            </div>

            <div>
              <label class="text-xl text-pink-600 block mb-1 font-extrabold italic">New In-charge :</label>
              <h1 class="font-bold text-2xl text-zinc-900">
              <?php echo "-> ".$_SESSION['in_charge']?></h1>
            </div>

          </div>

          <div class="space-x-4 mt-8">
            <input type="submit" name="submit" value="Update Prisoner"
              class="py-2 px-4 bg-blue-500 text-white rounded-lg cursor-pointer hover:bg-blue-600 active:bg-blue-700 shadow-xl shadow-black">
            <a href="work.php" class="text-white bg-gradient-to-r from-green-400 to-blue-400 border-0 py-2 px-8 focus:outline-none hover:from-pink-500 hover:to-yellow-500  rounded-full text-lg cursor-pointer shadow-xl shadow-black">Back</a>
          </div>
        </div>
      </form>
      <!-- Hl4  SVG   -->
      <div class = "fixed -bottom-20 left-0 -z-10 opacity-80">
          <?php 
            include '../svg/svg.php';
            echo $svg1;
          ?> 
      </div>
    </div>
</body>
</html>

<!-- --------------------- -->
<!--------- php ------------->
<!-- --------------------- -->

<?php   
    include "../db/db_con.php";
    if(isset($_POST['submit']))
    {
      $name=mysqli_real_escape_string($connection,$_POST['name']);
      $prisoner_id=$res['prisoner_id'];
      $sex=mysqli_real_escape_string($connection,$_POST['sex']);
      $dob=mysqli_real_escape_string($connection,$_POST['dob']);
      $medical=mysqli_real_escape_string($connection,$_POST['medical']);
      $identity_type=mysqli_real_escape_string($connection,$_POST['identity_type']);
      $identity_no=mysqli_real_escape_string($connection,$_POST['identity_no']);
      $g_name=mysqli_real_escape_string($connection,$_POST['g_name']);
      $phone_no=mysqli_real_escape_string($connection,$_POST['phone_no']);
      $address=mysqli_real_escape_string($connection,$_POST['address']);
      $previous_crime=mysqli_real_escape_string($connection,$_POST['previous_crime']);
      $crime=mysqli_real_escape_string($connection,$_POST['crime']);
      $case_status=mysqli_real_escape_string($connection,$_POST['case_status']);
      $punishment=mysqli_real_escape_string($connection,$_POST['punishment']);
      $arrest_date=mysqli_real_escape_string($connection,$_POST['arrest_date']);
      $in_charge=$_SESSION['in_charge'];

          $updateQuery="UPDATE `prisoner` SET `name`='$name',`sex`='$sex',`dob`='$dob',`medical`='$medical',`identity_type`='$identity_type',`identity_no`='$identity_no',`g_name`='$g_name',`phone_no`='$phone_no',`address`='$address',`previous_crime`='$previous_crime',`case_status`='$case_status',`arrest_date`='$arrest_date',`crime`='$crime',`punishment`='$punishment',`in_charge`='$in_charge' WHERE `prisoner_id`='$prisoner_id'";

          $query=mysqli_query($connection,$updateQuery);

          if($query)
          {
            ?>
            <script>
                alert("Prisoner Updated");
                location.replace("work.php");
            </script>
            <?php
          }
          else
          {
            ?>
            <script>
                alert("Oops! Something Went Wrong  :(");
            </script>
            <?php
          }
      
    }
?>