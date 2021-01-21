<div style="width:99%; height:87%; margin:auto;">
    <p class="t cent "><?=$tstr[$do];?></p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">

                    <td width="45%">帳號</td>
                    <td width="45%">密碼</td>
                    <td width="10%">刪除</td>

                </tr>
                <?php
                $rows=$Admin->all();

                foreach($rows as $row){
                    if($row['acc']!='admin'){
                ?>
                <tr>
                    <td ><input type="text" name="acc[]" value="<?=$row['acc'];?>" style="width:95%"></td>
                    <td ><input type="password" name="pwd[]" value="<?=$row['pwd'];?>"></td>
                    <td ><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                </tr>
                <?php
                        }
                    }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <input type="hidden" name="table" value="<?=$do;?>">
                    <td width="200px">
            
                    <td class="cent"><input type="submit" value="修改確定"> <input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>

<hr>
                <div class="mx-auto mt-5">

                <h3>新增管理者帳號</h3>
            
            <form action="./api/add.php" method="post">
            <table class="mx-auto">
                <tr>
                    <td >帳號：</td>
                    <td><input type="text" name="acc" id=""></td>
                </tr>
                <tr>
                    <td>密碼：</td>
                    <td><input type="password" name="pwd" id=""></td>
                </tr>
                <tr>
                    <td>確認密碼：</td>
                    <td><input type="password" name="pwd2" id=""></td>
                </tr>
                <tr>
                    <td colspan="2" style="height:80px" >
                        <input type="hidden" name="table" value="<?=$do;?>">
                        <input type="submit" value="新增">
                        <input type="reset" value="重置">
                    </td>

                </tr>
            </table>
            </form>
            </div>
</div>