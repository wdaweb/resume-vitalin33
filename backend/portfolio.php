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
    <p class="t cent botli"><?=$tstr[$do];?></p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="20%">作品縮圖</td>
                    <td width="20%">作品名稱</td>
                    <td width="30%">作品連結</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $all=$Portfolio->count();
                $div=5;
                $pages=ceil($all/$div);
                $now=(isset($_GET['p']))?$_GET['p']:1;
                //$now=(isset($_GET['p']))??1;
                $start=($now-1)*$div;
            

                $rows=$Portfolio->all(" limit $start,$div");

                foreach($rows as $row){
                ?>
                <tr>
                    <td class="cent"><img src="./img/<?=$row['img'];?>" style="width:100px;height:68px"></td>
                    <td ><input type="text" name="name[]" value="<?=$row['name'];?>" style="width:95%"></td>
                    <td ><input type="text" name="link[]" value="<?=$row['link'];?>" style="width:95%"></td>
                    <td><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>></td>
                    <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
                    <td><input type="button" value="更換圖片" onclick="op('#cover','#cvr','./modal/upload.php?table=<?=$do;?>&id=<?=$row['id'];?>')"></td>
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
            <a class="bl" style="font-size:30px;" href="?do=portfolio&p=<?=$now-1;?>">&lt;&nbsp;</a>
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

                            echo "<a href='?do=portfolio&p=$i' style='font-size:$font;text-decoration:none'> ";
                            echo $i;
                            echo " </a>";
                    }
                ?>
        <?php
        if($now+1<=$pages){
        ?>
            <a class="bl" style="font-size:30px;" href="?do=portfolio&p=<?=$now+1;?>">&nbsp;&gt;</a>
        <?php
        }
        ?>  

        </div>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <input type="hidden" name="table" value="<?=$do;?>">
                    <td width="200px">
                    <td class="cent"> <input type="button" value="新增作品集" onclick="op('.modal_box','.insertZone','./modal/portfolio.php?table=<?=$do;?>&id=<?=$row['id'];?>')">　<input type="submit" value="修改確定">　<input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>



</div>