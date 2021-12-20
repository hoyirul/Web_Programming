<?php

    include './myconnection.php';

    $id = $_GET['id'];

    $query = "delete from student where id='$id'";
    if(mysqli_query($connect, $query)){
        header("location:index.php");
    }else{
        echo "data gagal di hapus <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
