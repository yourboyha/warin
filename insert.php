<?php
  include 'connect.php';
  $namePerson = $_GET['namePerson'];
  $type = $_GET['type'];
  $age = $_GET['age'];
  $tel = $_GET['tel'];

  // echo $namePerson, $type,$age,$tel;

  $sql = "INSERT INTO personal_tb(name,type,age,tel) 
  VALUES ('$namePerson','$type','$age','$tel') ";

  $result = mysqli_query($conn,$sql);

  if($result){
    header("location: index.php");
  }


?>