<style>

    .tr_color{
        height: 40px;
        background: #e1b4b869;
    }

</style>
<div style="width:99%; height:87%; margin:auto; overflow:auto;">
    <p class="t cent botli"><?=$tstr[$do];?></p>
    <form method="post" action="./api/edit.php">
        <table width="80%" style="text-align:center; margin:auto">
        <thead>
            <tr style="background:#e1b4b8 ;">
                <td style="width:25%">欄位名稱</td>
                <td style="width:65%">資料內容</td>
            </tr>
        </thead>
            <tbody>
        
                <tr class="tr_color" >
                    <td>姓名</td>
                <?php
                $rows=$Contact->all();
                foreach($rows as $row){
                ?>
                    <td ><input type="text" name="name[]" value="<?=$row['name'];?>" style="width:95%"></td>
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                    <?php
                    }
                ?>
                </tr>

                <tr class="tr_color">
                    <td>職稱</td>
                    <?php
                        $rows=$Contact->all();
                        foreach($rows as $row){
                        ?>
                    <td ><input type="text" name="title[]" value="<?=$row['title'];?>" style="width:95%"></td>
              
                    <?php
                    }
                ?>
                </tr>
                <tr class="tr_color">
                    <td>Linkedin</td>
                          <?php
                        $rows=$Contact->all();
                        foreach($rows as $row){
                        ?>
                    <td ><input type="text" name="linkedin[]" value="<?=$row['linkedin'];?>" style="width:95%"></td>
              
                    <?php
                    }
                          ?>  
                </tr>

                    <tr class="tr_color">
                    <td>Github</td>
                          <?php
                        $rows=$Contact->all();
                        foreach($rows as $row){
                        ?>
                    <td ><input type="text" name="git[]" value="<?=$row['git'];?>" style="width:95%"></td>
              
                    <?php
                    }
                ?>
                    </tr>
                    <tr class="tr_color">
                    <td>Line</td>
                          <?php
                        $rows=$Contact->all();
                        foreach($rows as $row){
                        ?>
                    <td ><input type="text" name="line[]" value="<?=$row['line'];?>" style="width:95%"></td>
              
                    <?php
                    }
                ?>
                    </tr>
                    <tr class="tr_color">
                    <td>行動電話</td>
                          <?php
                        $rows=$Contact->all();
                        foreach($rows as $row){
                        ?>
                    <td ><input type="text" name="mobile[]" value="<?=$row['mobile'];?>" style="width:95%"></td>
              
                    <?php
                    }
                ?>
                    </tr>
                    <tr class="tr_color">
                    <td>電子信箱</td>
                          <?php
                        $rows=$Contact->all();
                        foreach($rows as $row){
                        ?>
                    <td ><input type="text" name="email[]" value="<?=$row['email'];?>" style="width:95%"></td>
              
                    <?php
                    }
                ?>
                    </tr>
                    <tr class="tr_color">
                    <td>所在地</td>
                          <?php
                        $rows=$Contact->all();
                        foreach($rows as $row){
                        ?>
                    <td ><input type="text" name="location[]" value="<?=$row['location'];?>" style="width:95%"></td>
              
                    <?php
                    }
                ?>
                    </tr>

            </tbody>
        </table>
        <div class="cent" style="margin-top: 20px;">
        <input type="submit" value="修改"><input type="reset" value="重置">
        <input type="hidden" name="table" value="<?=$do;?>">
        </div>

    </form>
</div>