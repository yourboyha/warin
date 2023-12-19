<?php
  $hostname = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'warin_db';

  $conn = mysqli_connect($hostname,$username,$password,$database);

  if(!$conn){
    echo"เชื่อมต่อไม่สำเร็จ";
  }
?>