<?php
include "../base.php";

// print_r($_POST);
$table=$_POST['table'];  
$db=new DB($table);

foreach($_POST['id'] as $key => $id){   //先把所有ID的值跑一遍
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){   //先確認這一堆資料裡有沒有要被刪除的，有的話就去找id，比對傳來要刪除的資料是不是這一筆，如果是，就把他刪掉

        $db->del($id);

    }else{       //如果($_POST['del'])是空的，表示不刪除，則轉換成更新模式，

        $row=$db->find($id); // 這個ROW的欄位一定會跟我們比對的攔位是一樣的
        // print_r($row);
        if(!empty($_POST['text'])){
            $row['text']=$_POST['text'][$key];    // 找這個$_POST['text']的[$key]值
            }

        switch($table){   
                case "title":
                    $row['sh']=($id==$_POST['sh'])?1:0;        
                break;

                case "total":
                case "bottom":
                    $row[$table]=$_POST[$table];  
                break;
        
                case "admin":
                    $row['acc']=$_POST['acc'][$key];  
                    $row['pwd']=$_POST['pwd'][$key];
                break;

                case "menu";
                $row['sh']=in_array($id,$_POST['sh'])?1:0;   
                $row['href']=$_POST['href'][$key];
                $row['text']=$_POST['text'][$key];
        
                break;
                
                case "contact";
                $row['name']=$_POST['name'][$key];
                $row['title']=$_POST['title'][$key];
                $row['email']=$_POST['email'][$key];
                $row['location']=$_POST['location'][$key];
                $row['linkedin']=$_POST['linkedin'][$key];
                $row['line']=$_POST['line'][$key];
                $row['git']=$_POST['git'][$key];

                break;

                case "trait";
                $row['tbox_descri']=$_POST['tbox_descri'][$key];
                $row['tbox_intro']=$_POST['tbox_intro'][$key];
                break;
                default:  

                $row['sh']=in_array($id,$_POST['sh'])?1:0;   
        }

        $db->save($row);

    }


}

to("../backend.php?do=$table");
?>