<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI measure</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" ></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <style>
        body{
            background-image:url("https://images.unsplash.com/photo-1447452001602-7090c7ab2db3?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80");
            background-repeat:no-repeat;
            background-size:cover;

        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="d-flex justify-content-center ">
            <div class="mt-5 bg-light" style="border:3px dotted black;width:400px; height:300px">
            <H1 class=" text-center mt-3 ">BMI測量</H1>
            <form action="?" method="post">
            <div class="mt-4 text-center">身高：<input type="text" name="height"></div> 
            <br>
            <div class="m-2 mb-5 text-center">體重：<input type="text" name="weight"></div>
            <div class="text-center"><input class="btn btn-primary"type="submit" value="送出"></div>
            </form>
            </div>
        </div>

    <?php

        if(!empty($_POST['height']) && !empty($_POST['weight'])){

            if($_POST['height']<=0 || $_POST['weight']<=0){
               
                echo "<script>alert('身高或體重不得為零以下數字')</script>";

            }else{   
                $height=$_POST['height'];
                $weight=$_POST['weight'];
                $judgement=round($weight/(($height/100)*($height/100)),2);


                if($judgement<18.5 && $judgement>=0){
                    $result="體重過輕";
                }else if($judgement>=18.5 && $judgement<=24){
                    $result="健康體位";       
        
                }else if($judgement>24 && $judgement<=27){
                     $result="過重";
                }else if($judgement>=27 && $judgement<=30){
                     $result="輕度肥胖";
                }else if($judgement>=30 && $judgement<=35){
                     $result="中度肥胖";
                }else if($judgement>35){
                     $result="重度肥胖";
                }else{
                     $result="請輸入正確數值";
                }

        ?>

        <div>
            <div class="d-flex justify-content-center ">
              <div class="mt-5 bg-light" style="border:3px dotted black;width:400px; height:300px">
               <H1 class=" text-center mt-3" style="font-weight:800">測量結果</H1>
              <div class="mt-4 text-center">您的身高：<?=$_POST['height'];?></div> 
              <br>
              <div class="m-2 mb-4 text-center">您的體重：<?=$_POST['weight'];?></div>
              <div class="m-2 mb-4 text-center">您的BMI：<?=$judgement;?></div>
        <?php
            if($judgement<18.5 || $judgement>24){
                echo "<p class='text-center' style='color:red;font-size:1.6rem;font-weight:800'>$result</p>";
            }else{
                echo "<p class='text-center' style='color:blue;font-size:1.6rem;font-weight:800'>$result</p>";
            } 
        ?>
            </div>
            <div class="mt-5 bg-secondary" style="border:3px dotted black;width:400px; height:300px">
        <?php
            if($judgement<18.5){
                echo "<div class='text-center my-3'><img height='250px' src='img/del.png'></div>";

            }else if($judgement>24){
                echo "<div class='text-center my-3'><img height='250px' src='img/cor.png'></div>";
            }else{
                echo "<div class='text-center my-3'><img height='250px' src='img/nor_p.png'></div>";
            }
        ?>
            </div>
            </div>
        </div>
        <?php
        }
        }

        ?>




</div>



</body>
</html>
