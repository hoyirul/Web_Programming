<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <?php
    include 'myconnection.php';

    $id = $_GET['id'];
    $query = "select * from student where id='$id'";
    $result = mysqli_query($connect, $query);
  ?>


  <br><br>
  <div class="container">
    <h1>Ubah Data Mahasiswa</h1>
    <hr>
    <form action="editProcess.php" method="get">
        <?php while($row = mysqli_fetch_array($result)): ?>
          <div class="form-group">
            <label for="">ID : </label>
            <input type="text" name="myid" readonly value="<?= $row['id'] ?>" class="form-control">
          </div>

          <div class="form-group">
            <label for="">Nama : </label>
            <input type="text" name="myname" value="<?= $row['name'] ?>" class="form-control">
          </div>

          <div class="form-group">
            <label for="">Alamat : </label>
            <textarea name="myaddress" class="form-control"><?= $row['address'] ?></textarea>
          </div>
          
          <div class="form-group">
            <button type="submit" name="send" class="btn btn-primary btn-md">Update</button>
          </div>
        <?php endwhile ?>
    </form>
    <?php include 'footer.php'; ?>
  </div>

</body>
</html>