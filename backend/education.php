
<div style="width:99%; height:87%; margin:auto;">
    <p class="t cent botli"><?=$tstr[$do];?></p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">

                    <td width="10%">校名</td>
                    <td width="15%">校徽</td>
                    <td width="15%">就讀期間</td>
                    <td width="15%">系別</td>
                    <td width="10%">學位</td>
                    <td width="10%">狀態</td>
                    <td width="5%">其它</td>
                    <td width="5%">顯示</td>
                    <td width="5%">刪除</td>

                </tr>
                <?php
                $rows=$Education->all();

                foreach($rows as $row){
                   
                ?>
                <tr>
                    <td ><input type="text" name="school_name[]" value="<?=$row['school_name'];?>" style="width:95%"></td>
                    <td ><input type="text" name="school_logo[]" value="<?=$row['school_logo'];?>" style="width:95%"></td>
                    <td ><input type="text" name="period[]" value="<?=$row['period'];?>" style="width:95%"></td>
                    <td ><input type="text" name="dep[]" value="<?=$row['dep'];?>" style="width:95%"></td>
                    <td ><input type="text" name="degree[]" value="<?=$row['degree'];?>" style="width:95%"></td>
                    <td ><input type="text" name="status[]" value="<?=$row['status'];?>" style="width:95%"></td>
                    <td ><input type="text" name="photo_1[]" value="<?=$row['photo_1'];?>" style="width:95%"></td>
                    <td><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>></td>
                    <td ><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                </tr>
                <?php
                        
                    }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <input type="hidden" name="table" value="<?=$do;?>">
                    <td width="200px">
                     <input type="button"
                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/<?=$do;?>.php?table=<?=$do;?>&#39;)"
                            value="<?=$addstr[$do];?>"></td>
                    <td class="cent"><input type="submit" value="修改確定"> <input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>