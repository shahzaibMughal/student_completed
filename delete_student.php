<?php
  $conn=mysqli_connect("localhost","root","","ss");

  $u_id = isset($_GET['u_id'])? $_GET['u_id'] : NULL;
  // exit("$u_id");
  if(!isset($u_id)){
    header('Location: view_students.php');
    exit;
  }

  if($_SERVER["REQUEST_METHOD"]== "POST"){
    // exit("post request");
    if(isset($_POST['delete']))
    {
      // exit("Delete Button Pressed");
      $query = "SELECT * FROM u_reg WHERE u_id = ".$u_id." LIMIT 1";
      $resultSet = mysqli_query($conn, $query);
      $student  = mysqli_fetch_assoc($resultSet);

      if(isset($student)){
        // perform delete
        $sql = "DELETE FROM u_reg WHERE u_id='". $u_id ."' LIMIT 1";
        if(mysqli_query($conn, $sql)){
          header('Location: view_students.php');
        }else{
          exit("Failed to delete item");
        }
      }
      else {
        // exit("Note is NULLLL");
        exit("Item you are trying to delete, not exist");
      }
    }else {
      // exit("Cancel Button Pressed");
      header('Location: view_students.php');
    }
  }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete Student</title>
    <!-- <link rel="stylesheet" href="styles/delete_note.css"> -->
  </head>
  <body>
    <div class="content">
      <form action="<?php echo $_SERVER['SCRIPT_NAME']."?u_id=".$_GET['u_id']; ?>" method="post">
        <h1>Are You Sure?</h1>
        <input type="submit" name="cancel" value="Cancel">
        <input type="submit" name="delete" value="Delete">
      </form>
    </div>

  </body>
</html>
