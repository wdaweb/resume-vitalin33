<?php
    include_once ("base.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css.css">
    <script src="https://kit.fontawesome.com/87c0ff4c0f.js" ></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <!-- <script src="css/src/sweetalert.js"></script>   -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="slick-1.8.1/slick/slick.min.js"></script>
    
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" ></script>
    <link rel="stylesheet" href="slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" href="slick-1.8.1/slick/slick-theme.css">

    <script src="js/js.js"></script>
    <style>

        body{
            padding-top: 50px;
            background-image: url('https://images.unsplash.com/photo-1610513492097-13a9a4c343c6?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80');
            background-repeat: no-repeat;
            background-size: 80%;
            background-position-x: center;
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
            margin-top: 10px;
        }

        div>.menu{

            width: 25%;


        }

        div>.main{

            width: 72%;
            background-color: #ffffff;
            height: 75vh;
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



        <div class="container-fluid text-center " style="position: relative;">
        <div class="top_box">
        <marquee class="d-block"behavior="" direction="" scrollamount="8" height="30px" width="50%">Hi~歡迎回來！</marquee>    
        <h4 class="d-inline">Vita</h4>  <a href="api/logout.php"><button class="btn btn-primary">登出</button></a>
        <p>今天想做些什麼調整呢？</p>       
        
        </div>

 

            <div class="container" style="width: 100vw;  max-width: 1400px; height:80vh">
                <div class="row" style="width: 100%;">
                    <div class="menu" width="30%">
                        <nav class="nav flex-column">
                        <a class="nav-link" href="?do=photo">大頭貼更換</a>
                        <a class="nav-link" href="?do=admin">帳號密碼管理</a>
                        <a class="nav-link" href="?do=contact">聯絡資料管理</a>
                        <a class="nav-link" href="?do=work">工作經歷管理</a>
                        <a class="nav-link" href="?do=education">學歷管理</a>
                        <a class="nav-link" href="?do=ay">自傳管理</a>
                        <a class="nav-link" href="?do=job_requ">求職條件管理</a>
                        <a class="nav-link" href="?do=trait">個人特色編輯</a>
                        <a class="nav-link" href="?do=skill">技能盒管理</a>
                        <a class="nav-link" href="?do=portfolio">作品集編輯</a>
                        <a class="nav-link" href="?do=footer">頁尾管理</a>
                        
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