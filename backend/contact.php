<style>

    .tr_color{
        height: 40px;
        background: #e1b4b869;
    }

</style>
<div style="width:99%; height:87%; margin:auto; overflow:auto;">
    <p class="t cent "><?=$tstr[$do];?></p>
    <form method="post" action="./api/edit.php">
        <table width="80%" style="text-align:center; margin:auto">
        <thead>
            <tr style="background:#e1b4b8 ;">
                <td style="width:25%">欄位名稱</td>
                <td style="width:65%">資料內容</td>
            </tr>
        </thead>
            <tbody>
            <?php
                $rows=$Contact->all();
                foreach($rows as $row){
                ?>
                <tr class="tr_color" >
                    <td>姓名</td>

                    <td ><input type="text" name="name[]" value="<?=$row['name'];?>" style="width:95%"></td>
                </tr>

                <tr class="tr_color">
                    <td>職稱</td>
                    <td ><input type="text" name="title[]" value="<?=$row['title'];?>" style="width:95%"></td>
    
                </tr>
                <tr class="tr_color">
                    <td>Linkedin</td>
                    <td ><input type="text" name="linkedin[]" value="<?=$row['linkedin'];?>" style="width:95%"></td>
                </tr>
                <tr class="tr_color">
                    <td>Github</td>
                    <td ><input type="text" name="git[]" value="<?=$row['git'];?>" style="width:95%"></td>
                </tr>
                <tr class="tr_color">
                    <td>Line</td>
                    <td ><input type="text" name="line[]" value="<?=$row['line'];?>" style="width:95%"></td>
                </tr>
                <tr class="tr_color">
                    <td>行動電話</td>
                    <td ><input type="text" name="mobile[]" value="<?=$row['mobile'];?>" style="width:95%"></td>
                </tr>
                <tr class="tr_color">
                    <td>電子信箱</td>
                    <td ><input type="text" name="email[]" value="<?=$row['email'];?>" style="width:95%"></td>
                </tr>
                <tr class="tr_color">
                    <td>所在地</td>
                    <td ><input type="text" name="location[]" value="<?=$row['location'];?>" style="width:95%">
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                    </td>
                </tr>
            <?php
                    
                }
            ?>

            </tbody>
        </table>
        <div class="cent" style="margin-top: 20px;">
        <input type="submit" value="修改">&nbsp;&nbsp;&nbsp;<input type="reset" value="重置">
        <input type="hidden" name="table" value="<?=$do;?>">
        </div>

    </form>
</div>