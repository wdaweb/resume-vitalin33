

<?php

include_once "../base.php";

$acc=$_POST['acc'];
$pwd=$_POST['pwd'];

//if($acc=='admin' && $pwd=='1234'){   //屏閉admin，作法二、直接寫死，不使用核對資料庫，
    $check=1;
//}else{
$check=$Admin->count(['acc'=>$acc,"pwd"=>$pwd]); //用count來做取資料的原因是因為即使程式被有心人士窺探，主要的帳密不會外流
//}


if($check>0){     
    $_SESSION['login']=$acc;   //2020/12/14新增，登入成功才會有
   to("../backend.php");
}else{
   to("../index.php?do=login&err=1");         //如果核對不到帳號密碼，就傳回LOGIN畫面並給予一個訊息告知有誤(err=1)
}


?>