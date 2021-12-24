<?php

    require '../config.php';

    if($_POST['confirm'] == $_POST['password']){
        $token = generateRandomString();
        // echo $token;
        $query = "update users set password=md5('$_POST[confirm]'), token=md5('$token') where token='$_POST[token]'";
        $sql = mysqli_query($conn, $query);
        // echo $query;

        if($sql){
            header('location:./../../auth/msg.php?msg=success');
        }else{
            header('location:./../../auth/reset.php?errors=errors');
        }
    }else{
        header('location:./../../auth/reset.php?match=notmatch&token='.$_POST['token']);
        // echo "Salah";
    }

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    