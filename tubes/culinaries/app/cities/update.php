<?php

    require '../config.php';

    $id = $_POST['category_id'];
    $data = [
        '$_POST[city]', date('Y-m-d H:i:s')
    ];
    
    $query = 'update cities set city="'. $data[0] .'", update_at="'. $data[1] .'" where city_id='.$id;
    $sql = mysqli_query($conn, $query);

    if($sql){
        echo "OK";
    }else{
        echo "Failed";
    }


