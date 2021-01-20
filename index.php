<?php

  include_once "base.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" ></script>
    <script src="https://kit.fontawesome.com/87c0ff4c0f.js" ></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <!-- <script src="css/src/sweetalert.js"></script>   -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js.js"></script>
    <script src="slick-1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" href="slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" href="slick-1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" href="css.css">


    
</head>
<body>
    <div class="container-fluid " id="top_point">
        <nav class=" navbar navbar-expand-md navbar-dark  justify-content-end">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuMZZ" >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div id="menuMZZ" class="justify-content-end collapse navbar-collapse" style="z-index: 99;" >
                <ul class="navbar-nav top_bg justify-content-end" >
                    <li class="nav-item" style="color: rgb(10, 31, 84);">
                    <a class="nav-link " href="#personal_bg"><i class="fas fa-user-tag pr-2"></i>Profile</a>  
                    <!-- active -->
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#history_top"><i class="fas fa-hourglass-end pr-2"></i>History</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#trait_top"><i class="fas fa-portrait pr-2"></i>Trait</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#skill_top"><i class="fas fa-hand-sparkles pr-2"></i>Skills</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#portfolio_top"><i class="fas fa-pencil-alt pr-2"></i>Portfolio</a>
                    </li>
                </ul>
            </div>
          </nav>
        </div>

        <div class="container-fluid " id="profile_top">
            <div id="personal_bg" class="d-flex flex-column align-items-center justify-content-center">
                <!-- <div class="bg_op d-flex"></div> -->
                <?php
                $rows=$Photo->all();
                foreach($rows as $row){
                ?>
                <img src="img/<?=$row['img'];?>" class="img-fluid  animate__jackInTheBox animate__animated animate__repeat-1" width="200px" id="personal_ph" >
                <?php
                }
                $rows=$Contact->all();
                foreach($rows as $row){
               ?>
                <p id="name1"><?=$row['name'];?></p>
                <p id="name_title"><?=$row['title'];?></p>
                <div class="icons mt-4">
                  <a href="<?=$row['linkedin'];?>"><i class="fab fa-2x fa-linkedin mx-2"></i></a>
                  <a href="<?=$row['git'];?>"><i class="fab fa-2x fa-line mx-2"></i></a>
                  <a href="<?=$row['line'];?>"><i class="fab fa-2x fa-github-square mx-2"></i></a>
                </div>
                <div class="personal_data">
                <p>Mobile：<?=$row['mobile'];?></p>
                <p>E-mail：<?=$row['email'];?></p>
                <p>Location：<?=$row['location'];?></p>
              </div>
            </div>
        </div>
            <?php
                }
               ?>

        <div class="container mb-5 mt-4" id="history_top"> 
          <h4 class="col-12 col-md-3 main_title">History</h4>

          <div class="d-flex justify-content-around w-100" id="history_box">
            <div class="row" style="width: 100vw;">
            <div class="history_box col-12 col-md-6 text-center " id="Education">
                <span >Education</span>

                <?php
                $rows=$Education->all();
                foreach($rows as $row){
               ?>
                <div class="small_box  mx-auto" >
                <img src="img/<?=$row['school_logo'];?>" width="260px"><br>
                <span style="font-size: 1.1rem;"><?=$row['period'];?></span><br>
              
                <img src="img/<?=$row['photo_1'];?>" width="80px" style="margin: 20px 0 10px  0;"><br>
                <span><?=$row['dep'];?></span><br>
                <span><?=$row['degree'];?></span>
                <span><?=$row['status'];?></span>
                <?php
                }
               ?>
                </div>
              </div>

            <div class="history_box col-12 col-md-6 text-center " id="Employment">
                <span >Employment</span>

                <?php
                $rows=$Work->all();
                foreach($rows as $row){
               ?>
                <div class="small_box2 mx-auto" style="background-color: rgb(208 255 224);">
                <h6 class="m-2" style="text-align: center; color: rgb(87 156 17);"><?=$row['company'];?>&nbsp;&nbsp;<?=$row['startYear'];?>/<?=$row['startMonth'];?> - <?=$row['endYear'];?>/<?=$row['endMonth'];?><br><?=$row['position'];?></h6>
                </div>
               <?php
                }
               ?>
            </div>
            </div>
            </div>
            </div>
            






        
        <div class="container-fluid trait_bg" id="trait_top">
            <h4 class="col-12 col-md-3 main_title" >Trait</h4>
            <div class="container">
            <div  class="d-flex justify-content-center align-items-center my-2">
            <div class="row text-center" >
            <?php
                $rows=$Trait->all();
                foreach($rows as $row){
               ?>
        <figure class="figure col  m-1 p-0 w-100"  >
            <img src="<?=$row['tbox_link'];?>" class="figure-img img-fluid rounded"  >
            <div class="intro_1 mx-auto" >
                <p class="w-100 text-nowrap" ><?=$row['tbox_descri'];?></p>
            </div>
          </figure>
          <?php
                }
               ?>
        </div>
        </div>


        <div class="container mt-5 d-flex justify-content-center align-items-center">
            <ul class="list-unstyled ">
            <?php
                $rows=$Trait->all();
                foreach($rows as $row){
               ?>
                <li class="media my-2">
                  <img src="<?=$row['tbox_link'];?>" class="mr-3" width="100px" >
                  <div class="media-body">
                    <h5 class="mt-0 mb-1"><?=$row['tbox_descri'];?></h5>
                    <p><?=$row['tbox_intro'];?></p>
                  </div>
                </li>
                <?php
                }
               ?>
              </ul>
        </div>
      </div>
    </div>

        <div class="container mt-4 text-center" id="skill_top">
          <h4 class="col-12 col-md-3 main_title" >SKILLS</h4>
          <div class="row d-flex col-12">

            <div class="col-6 col-md-3 skill_title mx-auto ">
              <i class="fas fa-5x fa-window-maximize d-block mb-3" ></i>
                    <span class="text-nowrap">Front-End</span>
                    
                    <ul class="list-group  list-group-flush mt-2 mb-3" >
                <?php
                $rows=$Skill->all(['box_num'=>1]);
                foreach($rows as $row){
               ?> 
                       <li class="list-group-item"><?=$row['skill_name'];?></li>
                       <?php
                }
                ?>
                </ul>
                </div>
                <div class="col-6 col-md-3 skill_title mx-auto">
                  <i class="fas fa-5x fa-database d-block mb-3" ></i>
                    <span class="text-nowrap ">Back-End</span>
                    <ul class="list-group  list-group-flush mt-2 mb-3">
                    <?php
                          $rows=$Skill->all(['box_num'=>2]);
                          foreach($rows as $row){
                        ?> 
                       <li class="list-group-item"><?=$row['skill_name'];?></li>
                      <?php
                }
               ?>
                      </ul>
                </div>
                <div class="col-6 col-md-3 skill_title mx-auto ">
                  <i class="fas fa-5x fa-photo-video d-block mb-3" ></i>
                   <span class="text-nowrap">Graphic & Video</span>
                    <ul class="list-group  list-group-flush mt-2 mb-3">
                    <?php
                          $rows=$Skill->all(['box_num'=>3]);
                          foreach($rows as $row){
                        ?> 
                       <li class="list-group-item"><?=$row['skill_name'];?></li>
                      <?php
                }
               ?>
                      </ul>
                </div>
                <div class="col-6 col-md-3 skill_title mx-auto">
                  <i class="fas fa-5x fa-mail-bulk d-block mb-3" ></i>
                    <span class="text-nowrap">Office System</span>
                    <ul class="list-group  list-group-flush mt-2 mb-3">
                    <?php
                          $rows=$Skill->all(['box_num'=>4]);
                          foreach($rows as $row){
                        ?> 
                       <li class="list-group-item"><?=$row['skill_name'];?></li>
                      <?php
                }
               ?>
                      </ul>
                </div>
            </div>
        </div>










    <div class="container-fluid trait_bg" id="portfolio_top"> 
        <h4 class="col-12 col-md-3 main_title"  >Portfolio</h4>


    <div class="container  "> 
        <div class="text-center d-flex justify-content-center align-items-center f_slick">

        <?php
            $rows=$Portfolio->all();
            // print_r($rows);
            foreach($rows as $row){
          ?> 
            <div class="card mx-auto portfolio_card" >
                <img src="img/<?=$row['img'];?>" class="card-img-top card_ph" >
                <div class="card-body" >
                  <h5 class="card-title"><a href="<?=$row['link'];?>" target="_blank"><?=$row['name'];?></a></h5>
                </div>
              </div>
              <?php
                }
               ?>

            </div>
        </div>
    </div>
  </div>




    <footer>
      <div class="text-center d-flex flex-column justify-content-center align-items-center" id="footer">
        <a href="#top_point" class="btn btn-info position-fixed">
          <i class="fas  fa-2x fa-sort-amount-up animate__animated  animate__rubberBand animate__infinite"></i>
        </a>
        <span >｜&copy;Designed by 林家嬿 VITA LIN｜</span>
        <small><a href="login.php"> ｜後台管理系統｜</a></small>
      </div>
    </footer>


    

<script>

$('.f_slick').slick({
  
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 4,
  dots: true,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint:768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }

  ]
});
		

</script>




</body>
</html>