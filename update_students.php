<?php

  $db = mysqli_connect("localhost","root",'','ss');
  $query = "SELECT * FROM `u_reg`";
  $resultSet = mysqli_query($db, $query);


 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>All Students</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="view_student.css">

  </head>
  <body>


    <nav>
      <ul class="nav ">
        <li class="nav-item navbar-brand "> Student Management System</li>
        <li  class="nav-item"> <a class="nav-link active" href="user_registration_new.php">Add Record</a></li>
        <li class="nav-item"> <a class="nav-link"  href="update_students.php">Update Record</a> </li>
        <li class="nav-item"> <a class="nav-link"  href="delete_students.php">Delete Record</a> </li>
        <li class="nav-item"> <a class="nav-link "  href="view_students.php">Show Record</a> </li>
        <li class="nav-item"> <a class="nav-link"  href="search.php">Search Record</a> </li>
      </ul>
    </nav>
    <div class="table-responsive">

      <table class="table table-striped" >
        <thead>
          <tr>
            <th scope="col">CNIC</th>
            <th  scope="col" >Name</th>
            <th  scope="col" >DOB</th>
            <th  scope="col" >Address</th>
            <th  scope="col" >City</th>
            <th  scope="col" >Degree Program</th>
            <th  scope="col" >Gender</th>
            <th  scope="col" >Email</th>
            <th  scope="col" >Mobile</th>
            <th  scope="col" ></th>
          </tr>
        </thead>
        <tbody>

          <?php  while($student = mysqli_fetch_assoc($resultSet)){?>
            <tr>
              <td scope="row" ><?php echo $student['cnic']; ?></td>
              <td><?php echo $student['fname'] . " ".  $student['lname']; ?></td>
              <td><?php echo $student['dateofbirth']; ?></td>
              <td><?php echo $student['address']; ?></td>
              <td><?php echo $student['city']; ?></td>
              <td><?php echo $student['degree']; ?></td>
              <td><?php echo $student['gender']; ?></td>
              <td><?php echo $student['email']; ?></td>
              <td><?php echo $student['mobile']; ?></td>
              <td> <a class="btn btn-primary" href=<?php echo "update_student.php?u_id=".$student['u_id']; ?> >Update</a> </td>
            </tr>
          <?php }?>
        </tbody>
      </table>
    </div>

  </body>
</html>
