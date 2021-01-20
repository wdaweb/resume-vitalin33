
<div style="width:99%; height:87%; margin:auto; overflow:auto; ">
    <p class="t cent botli"><?=$tstr[$do];?></p>
    <form method="post" action="./api/edit.php">
        <table width="100%" style="text-align:center">
            <tbody>
                <tr class="yel">

                    <!-- <td width="15%">技能圖片</td> -->
                    <td width="30%">技能大項</td>
                    <td width="30%">技能名稱</td>
                    <td width="10%">盒號</td>
                    <td width="10%">順序</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>

                </tr>
                <?php
                $rows=$Skill->all();

                foreach($rows as $row){
                ?>
                <tr>
                    <!-- <td width="45%"><img src="./img/<?=$row['img'];?>" style="width:50px;height:50px; "></td> -->
                    <td ><input type="text" name="skill_type[]" value="<?=$row['skill_type'];?>" style="width:95%"></td>
                    <td ><input type="text" name="skill_name[]" value="<?=$row['skill_name'];?>" style="width:95%"></td>
                    <td ><input type="text" name="box_num[]" value="<?=$row['box_num'];?>" style="width:95%"></td>
                    <td ><input type="text" name="rank[]" value="<?=$row['rank'];?>" style="width:95%"></td>
                    <td ><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>></td>
                    <td ><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <div class="cent" style="margin-top: 20px;">
            <input type="submit" value="顯示/刪除修改"> <input type="reset" value="重置">
            <input type="hidden" name="table" value="<?=$do;?>">
        </div>
    

    </form>
</div>