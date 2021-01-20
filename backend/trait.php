
<div style="width:99%; height:87%; margin:auto; overflow:auto; ">
    <p class="t cent botli"><?=$tstr[$do];?></p>
    <form method="post" action="./api/edit.php">
        <table width="100%" style="text-align:center">
            <tbody>
                <tr class="yel">
                    <td width="15%">意象圖片</td>
                    <td width="15%">意象簡述</td>
                    <td width="30%">經歷介紹</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td>操作</td>
                </tr>
                <?php
                $rows=$Trait->all();

                foreach($rows as $row){
                ?>
                <tr>
                    <td class="cent"><img src="<?=$row['tbox_link'];?>" style="width:100px;height:75px"></td>
                    <td ><input type="text" name="text[]" value="<?=$row['tbox_descri'];?>" style="width:95%"></td>
                    <td ><input type="text" name="intro[]" value="<?=$row['tbox_intro'];?>" style="width:95%"></td>
                    <td><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>></td>
                    <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
                    <td><input type="button" value="更換意象圖片" onclick="op('#cover','#cvr','./modal/upload.php?table=<?=$do;?>&id=<?=$row['id'];?>')"></td>
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <div class="cent" style="margin-top: 20px;">
        <input type="button"
                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;../modal/<?=$do;?>.php?table=<?=$do;?>&#39;)"
                            value="<?=$addstr[$do];?>">
        <input type="submit" value="顯示/刪除修改"><input type="reset" value="重置">
        <input type="hidden" name="table" value="<?=$do;?>">
        </div>

    </form>
</div>