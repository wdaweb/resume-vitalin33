<?php
include "../base.php";

$table=$_POST['table'];  
$db=new DB($table);

foreach($_POST['id'] as $key => $id){   //先把所有ID的值跑一遍
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){   //先確認這一堆資料裡有沒有要被刪除的，有的話就去找id，比對傳來要刪除的資料是不是這一筆，如果是，就把他刪掉

        $db->del($id);

    }else{       //如果($_POST['del'])是空的，表示不刪除，則轉換成更新模式，

        $row=$db->find($id); // 這個ROW的欄位一定會跟我們比對的攔位是一樣的
        
        if(!empty($_POST['text'])){
            $row['text']=$_POST['text'][$key];    // 找這個$_POST['text']的[$key]值
            }

        switch($table){   //控管顯示跟不顯示
                case "title":
                    $row['sh']=($id==$_POST['sh'])?1:0;          // 這個選項是單選(顯示/不顯示)，如果是一樣的話會顯示，不一樣的話是hidden
                break;

                /*拿掉Break程式就會一直往下走，找不到ad就會再做下一個，一直預到break為止*/
                case "total":
                case "bottom":
                    $row[$table]=$_POST[$table];  //精簡後的寫法，原本的table位置放的值是"total" / "bottom""
                break;
        
                case "admin":
                    $row['acc']=$_POST['acc'][$key];   //因為傳回來的是一個陣列，所以要記得+key，
                    $row['pwd']=$_POST['pwd'][$key];
                break;

                case "menu";
                $row['sh']=in_array($id,$_POST['sh'])?1:0;   //因為是checkbox(複選)，使用in_array，比對$_POST['sh']跟$id是否有match 
                $row['href']=$_POST['href'][$key];
                $row['text']=$_POST['text'][$key];
        
                break;

                default:  /* "ad"/"mvim"/ "image" / "news" 因為用途都一樣，設為default減少程式行數*/

                $row['sh']=in_array($id,$_POST['sh'])?1:0;   //因為是checkbox(複選)，使用in_array，比對$_POST['sh']跟$id是否有match 
        }

        $db->save($row);

    }


}

to("../backend.php?do=$table");
?>