<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "web_db";

    $connect = mysqli_connect($hostname, $username, $password, $database);

    if($connect){
        echo "Koneksi MySQL Berhasil";
    }else{
        echo "Koneksi  MySQL gagal".mysqli_connect_error();
    }

    $query = "create table user(
                id int primary key auto_increment,
                username varchar(20) not null,
                password varchar(50) not null    
            );";
    if(mysqli_query($connect, $query)){
        echo "Tabel student berhasil di buat";
    }else{
        echo "Table student gagal di buat <br>". mysqli_error($connect);
    }

    mysqli_close($connect);