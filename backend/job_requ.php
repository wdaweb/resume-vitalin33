<style>

    .tr_color{
        height: 40px;
        background: #e1b4b869;
    }

</style>
<div style="width:99%; height:87%; margin:auto; overflow:auto;">
    <p class="t cent "><?=$tstr[$do];?></p>
    <form method="post" action="./api/edit.php">
        <table width="100%" style="text-align:center; margin:auto">
        <thead>
            <tr style="background:#e1b4b8 ;">
                    <td width="20%">希望職稱</td>
                    <td width="10%">職務性質</td>
                    <td width="25%">希望工作地點</td>
                    <td width="15%">希望產業</td>
                    <td width="10%">期望薪資</td>
                    <td width="5%">顯示</td>
                    <td width="5%">刪除</td>
            </tr>
        </thead>
            <tbody>
            <?php
                $rows=$Job_requ->all();
                foreach($rows as $row){
                ?>

                <tr class="tr_color">
                    <td ><input type="text" name="title[]" value="<?=$row['title'];?>" style="width:95%"></td>
                    <td ><input type="text" name="type[]" value="<?=$row['type'];?>" style="width:95%"></td>
                    <td ><input type="text" name="location[]" value="<?=$row['location'];?>" style="width:95%"></td>
                    <td ><input type="text" name="sector[]" value="<?=$row['sector'];?>" style="width:95%"></td>
                    <td ><input type="text" name="salary[]" value="<?=$row['salary'];?>" style="width:95%"></td>
                    <td><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>></td>
                    <td ><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
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


            <div class="mx-auto mt-5">

                        <h3 style="color:#c21b1b;">新增求職條件</h3>

                        <form action="./api/add.php" method="post">
                        <table class="mx-auto">
                        <tr>
                            <td width="25%">希望職稱</td>
                            <td width="15%">職務性質</td>
                            <td width="25%">希望工作地點</td>
                            <td width="15%">希望產業</td>
                            <td width="10%">期望薪資</td>
                        </tr>
                        <tr>
                            <td ><input type="text" name="title"style="width:95%"></td>
                            <td ><input type="text" name="type" style="width:95%"></td>
                            <td ><input type="text" name="location" style="width:95%"></td>
                            <td ><input type="text" name="sector" style="width:95%"></td>
                            <td ><input type="text" name="salary" style="width:95%"></td>
                            <input type="hidden" name="id[]">
                        </tr>
                            <td colspan="7" style="height:80px" >
                                <input type="hidden" name="table" value="<?=$do;?>">
                                <input type="submit" value="新增">
                                <input type="reset" value="重置">
                            </td>

                        </tr>
                        </table>
                        </form>
            </div>




</div>