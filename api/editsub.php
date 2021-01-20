<?php
include_once "../base.php";
print_r($_POST);
/*因為這隻檔案只給menu用，所以不用進行5/6行*/
//$table=$_POST['table'];  
//$db=new DB($table);

foreach($_POST['id'] as $key => $id){   //先把所有ID的值跑一遍
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){   //先確認這一堆資料裡有沒有要被刪除的，有的話就去找id，比對傳來要刪除的資料是不是這一筆，如果是，就把他刪掉
        $Menu->del($id);  //直接套在menu上
    }else{       //如果($_POST['del'])是空的，表示不刪除，則轉換成更新模式，
        $row=$Menu->find($id); // 這個ROW的欄位一定會跟我們比對的攔位是一樣的
        if(!empty($_POST['text']) || !empty($_POST['href']) ){
            $row['text']=$_POST['text'][$key];    // 找這個$_POST['text']的[$key]值
            $row['href']=$_POST['href'][$key];   
            }

            $Menu->save($row);
    }

}

    if(isset($_POST['text2'])){
        foreach($_POST['text2'] as $key => $textn){
            if(!empty($textn)){   //如果是空的，就不寫入資料庫
            $add=[]; //每次都清空陣列
            $add['text']=$textn;
            $add['href']=$_POST['href2'][$key];
            $add['parent']=$_POST['parent'];
            $add['sh']=1;

            $Menu->save($add);
        }  

        }
    }


to("../backend.php?do=menu");








?>
