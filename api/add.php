<?php
include_once "../base.php";
// print_r($_POST);
$table=$_POST['table'];   //把POST代入
$db=new DB($table);

$data=[];  
if(!empty($_FILES['img']['tmp_name'])){  
    move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$_FILES['img']['name']);
    $data['img']=$_FILES['img']['name'];  
}

if(!empty($_POST['text'])){    //判斷有沒有內容這件事，沒有就不用執行

    $data['text']=$_POST['text'];   //這邊一次只能新增一筆
}


    switch($table){ 

        case "admin": 
            if($_POST['pwd'] == $_POST['pwd2']) {
            $data['acc']=$_POST['acc'];
            $data['pwd']=$_POST['pwd'];
        }

        break;

        case "education":   
            $data['school_name']=$_POST['school_name'];
            $data['period']=$_POST['period'];
            $data['dep']=$_POST['dep'];
            $data['degree']=$_POST['degree'];
            $data['status']=$_POST['status'];
            $data['sh']=1;
        break;
        
        case "contact":   
            $data['name']=$_POST['name'];
            $data['title']=$_POST['title'];
            $data['email']=$_POST['email'];
            $data['location']=$_POST['location'];
            $data['linkedin']=$_POST['linkedin'];
            $data['line']=$_POST['line'];
            $data['git']=$_POST['git'];
            $data['sh']=1;
        break;    

        case "footer":   
            $data['sh']=1;
        break;    

        case "photo":   
            $data['sh']=1;
        break; 

        case "portfolio":   
            $data['name']=$_POST['name'];
            $data['link']=$_POST['link'];
            $data['type']=$_POST['type'];
            $data['sh']=1;
        break; 

        case "skill":   
            $data['skill_type']=$_POST['skill_type'];
            $data['skill_name']=$_POST['skill_name'];
            $data['box_num']=$_POST['box_num'];
            $data['sh']=1;
        break; 

        case "trait":   
        
            $data['tbox_descri']=$_POST['tbox_descri'];
            $data['tbox_intro']=$_POST['tbox_intro'];
            $data['sh']=1;
        break; 

        case "work":  
            $data['company']=$_POST['company'];
            $data['startYear']=$_POST['startYear'];
            $data['startMonth']=$_POST['startMonth'];
            $data['endYear']=$_POST['endYear'];
            $data['endMonth']=$_POST['endMonth'];
            $data['position']=$_POST['position'];
            $data['intro']=$_POST['intro'];
            $data['sh']=1;
        break; 

        case "job_requ":  
            $data['title']=$_POST['title'];
            $data['type']=$_POST['type'];
            $data['location']=$_POST['location'];
            $data['sector']=$_POST['sector'];
            $data['salary']=$_POST['salary'];
            $data['sh']=0;
        break; 

    }


$db->save($data);

to("../backend.php?do={$_POST['table']}");

?>
