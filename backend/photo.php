
<div style="width:99%; height:87%; margin:auto; overflow:auto; ">
    <p class="t cent botli"><?=$tstr[$do];?></p>
    <form method="post" action="./api/edit.php">
        <table width="100%" style="text-align:center">
            <tbody>
                <tr style="">
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
                    <td width="45%"><img src="./img/<?=$row['img'];?>" style="width:200px;height:200px; border-radius:50%;"></td>
                    <td width="7%"><input type="radio" name="sh" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>></td>
                    <td width="7%"><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
                    <td width="23%"><input type="text" name="time[]" value="<?=$row['time'];?>" disabled></td>
                    <td><input type="button" value="更新圖片" onclick="op('#cover','#cvr','./modal/upload.php?table=<?=$do;?>&id=<?=$row['id'];?>')"></td>
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
            <input type="button" onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>';)" value="<?=$addstr[$do];?>">
        </div>
    
    </form>
</div>