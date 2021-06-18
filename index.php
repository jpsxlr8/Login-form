<?php
 if(isset($_POST['name'])){
  $submit ="true";
  $server ="localhost";
  $username = "root";
  $password = "";

  $con = mysqli_connect($server,$username,$password);
  if(!$con){
      die("connection to this database failed due to" .mysqli_connect_error());
  }
  echo "Success connecting to the db";
  $name = $_POST['name'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $sql = "INSERT INTO `trip` ( `name`, `age`, `gender`, `email`) VALUES ( 'textname', '20', 'male', 'this@this.com');";
   if($con->query($sql) == true){
       echo "Successfully inserted";
   }
   else{
       echo "ERROR": $sql <br> $con->error";
   }



?>