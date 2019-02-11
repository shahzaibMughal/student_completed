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
        <li class="nav-item"> <a class="nav-link"  href=".php">Update Record</a> </li>
        <li class="nav-item"> <a class="nav-link"  href="delete.php">Delete Record</a> </li>
        <li class="nav-item"> <a class="nav-link"  href="view_students.php">Show Record</a> </li>
        <li class="nav-item"> <a class="nav-link"  href="search.php">Search Record</a> </li>
      </ul>
    </nav>

      <table >
        <thead>
          <tr>
            <th>CNIC</th>
            <th>Name</th>
            <th>DOB</th>
            <th>Address</th>
            <th>City</th>
            <th>Degree Program</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Mobile</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>

          <?php  while($student = mysqli_fetch_assoc($resultSet)){?>
            <tr>
              <td><?php echo $student['cnic']; ?></td>
              <td><?php echo $student['fname'] . " ".  $student['lname']; ?></td>
              <td><?php echo $student['dateofbirth']; ?></td>
              <td><?php echo $student['address']; ?></td>
              <td><?php echo $student['city']; ?></td>
              <td><?php echo $student['degree']; ?></td>
              <td><?php echo $student['gender']; ?></td>
              <td><?php echo $student['email']; ?></td>
              <td><?php echo $student['mobile']; ?></td>
              <td> <a href=<?php echo "update_student.php?u_id=".$student['u_id']; ?> >Update</a> </td>
              <td> <a href=<?php echo "delete_student.php?u_id=".$student['u_id']; ?> >Delete</a> </td>
            </tr>
          <?php }?>
        </tbody>
      </table>

  </body>
</html>
