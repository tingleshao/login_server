<?php

//creating response array
$con=mysqli_connect("localhost","root","65118669","shunzhong");

if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$response = array();

if($_SERVER['REQUEST_METHOD']=='POST'){

    //getting values
    $user_id = $_POST['user_id'];
    echo $user_id;
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    $sql = "INSERT INTO `Patients` (`Id`, `user_id`, `first_name`, `last_name`, `user_email`, `user_password`, `reg_date`) VALUES (NULL, '" . $user_id . "', '" . $first_name . "', '" . $last_name . "', '" . $user_email . "', '" . $user_password . "', CURRENT_TIMESTAMP);";
    $result = mysqli_query($con, $sql);
    echo $result;
    mysqli_close($con);
  }
?>
