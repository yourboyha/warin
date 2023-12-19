<?php
  include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ข้อมูลบุคลากรวิทยาลัยการอาชีพวารินชำราบ</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <a href="form.php" class="btn btn-primary my-2">เพิ่มข้อมูล</a>
  <table class="table my-3">
    <thead>
      <th>รหัสบุคลากร</th>
      <th>ชื่อ-นามสกุล</th>
      <th>ประเภทบุคลากร</th>
      <th>อายุ</th>
      <th>เบอร์โทรศัพท์</th>
    </thead>
    <?php
      $sql = "SELECT * FROM personal_tb";
      $result = mysqli_query($conn,$sql);
      
      while($row = mysqli_fetch_assoc($result)){
        echo "
          <tr>
            <td>".$row['id']."</td>
            <td>".$row['name']."</td>
            <td>".$row['type']."</td>
            <td>".$row['age']."</td>
            <td>".$row['tel']."</td>
          </tr>
          ";
      }
    ?>
  </table>
</body>
</html>