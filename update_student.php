<?php
$conn=mysqli_connect("localhost","root","","ss");

  if($_SERVER['REQUEST_METHOD']=='POST'){
    $u_id= $_GET['u_id'];

    $student_cnic=$_POST['cnic'];
    $student_fname=$_POST['fname'];
    $student_lname=$_POST['lname'];
    $student_dob=$_POST['dob'];
    $student_address=$_POST['address'];
    $student_city=$_POST['city'];
    $student_degree=$_POST['degree'];
    $student_gender=$_POST['gender'];
    $student_email=$_POST['email'];
    $student_mobile=$_POST['mobile'];

    $que = "Update u_reg set ";
    $que .= "cnic = '".$student_cnic."' ,";
    $que .= "fname = '".$student_fname."' ,";
    $que .= "lname = '".$student_lname."' ,";
    $que .= "dateofbirth = '".$student_dob."' ,";
    $que .= "address = '".$student_address."' ,";
    $que .= "city = '".$student_city."' ,";
    $que .= "degree = '".$student_degree."' ,";
    $que .= "gender = '".$student_gender."' ,";
    $que .= "email = '".$student_email."' ,";
    $que .= "mobile = '".$student_mobile."' ";

    $que .= ' WHERE u_id="'.$u_id.'"';
    // exit($que);
    if(mysqli_query($conn, $que)){
      header('Location: '."view_students.php");
      exit;
    }

  }

  $u_id = $_GET['u_id'];

  $query = "SELECT * FROM u_reg WHERE u_id = ".$u_id." LIMIT 1";
  $resultSet = mysqli_query($conn, $query);
  $student  = mysqli_fetch_assoc($resultSet);
  // exit(print_r($student));


?>


   <?php

    // $db=mysql_select_db('ss',$conn);
    // if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['submit'])){
      // echo("Post request");
      $student_cnic=$_POST['cnic'];
      $student_fname=$_POST['fname'];
      $student_lname=$_POST['lname'];
      $student_dob=$_POST['dob'];
      $student_address=$_POST['address'];
      $student_city=$_POST['city'];
      $student_degree=$_POST['degree'];
      $student_gender=$_POST['gender'];
      $student_email=$_POST['email'];
      $student_mobile=$_POST['mobile'];



      $que = "insert into u_reg (cnic,fname,lname,dateofbirth,address,city,degree,gender,email,mobile) values ('$student_cnic','$student_fname','$student_lname','$student_dob','$student_address' , '$student_city' , '$student_degree' , '$student_gender' , '$student_email' , '$student_mobile')";
      // exit($que);

      if(mysqli_query($conn, $que)){

        echo "<center><b>The following data is being inserted into database</b></center>";
        exit;
      }
    }

   ?>



   <!DOCTYPE html>
   <html>
   <head>
   	<title>Update student</title>
   	<meta name="viewport" content="width=device-width,initial-scale=1">
   	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
   	<link rel="stylesheet" type="text/css" href="styles.css">
   </head>
   <body>
   	<div class="container">
   		<form method="post" action="<?php echo $_SERVER['SCRIPT_NAME']."?u_id=".$u_id; ?>" >
   			<h2>Update Student</h2>
   			<div class="singleItem">
   				<label>CNIC:</label>
   				<input class="subItem" type="text" name="cnic" placeholder="e.g. 35202-6370159-9" value="<?php echo $student['cnic']; ?>" required>
   			</div>
   			<div class="singleItem">
   				<label>FirstName:</label>
   				<input  class="subItem" type="text" name="fname" placeholder="First name" value="<?php echo $student['fname']; ?>" required>
   			</div>

   			<div class="singleItem">
   				<label>LastName:</label>
   				<input  class="subItem" type="text" name="lname" placeholder="Last name" value="<?php echo $student['lname']; ?>" required>
   			</div>
   			<div class="singleItem">
   				<label>DOB:</label>
   				<input  class="subItem" type="text" name="dob" placeholder='e.g 18-02-1996' value="<?php echo $student['dateofbirth']; ?>" required>
   			</div>
   			<div class='singleItem'>
   				<label>ADDRESS: </label>
   				<input  class="subItem" type='text' name='address' placeholder="e.g Awami Bazar inside lahori gate" value="<?php echo $student['address']; ?>" required>
   			</div>

   			<div class="singleItem">
   				<label>City:</label>
   				<select  class="subItem" name="city"   >
            <?php
              $cities = array('Sialkot', 'Wazirabad', 'Gujranwala', 'Lahore', 'Islamabad');

                echo "<option value='null'>Select City</option>";

              foreach ($cities as $city) {
                if($city == $student['city']){
                  echo "<option selected> $city </option>";
                }
                echo "<option> $city </option>";
              }
             ?>
   				</select>
   			</div>
   			<div class="singleItem">
   				<label>Degree Program:</label>
   				<select  class="subItem" name="degree" >
            <?php
              $degres = array('BSCS', 'BCS', 'MSCS', 'MIT', 'BIT','MCS');

                echo "<option value='null'>Select Degree</option>";

              foreach ($degres as $degree) {
                if($degree == $student['degree']){
                  echo "<option selected> $degree </option>";
                }
                echo "<option> $degree </option>";
              }
             ?>
   				</select>
   			</div>
   			<div class="singleItem">
   				<label>Gender:</label>
   				<div  class="radioBtn subItem" >
   					<input type="radio" name="gender" <?php if(strtolower($student['gender'])=='male'){ echo "checked";} ?> value="male">
   				 	<span align='left'>Male</span>
   					<input type="radio" name="gender" <?php if(strtolower($student['gender'])=='female'){ echo "checked";} ?> value="female">
   				 	<span align='left'>Female</span>
   				</div>
   			 </div>

   			<div class="singleItem">
   				<label>Email:</label>
   				<input  class="subItem" type="text" name="email" value="<?php echo $student['email']; ?>" placeholder="e.g abc@gmail.com" required>
   			</div>
   			<div class="singleItem">
   				<label>Mobile:</label>
   				<input  class="subItem" type="text" name="mobile"  value="<?php echo $student['mobile']; ?>" placeholder="e.g 03056302013" required>
   			</div>

   			<div class="formButton">
   				<input class="btn" type="reset" name="resetBtn" value="Reset">
   				<input class="btn" type="submit" name="submit" value="Update Student">
   			</div>

   		</form>
   	</div>
   </body>
   </html>
