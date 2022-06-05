<?php
  session_start();
  if(!isset($_SESSION['prisoner_id']))
    {
        ?>
        <script>
            alert("error");
            window.location.href='work.php'
        </script>
        <?php
        
    }
  $class = 'bg-gray-800 bg-opacity-90 rounded border border-gray-700 focus:border-rose-600 focus:bg-gray-900 focus:ring-2 focus:ring-pink-600 text-base outline-none text-rose-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out w-full shadow-2xl shadow-black';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../css/hide.css">
  <script src="../js/jquery-latest.min.js"></script>
  <script src="../js/showImg.js"></script>
  <title>Add Criminal</title>
</head>

<body class="bg-slate-800">
  <section>
    <div class="py-10 lg:px-40 px-4">
      <h1 class="font-bold text-5xl text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-indigo-500 w-fit">Add Prisoner</h1>
     
      <!-- HL2    working  section -->
      <form action="addCriminal.php" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="mt-8 grid lg:grid-cols-5 gap-8 px-auto mx-auto">
          <div>
            <label class="text-xl text-cyan-400 block mb-1 font-medium">Name</label>
            <input type="text" name="name"
              class="<?php echo $class ?>"
              placeholder="Enter Full Name *" required/>
          </div>

          <div>
            <label class="text-xl text-cyan-400 block mb-1 font-medium">Prisoner Id :</label>
            <h1 class="font-medium text-2xl text-fuchsia-600">
              <?php echo $_SESSION['prisoner_id']; ?></h1>
          </div>
          
          <div>
            <label class="text-xl text-cyan-400 block mb-1 font-medium">Penal Code :</label>
            <h1 class="font-medium text-2xl text-fuchsia-600">
              <?php echo $_SESSION['penal_code'];?></h1>
          </div>

          <div class="row-span-4">
            <label class="text-xl text-cyan-400 block mb-1 font-medium shadow-2xl shadow-black">Upload Photo</label>
            <input type="file" name="photo" id="photo"
              class="text-violet-500" required>
            <img id="display_photo" class="h-72 w-64 p-1 m-2 border-double border-4 border-indigo-500 shadow-2xl shadow-black"></img>
            <script src="../js/showImg.js"></script>
          </div>

          <div class="row-span-4" >
            <label class="text-xl text-cyan-400 block mb-1 font-medium shadow-2xl shadow-black">Upload Police File</label>
            <input type="file" name="file" id="file"
            class="text-violet-500" required>
            <img id="display_file" class="h-72 w-64 p-1 m-2 border-double border-4 border-indigo-500 shadow-2xl shadow-black"></img>
            <script src="../js/showImg.js"></script>
          </div>

          <div>
            <label class="text-xl text-cyan-400 block mb-1 font-medium">Date Of Birth</label>
            <input type="date" name="dob"
              class="<?php echo $class ?>" required/>
          </div>

          <div>
            <label class="text-xl text-cyan-400 block mb-1 font-medium">Sex</label>
            <select name="sex" 
              class="bg-gray-800 bg-opacity-90 rounded border border-gray-700 focus:border-rose-600 focus:bg-gray-900 focus:ring-2 focus:ring-pink-600 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out w-1/2 shadow-2xl shadow-black">
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
            </select>
          </div>

          <div>
            <label class="text-xl text-cyan-400 block mb-1 font-medium">Medical Record</label>
            <input type="text" name="medical" 
              class="<?php echo $class ?>"
              placeholder="Health Status *"  required/>
          </div>

          <div>
            <label class="text-xl text-cyan-400 block mb-1 font-medium">Identity type</label>
            <select name="identity_type"
              class="bg-gray-800 bg-opacity-90 rounded border border-gray-700 focus:border-rose-600 focus:bg-gray-900 focus:ring-2 focus:ring-pink-600 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out w-1/2 shadow-2xl shadow-black">
              <option>Aadhar Card</option>
              <option>Voter Card</option>
              <option>Ration Card</option>
              <option>Other Photo Identity</option>
            </select>
          </div>

          <div>
            <label class="text-xl text-cyan-400 block mb-1 font-medium">Identity Number</label>
            <input type="text" name="identity_no"
              class="<?php echo $class ?>"
              placeholder="Enter Identity Number *" required/>
          </div>

          <div>
            <label class="text-xl text-cyan-400 block mb-1 font-medium">Crime(s) Committed</label>
            <input type="text" name="crime" 
              class="<?php echo $class ?>"
              placeholder="Committed Crime(s) *" required/>
          </div>

          <div>
            <label class="text-xl text-cyan-400 block mb-1 font-medium">Crime Record(s)</label>
            <input type="text" name="previous_crime" 
              class="<?php echo $class ?>"
              placeholder="Previous Crime Record (if any)" />
          </div>

          <div>
            <label class="text-xl text-cyan-400 block mb-1 font-medium">Guardian</label>
            <input type="text" name="g_name" 
              class="<?php echo $class ?>"
              placeholder="Guardian Name (with relation) *" required/>
          </div>

          <div>
            <label class="text-xl text-cyan-400 block mb-1 font-medium">Phone Number</label>
            <input type="tel" name="phone_no" 
              class="<?php echo $class ?>"
              placeholder="Phone Number *" />
          </div>

          <div>
            <label class="text-xl text-cyan-400 block mb-1 font-medium">Address</label>
            <input type="text" name="address" 
              class="<?php echo $class ?>"
              placeholder="Current Address *"  required/>
          </div>

          <div>
            <label class="text-xl text-cyan-400 block mb-1 font-medium">Case</label>
            <input type="text" name="case_status" 
              class="<?php echo $class ?>"
              placeholder="Case Status *" required/>
          </div>

          <div>
            <label class="text-xl text-cyan-400 block mb-1 font-medium">Punishment</label>
            <input type="text" name="punishment" 
              class="<?php echo $class ?>"
              placeholder="Punishment (if declared)">
          </div>

          <div>
            <label class="text-xl text-cyan-400 block mb-1 font-medium">Date of Arrest</label>
            <input type="date" name="arrest_date" 
              class="<?php echo $class ?>" required/>
          </div>
          
        </div>

        <div class="mt-8">
          <input type="submit" name="submit" value="Add Prisoner"
            class="m-2 py-2 px-4 bg-blue-500 text-white hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50 rounded-lg cursor-pointer shadow-xl shadow-black">
          <input type="reset" value="Reset"
            class="m-2 py-2 px-4 bg-pink-500 text-white rounded hover:bg-pink-600 active:bg-pink-700 disabled:opacity-50 cursor-pointer shadow-xl shadow-black">
          <a href="work.php" class="m-2 cursor-pointer text-white bg-gradient-to-r from-green-400 to-blue-400 border-0 py-2 px-8 focus:outline-none hover:from-pink-500 hover:to-yellow-500  rounded-full text-lg shadow-xl shadow-black">Back</a>
        </div>
      </form>
      <!-- Hl4  SVG   -->
      <div class = "fixed -bottom-14 left-0 -z-10 opacity-80">
          <?php
            include "../svg/svg.php";
            echo $svg1
          ?>
      </div>
    </div>
  </section>
