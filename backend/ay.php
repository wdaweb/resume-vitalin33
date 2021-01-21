
<div style="width:99%; height:87%; margin:auto; overflow:auto; ">
    <p class="t cent botli"><?=$tstr[$do];?></p>
    <form method="post" action="./api/edit.php">
        <table width="100%" style="text-align:center">
            <tbody>
                <tr class="yel">
                 
                    <td width="80%">經歷介紹</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                </tr>
                <?php
                $rows=$Ay->all();

                foreach($rows as $row){
                ?>
                <tr>
                    <td ><input type="text" name="text[]" value="<?=$row['text'];?>" style="width:95%"></td>
                    <td><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>></td>
                    <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <div class="cent" style="margin-top: 20px;">
        <input type="submit" value="顯示/刪除"><input type="reset" value="重置">
        <input type="hidden" name="table" value="<?=$do;?>">
        </div>

    </form>

    <div class="mx-auto mt-5">

        <h3 style="color:#c21b1b;">新增自傳</h3>

        <form action="./api/add.php" method="post">
        <table class="mx-auto">
        <tr>
            <td>經歷介紹</td>
   
        </tr>
        <tr>
            <td ><input type="text" name="text" style="width:40vw"></td>

        </tr>
            <td style="height:80px" >
                <input type="hidden" name="table" value="<?=$do;?>">
                <input type="submit" value="新增">
                <input type="reset" value="重置">
            </td>

        </tr>
        </table>
        </form>
</div>



</div>