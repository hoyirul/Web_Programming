<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
</head>
<body>
  <br><br>
  <div class="container">
    <h1>Data Mahasiswa</h1>
    <hr>
    <a href="insertForm.php" class="btn btn-md btn-primary">Tambah Data</a> <br><br>
    <table id="example" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
      <?php 
        include './myconnection.php';

        $query = "select * from student";
        $result = mysqli_query($connect, $query);

        if(mysqli_num_rows($result) > 0){
          while($row = mysqli_fetch_array($result)){
        ?>

          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td>
              <a href="editForm.php?id=<?php echo $row['id']; ?>" onclick="return confirm('yakin akan mengedit?')" class="btn btn-sm btn-info">Edit</a>
              <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('yakin akan mengahpus?')" class="btn btn-sm btn-danger">Hapus</a>
            </td>
          </tr>
        <?php
          }
        }else{
          echo "0 results";
        }
        ?>
      </tbody>
    </table>

    <?php include 'footer.php'; ?>
  </div>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    } );
  </script>
</body>
</html>