</body>
</html>

<!-- --------------------- -->
<!--------- php ------------->
<!-- --------------------- -->

<?php   
    include "../db/db_con.php";
    if(isset($_POST['submit']))
    {
      $name=mysqli_real_escape_string($connection,$_REQUEST['name']);
      $penal_code=$_SESSION['penal_code'];
      $prisoner_id=$_SESSION['prisoner_id'];
      $sex=mysqli_real_escape_string($connection,$_REQUEST['sex']);
      $dob=mysqli_real_escape_string($connection,$_REQUEST['dob']);
      $medical=mysqli_real_escape_string($connection,$_REQUEST['medical']);
      $identity_type=mysqli_real_escape_string($connection,$_REQUEST['identity_type']);
      $identity_no=mysqli_real_escape_string($connection,$_REQUEST['identity_no']);
      $g_name=mysqli_real_escape_string($connection,$_REQUEST['g_name']);
      $phone_no=mysqli_real_escape_string($connection,$_REQUEST['phone_no']);
      $address=mysqli_real_escape_string($connection,$_REQUEST['address']);
      $crime=mysqli_real_escape_string($connection,$_REQUEST['crime']);
      $previous_crime=mysqli_real_escape_string($connection,$_REQUEST['previous_crime']);
      $case_status=mysqli_real_escape_string($connection,$_REQUEST['case_status']);
      $punishment=mysqli_real_escape_string($connection,$_REQUEST['punishment']);
      $arrest_date=mysqli_real_escape_string($connection,$_REQUEST['arrest_date']);
      $photo=$_FILES['photo'];
      $file=$_FILES['file'];

      $photo_extension = pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION);
      $file_extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
      $photo_name=$prisoner_id.".".$photo_extension;
      $photo_path=$photo['tmp_name'];
      $photo_error=$photo['error'];
      $file_name=$prisoner_id.".".$file_extension;;
      $file_path=$file['tmp_name'];
      $file_error=$file['error'];
      $in_charge=$_SESSION['name'];
      if($file_error == 0 && $photo_error == 0)
      {
          $photo_dest = '../data/photo/'.$photo_name;
          $file_dest = '../data/file/'.$file_name;

          move_uploaded_file($photo_path,$photo_dest);
          move_uploaded_file($file_path,$file_dest);

          $insertQuery = "INSERT INTO `prisoner`(`penal_code`, `prisoner_id`, `name`, `sex`, `dob`, `medical`, `identity_type`, `identity_no`, `g_name`, `phone_no`, `address`, `previous_crime`, `case_status`, `arrest_date`, `crime`, `punishment`, `photo`, `file` ,`in_charge`) VALUES('$penal_code','$prisoner_id','$name','$sex','$dob','$medical','$identity_type','$identity_no','$g_name','$phone_no','$address','$previous_crime','$case_status','$arrest_date','$crime','$punishment','$photo_dest','$file_dest','$in_charge')";

          $query=mysqli_query($connection,$insertQuery);

          if($query)
          {
            ?>
            <script>
                alert("Prisoner Added");
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
    }
?>