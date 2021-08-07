<?php
	// Database connection
  $host = "localhost";
  $dbUser = "root";
  $dbPass = "";
  $dbName = "direction";
	$conn = mysqli_connect($host,$dbUser,$dbPass,$dbName);


  if (isset($_POST['dir'])){

    if($_POST['dir']=="forward"){
      $query = "INSERT INTO direction VALUES ('forward')";
      $run = mysqli_query($conn,$query) or die(mysqli_error());

      if ($run) {
        echo "Submitted successfully";
      }else {
        echo "not submitted";
      }

   }
   else if($_POST['dir']=="left"){
     $query = "INSERT INTO direction VALUES ('left')";
     $run = mysqli_query($conn,$query) or die(mysqli_error());

     if ($run) {
       echo "Submitted successfully";
     }else {
       echo "not submitted";
     }

  }else if($_POST['dir']=="stop"){
    $query = "INSERT INTO direction VALUES ('stop')";
    $run = mysqli_query($conn,$query) or die(mysqli_error());

    if ($run) {
      echo "Submitted successfully";
    }else {
      echo "not submitted";
    }

 }

    else if($_POST['dir']=="right"){
    $query = "INSERT INTO direction VALUES ('right')";
    $run = mysqli_query($conn,$query) or die(mysqli_error());

    if ($run) {
      echo "Submitted successfully";
    }else {
      echo "not submitted";
    }
  }
  else if($_POST['dir']=="back"){
  $query = "INSERT INTO direction VALUES ('back')";
  $run = mysqli_query($conn,$query) or die(mysqli_error());

  if ($run) {
    echo "Submitted successfully";
  }else {
    echo "not submitted";
  }
}
}
?>
