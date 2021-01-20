<?php

    $acc=$_POST['acc'];
    $pwd=$_POST['pwd'];

    if($acc == "wowowow666" && $pwd == "43420024420"){
        echo "登入成功！";
        header("location:../backend.php?do=main");

    }else{

        echo "帳號密碼有誤或是您非管理員，請離開。";
        header("location:login.php");

    }



?>