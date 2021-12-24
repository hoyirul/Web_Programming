<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Data Mahasiswa</h1>
  <a href="insertForm.html"><button>Tambah Data</button></a> <br><br>
  <table>
    <tr>
      <th>id</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Aksi</th>
    </tr>
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
          <a href="editForm.php?id=<?php echo $row['id']; ?>"><button>Edit</button></a>
          <a href="delete.php?id=<?php echo $row['id']; ?>"><button>Hapus</button></a>
        </td>
      </tr>
      <?php
        }
      }else{
        echo "0 results";
      }
    ?>
  </table>
</body>
</html>