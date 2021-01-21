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
    <p class="t cent"><?=$tstr[$do];?></p>
    <form method="post" action="./api/edit.php">
        <table width="100%" style="text-align:center">
            <tbody>
                <tr class="yel">
                    <td width="15%">意象圖片</td>
                    <td width="15%">意象簡述</td>
                    <td width="30%">經歷介紹</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <!-- <td>操作</td> -->
                </tr>
                <?php
                $rows=$Trait->all();

                foreach($rows as $row){
                ?>
                <tr>
                    <td class="cent"><img src="<?=$row['img'];?>" style="width:100px;height:75px"></td>
                    <td ><input type="text" name="text[]" value="<?=$row['tbox_descri'];?>" style="width:95%"></td>
                    <td ><input type="text" name="intro[]" value="<?=$row['tbox_intro'];?>" style="width:95%"></td>
                    <td><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>></td>
                    <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
                    <!-- <td><input type="button" value="更新圖片" onclick="op('.modal_box','.insertZone','./modal/trait.php?table=<?=$do;?>&id=<?=$row['id'];?>')"></td> -->
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <div class="cent" style="margin-top: 20px;">
        <input type="submit" value="顯示/刪除修改">　<input type="reset" value="重置">
        <input type="hidden" name="table" value="<?=$do;?>">
        </div>

    </form>

    <div class="mx-auto mt-5">

            <h3 style="color:#c21b1b;">新增意象</h3>

            <form action="./api/add.php" method="post">
            <table class="mx-auto">
            <tr>
                    <td width="15%">意象圖片</td>
                    <td width="15%">意象簡述</td>
                    <td width="30%">經歷介紹</td>
            </tr>
            <tr>
                <td ><input type="text" name="img" style="width:95%"></td>
                <td ><input type="text" name="tbox_descri" style="width:95%"></td>
                <td ><input type="text" name="tbox_intro" style="width:95%"></td>

            </tr>
                <td colspan="7" style="height:80px" >
                    <input type="hidden" name="table" value="<?=$do;?>">
                    <input type="submit" value="新增">
                    <input type="reset" value="重置">
                </td>

            </tr>
            </table>
            </form>
    </div>



</div>