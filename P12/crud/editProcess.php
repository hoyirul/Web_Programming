<?php

    include './myconnection.php';

    $id = $_GET['myid'];
    $name = $_GET['myname'];
    $address = $_GET['myaddress'];

    $query = "update student set name='$name', address='$address' where id='$id'";
    if(mysqli_query($connect, $query)){
        header("location:homeCRUD.php");
    }else{
        echo "Gagal mengubah data <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
