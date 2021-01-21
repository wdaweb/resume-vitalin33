<?php
date_default_timezone_set("Asia/Taipei");
session_start();
// $tstr=[
//     'photo'=>"修改大頭貼",
//     'skill'=>"技能盒管理",
//     'trait'=>"個人特質",
//     'portfolio'=>"作品集管理",
//     'contact'=>"個人資料管理",
//     'footer'=>"頁尾版權文字管理",
//     'news'=>"最新管理",
//     'admin'=>"帳號密碼管理",
//     'menu'=>"選單管理",
//     'work'=>"工作經歷管理",
//     'education'=>"學歷管理",
//     'ay'=>"自傳管理",
//     'job_requ'=>"求職條件",
// ];
$addstr=[
    'photo'=>"首次上傳",
    'skill'=>"新增技能圖片",
    'trait'=>"新增意象圖片",
    'portfolio'=>"新增作品圖片",
    'contact'=>"個人資料管理",
    'footer'=>"新增頁尾版權文字",
    'news'=>"新增最新消息",
    'admin'=>"新增管理者",
    'menu'=>"新增選單",
    'work'=>"新增工作經歷",
    'education'=>"新增學歷",
    'ay'=>"新增自傳",
    'job'=>"新增求職條件",
];

$uploadimg=[
    'portfolio'=>['新增作品集','作品圖片'],
    'trait'=>['更換意象圖片','確認'],
    'photo'=>['更新頭象','網站標題圖片'],


];





class DB{

    protected $table;
    protected $dsn="mysql:host=localhost;dbname=db88;charset=utf8";
    protected $pdo;

    function __construct($table){
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,'root','');

    }

    function all(...$arg){
        $sql="select * from $this->table ";

        if(isset($arg[0])){
            if(is_array($arg[0])){
                foreach($arg[0] as $key => $value){
                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                }

                $sql .= " where ".implode(" && ",$tmp);

            }else{
                $sql .= $arg[0];
            }
        }

        if(isset($arg[1])){
            $sql .= $arg[1];
        }
        // print_r($sql);
        return $this->pdo->query($sql)->fetchAll();

    }
    function count(...$arg){
        $sql="select count(*) from $this->table ";

        if(isset($arg[0])){
            if(is_array($arg[0])){
                foreach($arg[0] as $key => $value){
                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                }

                $sql .= " where ".implode(" && ",$tmp);

            }else{
                $sql .= $arg[0];
            }
        }

        if(isset($arg[1])){
            $sql .= $arg[1];
        }

        return $this->pdo->query($sql)->fetchColumn();
    }
    function find($id){
        $sql="select * from $this->table ";

        if(is_array($id)){
            foreach($id as $key => $value){
                $tmp[]=sprintf("`%s`='%s'",$key,$value);
            }

            $sql .= " where ".implode(" && ",$tmp);

        }else{
            $sql .= " where `id`='$id'";
        }
        
    
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
    function del($id){
        $sql="delete from $this->table ";

        if(is_array($id)){
            foreach($id as $key => $value){
                $tmp[]=sprintf("`%s`='%s'",$key,$value);
            }

            $sql .= " where ".implode(" && ",$tmp);

        }else{
            $sql .= " where `id`='$id'";
        }
        

        return $this->pdo->exec($sql);
    }
    function save($arr){
        if(isset($arr['id'])){
            //update
            foreach($arr as $key => $value){
                $tmp[]=sprintf("`%s`='%s'",$key,$value);
            }

            $sql="update $this->table set ".implode(',',$tmp)." where `id`='{$arr['id']}'";
        }else{
            //insert

            $sql="insert into $this->table (`".implode("`,`",array_keys($arr))."`) values('".implode("','",$arr)."')";
        }
        //echo $sql;
        return $this->pdo->exec($sql);
    }
    function q($sql){
        return $this->pdo->query($sql)->fetchAll();
    }

    
}

function to($url){
        header("location:".$url);
}


$Photo=new DB("photo");
$Skill=new DB("skill");
$Footer=new DB("footer");
$Trait=new DB("trait");
$Education=new DB("education");
$Contact=new DB("contact");
$Bottom=new DB("bottom");
$Work=new DB("work");
$Admin=new DB("admin");
$Menu=new DB("menu");
$Portfolio=new DB("portfolio");
$Ay=new DB("ay");
$Job_requ=new DB("job_requ");


// if(empty($_SESSION['total'])){
//     $total=$Total->find(1);
//     $total['total']++;
//     $Total->save($total);
//     $_SESSION['total']=$total['total'];
// }

?>