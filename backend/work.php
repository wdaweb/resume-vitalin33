
<div style="width:99%; height:87%; margin:auto;">
    <p class="t cent botli"><?=$tstr[$do];?></p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">

                    <td width="20%">公司名稱</td>
                    <td width="5%">起始年</td>
                    <td width="5%">起始月</td>
                    <td width="5%">結束年</td>
                    <td width="5%">結束月</td>
                    <td width="10%">職稱</td>
                    <td width="20%">工作內容</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>

                </tr>
                <?php
                $rows=$Work->all();

                foreach($rows as $row){
                   
                ?>
                <tr>
                    <td ><input type="text" name="company[]" value="<?=$row['company'];?>" style="width:95%"></td>
                    <td ><input type="text" name="startYear[]" value="<?=$row['startYear'];?>" style="width:95%"></td>
                    <td ><input type="text" name="startMonth[]" value="<?=$row['startMonth'];?>" style="width:95%"></td>
                    <td ><input type="text" name="endYear[]" value="<?=$row['endYear'];?>" style="width:95%"></td>
                    <td ><input type="text" name="endMonth[]" value="<?=$row['endMonth'];?>" style="width:95%"></td>
                    <td ><input type="text" name="position[]" value="<?=$row['position'];?>" style="width:95%"></td>
                    <td ><input type="text" name="intro[]" value="<?=$row['intro'];?>" style="width:95%"></td>
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