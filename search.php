<?php

$db = mysqli_connect("localhost","root",'','ss');

  $query = "SELECT * FROM `u_reg`";
  $resultSet = mysqli_query($db, $query);

  // exit("Mysqli error: ". mysqli_error($db));
  // exit("result :".$resultSet);
  // exit(print_r($students));
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <link rel='stylesheet' type='text/css' href='search_style.css' -->
    <title>Search a Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style media="screen">
      nav{
        background: #563d7c;
        color: #fff;
        padding: 10px;
        padding-left: 50px;
      }
      .nav-item,.nav-link{
        color: #fff;
      }
      .nav-link:hover{
        color: #eee;
      }

      .table-responsive{
        width: 100%;
      }
      form{
        width: 30%;
        margin: 0 auto;
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
    <div class="jumbotron ">
      <form  class="search_form" action='search.php' method='get' class="">
        <div class='search_record' >
          <h2 class="text-center"> Search A Record </h2>
          <div class="input-group">
            <input class=" form-control" type='text' name ='search' placeholder="Enter CNIC TO SEARCH" required>
            <input type='submit' class="btn btn-primary" >
          </div>
        </div>
        </form>
    </div>



<?php

if(isset($_GET['search']))
{
  // select * from u_reg where cnic LIKE '34%'

    $search_record= $_GET['search'];
    $query2 = "select * from u_reg WHERE cnic LIKE '%".$search_record."%'";
    // exit($query2);
    $run2= mysqli_query($db, $query2);
    while($row2=mysqli_fetch_assoc($run2)){
      $cnic1=$row2['cnic'];
      $name1=$row2['fname']." ". $row2['lname'];
      $dob1=$row2['dateofbirth'];
      $address1=$row2['address'];
      $city1=$row2['city'];
      $degree1=$row2['degree'];
      $gender1=$row2['gender'];
      $email1=$row2['email'];
      $mobile1=$row2['mobile'];
?>



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
              <th  scope="col" ></th>
            </tr>
          </thead>
          <tbody>

            <?php  while($student = mysqli_fetch_assoc($resultSet)){?>
              <tr>
                <td scope="row" ><?php echo $cnic1; ?></td>
                <td><?php echo $name1; ?></td>
                <td><?php echo $dob1; ?></td>
                <td><?php echo $address1; ?></td>
                <td><?php echo $city1; ?></td>
                <td><?php echo $degree1; ?></td>
                <td><?php echo $gender1; ?></td>
                <td><?php echo $email1; ?></td>
                <td><?php echo $mobile1; ?></td>
              </tr>
            <?php }?>
          </tbody>
        </table>
      </div>

      <?php }} ?>
</body>
</html>
