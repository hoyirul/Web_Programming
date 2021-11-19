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

    $query = "insert into student(name, address) values('Kevin', 'Malang'),('Stephanie', 'Surabaya'), ('Sammy', 'Jakarta')";
    if(mysqli_query($connect, $query)){
        echo "Data baru berhasil ditambahkan";
    }else{
        echo "Data gagal ditambahkan <br>". mysqli_error($connect);
    }

    mysqli_close($connect);