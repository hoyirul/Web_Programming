<?php 

    include './myconnection.php';

    $name = $_GET['myname'];
    $address = $_GET['myaddress'];

    $query = "insert into student(name, address) values('$name', '$address')";
    if(mysqli_query($connect, $query)){
        header('location:index.php');
    }else{
        echo "Data baru gagal ditambahkan <br>". mysqli_error($connect);
    }

    mysqli_close($connect);