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
    <p><?=$tstr[$do];?></p>
    <form method="post" action="./api/edit.php">
        <table width="100%" style="text-align:center">
            <tbody>
                <tr >
                    <td width="23%">目前大頭貼</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td width="23%">最後更新日期</td>
                    <td></td>
                </tr>
                <?php
                $rows=$Photo->all();

                foreach($rows as $row){
                ?>
                <tr>
                    <td width="45%"><img src="./img/<?=$row['img'];?>" style="width:130px;height:150px; border-radius:50%;"></td>
                    <td width="7%"><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>></td>
                    <td width="7%"><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
                    <td width="23%"><input type="text" name="time[]" value="<?=$row['time'];?>" disabled></td>
                    <td><input type="button" value="更新圖片" onclick="op('.modal_box','.insertZone','./modal/upload.php?table=<?=$do;?>&id=<?=$row['id'];?>')"></td>
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <div class="cent" style="margin-top: 20px;">
        <input type="submit" value="顯示/刪除">　<input type="reset" value="重置">　
            <input type="hidden" name="table" value="<?=$do;?>">
       
        </div>
    
    </form>
    <!-- <div class="insertZone"></div> -->
                <div class="modal_box">
                <h3 style="text-align: center;">上傳圖片</h3>


                <form action="./api/add.php" method="post" enctype="multipart/form-data">
                <table style="margin: 0 auto">
                    <tr>
                        <td><span>選一張喜歡的頭像</span></td>

                    </tr>
                    <tr>
                        <td><input type="file" name="img" id=""></td>
                    </tr>

                </table>

                    <div style="margin-top:20px">
                        <input type="hidden" name="table" value="photo">
                            <input type="submit" value="新增">
                            <input type="reset" value="取消">
                            </div>

                </form>
                </div>



</div>


</div>
<script>

</script>
