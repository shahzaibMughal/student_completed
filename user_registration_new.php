<?php
 $conn=mysqli_connect("localhost","root","","ss");

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

 //
 //

?>



<!DOCTYPE html>
<html>
<head>
	<title>Add student</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <style media="screen">
    body{
      background: #eee;
    }
    nav{
      background: #563d7c;
      color: #fff;
      padding: 10px;
      padding-left: 50px;
      margin-bottom: 20px;
    }
    .nav-item,.nav-link{
      color: #fff;
    }
    .nav-link:hover{
      color: #eee;
    }
    .container h2{
      font-size: 3em;
      margin: 5px;
    }
  </style>
</head>
<body>
  <nav>
    <ul class="nav ">
      <li class="nav-item navbar-brand "> Student Management System</li>
      <li  class="nav-item"> <a class="nav-link active" href="user_registration_new.php">Add Record</a></li>
      <li class="nav-item"> <a class="nav-link"  href="update_students.php">Update Record</a> </li>
      <li class="nav-item"> <a class="nav-link"  href="delete_students.php">Delete Record</a> </li>
      <li class="nav-item"> <a class="nav-link"  href="view_students.php">Show Record</a> </li>
      <li class="nav-item"> <a class="nav-link"  href="search.php">Search Record</a> </li>
    </ul>
  </nav>

	<div class="container">

    <h2>Add Student</h2>
		<form method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" >
			<div class="singleItem">
				<label>CNIC:</label>
				<input class="subItem" type="text" name="cnic" placeholder="e.g. 35202-6370159-9" required>
			</div>
			<div class="singleItem">
				<label>FirstName:</label>
				<input  class="subItem" type="text" name="fname" placeholder="First name" required>
			</div>

			<div class="singleItem">
				<label>LastName:</label>
				<input  class="subItem" type="text" name="lname" placeholder="Last name" required>
			</div>
			<div class="singleItem">
				<label>DOB:</label>
				<input  class="subItem" type="text" name="dob" placeholder='e.g 18-02-1996' required>
			</div>
			<div class='singleItem'>
				<label>ADDRESS: </label>
				<input  class="subItem" type='text' name='address' placeholder="e.g Awami Bazar inside lahori gate" required>
			</div>

			<div class="singleItem">
				<label>City:</label>
				<select  class="subItem" name="city"   >
						<option value="null">Select City</option>
						<option value="Sialkot">Sialkot</option>
						<option value="Wazirabad">Wazirabad</option>
						<option value="Gujranwala">Gujranwala</option>
						<option value="Lahore">Lahore</option>
						<option value="Islamabad">Islamabad</option>
				</select>
			</div>
			<div class="singleItem">
				<label>Degree Program:</label>
				<select  class="subItem" name="degree" >
						<option value="null">Select Degree</option>
						<option value="BSCS">BSCS</option>
						<option value="BCS">BCS</option>
						<option value="MSCS">MSCS</option>
						<option value="MIT">MIT</option>
						<option value="BIT">BIT</option>
						<option value="MSC">MCS</option>
				</select>
			</div>
			<div class="singleItem">
				<label>Gender:</label>
				<div  class="radioBtn subItem" >
					<input type="radio" name="gender" checked value="male">
				 	<span align='left'>Male</span>
					<input type="radio" name="gender" value="female">
				 	<span align='left'>Female</span>
				</div>
			 </div>

			<div class="singleItem">
				<label>Email:</label>
				<input  class="subItem" type="text" name="email" placeholder="e.g abc@gmail.com" required>
			</div>
			<div class="singleItem">
				<label>Mobile:</label>
				<input  class="subItem" type="text" name="mobile" placeholder="e.g 03056302013" required>
			</div>

			<div class="formButton">
				<input class="btn btn-primary" type="reset" name="resetBtn" value="Reset">
				<input class="btn btn-primary" type="submit" name="submit" value="Add Student">
			</div>

		</form>
	</div>
</body>
</html>
