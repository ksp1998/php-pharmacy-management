<?php
  require "db_connection.php";

  session_start();

  if($con) {
    $username = $_GET["uname"];
    $password = $_GET["pswd"];

    $query = "SELECT * FROM admin_credentials WHERE USERNAME = '$username' AND PASSWORD = '$password'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    if($row)  {
      $_SESSION['isAdmin'] = "true";
      echo "true";
    }
    else
      echo "false";
  }
 ?>
