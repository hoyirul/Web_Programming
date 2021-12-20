<?php

    require '../config.php';

    $data = [
        '', '$_POST[city]', date('Y-m-d H:i:s'), date('Y-m-d H:i:s')
    ];
    
    $query = 'insert into cities values("'. $data .'")';
    $sql = mysqli_query($conn, $query);

    if($sql){
        echo "OK";
    }else{
        echo "Failed";
    }


