<?php
    include_once ("base.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" >
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <style>
        body{
            padding-top: 50px;
            background-image: url('https://images.unsplash.com/photo-1610513492097-13a9a4c343c6?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80');
            background-repeat: no-repeat;
            background-size: 80%;
            background-position-x: center;
        }

        div>.kun{

                box-sizing: content-box;
                width: 600px;
                height: 600px;
                border:3px dotted white;
                display: flex;
                position: absolute;
        }

        h4,p{
            color: white;
            
        }

        .container{
            box-sizing: content-box;
            width: 50%;
            height:65vh;
            background:rgb(176 88 88 / 57%);
            border-radius: 20px;
            margin-top: 50px;
        }

        div>.menu{

            width: 25%;


        }

        div>.main{

            width: 72%;
            background-color: #ffffff;
            height: 60vh;
            margin:20px 0 0 20px;
            border-radius: 10px;
            text-align: center;

        }

        .nav{
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items:center;
          
        }

        .nav>a{
            width: 200px;
            background: #6b0000;
            /* background-image: url("https://images.unsplash.com/photo-1542282753894-ecd583312137?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"); */
            background-position: center;
            background-size: 5%;
            border-radius: 20px;
            margin:6px 10px;
            font-size: 1.3rem;
            font-weight: 900;
            color: white;
        }

        .nav>a:hover{

            background: #ff4e4e;

        }

        .top_box{
            margin:auto;
            width:30%;
            height:120px;
            background: #58040491;
            border-radius:10px;
            box-shadow:5px 5px 14px #221818;
            
        }

        marquee{
            color:#ccc;
            font-size:1.2rem;
            padding:5px 0 ;
        }
    </style>
</head>
<body>
<div id="cover" style="display:none; ">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
                onclick="cl(&#39;#cover&#39;)">X</a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
        </div>
    </div>
    

        <div class="container-fluid text-center " style="position: relative;">
        <div class="top_box">
        <marquee behavior="" direction="" scrollamount="8" height="30px" width="50%">Hi~歡迎回來！</marquee>    
        <h4 >Vita</h4>
        <p>今天想做些什麼調整呢？</p>
        </div>
<!--     
            <div class="kun" style="top:0; bottom:0; left:0; right:0;"></div>
            <div class="kun" style="top:0; bottom:100px; left:0; right:30px;"></div>
            <div class="kun" style="top:-30px; bottom:0; left:100px; right:0;"></div>
            <div class="kun" style="top:80px; bottom:0; left:0px; right:50px;"></div> -->
            <div class="container" style="width: 100vw;  max-width: 1400px;">
                <div class="row" style="width: 100%;">
                    <div class="menu" width="30%">
                        <nav class="nav flex-column">
                        <a class="nav-link" href="?do=photo">大頭貼更換</a>
                        <a class="nav-link" href="?do=admin">帳號密碼管理</a>
                        <a class="nav-link" href="?do=contact">聯絡資料修改</a>
                        <a class="nav-link" href="?do=work">工作經歷修改</a>
                        <a class="nav-link" href="?do=education">學歷修改</a>
                        <a class="nav-link" href="?do=trait">個人特色編輯</a>
                        <a class="nav-link" href="?do=skill">技能盒修改</a>
                        <a class="nav-link" href="?do=portfolio">作品集編輯</a>
                        <a class="nav-link" href="?do=footer">頁尾修改</a>
                        
                    </nav>
                    </div>
                    <div class="main" width="70%">
                    <?php 
                            $do=(isset($_GET['do']))?$_GET['do']:'main';
                            $file="./backend/".$do.".php";
                            if(file_exists($file)){
                                include $file;
                            }else{
                                include "main.php";
                            }

                            
                    ?>

                    </div>
                    </div>
            </div>
        </div>

</body>
</html>