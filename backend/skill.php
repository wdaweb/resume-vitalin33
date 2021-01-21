<style>
    .modal_box{
        margin:10px auto;
        width: 500px;
        height: 300px;
        background-color: #f9fffd;
        padding: 50px 0 0 0;
        text-align: center;
        border-radius:20px;
        color:black;
        border:2px solid black;

    }

    td>span{

        background: #f0f194d4;
        border-radius: 20px;
        display: block;
        padding: 5px;
        margin-bottom: 20px;
    }

    .insertZone{
        position: fixed;
        background-color: rgba(0, 0, 139, 0.37);
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
    }
    
    .insertZone>form{
        width: 50%;
        text-align: center;
    
    }

</style>

<div class="insertZone" style="display:none;"></div>
<div style="width:99%; height:87%; margin:auto; overflow:auto; ">
    <p class="t cent "><?=$tstr[$do];?></p>
    <form method="post" action="./api/edit.php">
        <table width="100%" style="text-align:center">
            <tbody>
                <tr class="yel">

                   
                    <td width="30%">技能大項</td>
                    <td width="30%">技能名稱</td>
                    <td width="10%">盒號</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>

                </tr>
         

<?php
                $all=$Skill->count();
                $div=5;
                $pages=ceil($all/$div);
                $now=(isset($_GET['p']))?$_GET['p']:1;
                //$now=(isset($_GET['p']))??1;
                $start=($now-1)*$div;
            

                $rows=$Skill->all(" limit $start,$div");

                foreach($rows as $row){
                ?>
                        <tr>
                    
                    <td ><input type="text" name="skill_type[]" value="<?=$row['skill_type'];?>" style="width:95%"></td>
                    <td ><input type="text" name="skill_name[]" value="<?=$row['skill_name'];?>" style="width:95%"></td>
                    <td ><input type="text" name="box_num[]" value="<?=$row['box_num'];?>" style="width:95%"></td>
                    <td ><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>></td>
                    <td ><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <div class="cent">
        <?php

            if(($now-1)>0){
        ?>
            <a class="bl" style="font-size:30px;" href="?do=skill&p=<?=$now-1;?>">&lt;&nbsp;</a>
        <?php
        }
        ?>
                <?php
                    for($i=1;$i<=$pages;$i++){

                        if($i==$now){
                            $font="22px";
                        }else{
                            $font="20px";
                        }

                            echo "<a href='?do=skill&p=$i' style='font-size:$font;text-decoration:none'> ";
                            echo $i;
                            echo " </a>";
                    }
                ?>
        <?php
        if($now+1<=$pages){
        ?>
            <a class="bl" style="font-size:30px;" href="?do=skill&p=<?=$now+1;?>">&nbsp;&gt;</a>
        <?php
        }
        ?>  

        </div>


        <div class="cent" style="margin-top: 20px;">
        <input type="hidden" name="table" value="<?=$do;?>">
        <td><input type="button" value="新增技能" onclick="op('.modal_box','.insertZone','./modal/skill.php?table=<?=$do;?>&id=<?=$row['id'];?>')"></td>
            <input type="submit" value="顯示/刪除/修改"> <input type="reset" value="重置">
            <input type="hidden" name="table" value="<?=$do;?>">
        </div>
    

    </form>
</div>