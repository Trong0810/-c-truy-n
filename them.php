<?php
require 'connect.php';
if(isset($_POST['signup_Btn'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    if(!empty($name) && !empty($username) && !empty($password) &&
     !empty($dob) && !empty($email)){
        echo "<pre>";

        $sql = "INSERT INTO `usernguoi` (`name`,`username`,`email`,
        `dob`,`password`) VALUE('$name','$username','$email',
        '$dob','$password')";

        if($conn->query($sql)===TRUE){
          
          header('Location:login.php');
          echo "<script>
              alert('Nhap day du di');
          </script>";
        }
    } else {
      echo "<script>
              alert('Nhap day du di');
          </script>";
    }
  }
?>