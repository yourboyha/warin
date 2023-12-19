<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>เพิ่มข้อมูล</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <form action="insert.php" class="form-group my-3 ">
    <div class="form-group">
      <label for="namePerson">ชื่อ - นามสกุล</label>
      <input type="text" name="namePerson" id="namePerson">
    </div>
    <div class="form-group">
      <label for="type">ประเภทบุคลากร</label><br>
      <input type="radio" name="type" id="type" value="ผู้บริหาร">ผู้บริหาร
      <input type="radio" name="type" id="type" value="ครู">ครู
      <input type="radio" name="type" id="type" value="เจ้าหน้าที่">เจ้าหน้าที่
      <input type="radio" name="type" id="type" value="นักการภารโรง/แม่บ้าน">นักการภารโรง/แม่บ้าน
    </div>
    <div class="form-group">
      <label for="age">อายุ</label>
      <input type="number" name="age" id="age">
    </div>
    <div class="form-group">
      <label for="tel">เบอร์โทร</label>
      <input type="tel" name="tel" id="tel">
    </div>
    <input type="submit" value="เพิ่มข้อมูล" class="btn btn-success">

  </form>
</body>

</html>