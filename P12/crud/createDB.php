<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";

    $connect = mysqli_connect($hostname, $username, $password);

    if($connect){
        echo "Koneksi MySQL Berhasil";
    }else{
        echo "Koneksi  MySQL gagal".mysqli_connect_error();
    }

    $query = "create database web_db";
    if(mysqli_query($connect, $query)){
        echo "Database berhasil di buat";
    }else{
        echo "Database gagal di buat". mysqli_error($connect);
    }

    mysqli_close($connect);