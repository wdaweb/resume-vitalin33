<style>
    .modal_box{
        margin:10px auto;
        width: 500px;
        height: 300px;
        background-color: #f9fffd;
        padding: 50px 0 0 0;
        text-align: center;
        border-radius:20px;
        color:black;
        border:2px solid black;

    }

    td>span{

        background: #f0f194d4;
        border-radius: 20px;
        display: block;
        padding: 5px;
        margin-bottom: 20px;
    }

    .insertZone{
        position: fixed;
        background-color: rgba(0, 0, 139, 0.37);
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
    }
    
    .insertZone>form{
        width: 50%;
        text-align: center;
    
    }

</style>
<div style="width:99%; height:87%; margin:auto;">
    <p class="t cent"><?=$tstr[$do];?></p>
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
                    <td class="cent"><input type="submit" value="顯示/刪除"> <input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>


    <div class="mx-auto mt-5">

        <h3 style="color:#c21b1b;">新增工作經歷</h3>

        <form action="./api/add.php" method="post">
        <table class="mx-auto">
        <tr>
            <td width="20%">公司名稱</td>
            <td width="5%">起始年</td>
            <td width="5%">起始月</td>
            <td width="5%">結束年</td>
            <td width="5%">結束月</td>
            <td width="10%">職稱</td>
            <td width="20%">工作內容</td>
        </tr>
        <tr>
            <td ><input type="text" name="company" style="width:95%"></td>
            <td ><input type="text" name="startYear" style="width:95%"></td>
            <td ><input type="text" name="startMonth" style="width:95%"></td>
            <td ><input type="text" name="endYear" style="width:95%"></td>
            <td ><input type="text" name="endMonth" style="width:95%"></td>
            <td ><input type="text" name="position" style="width:95%"></td>
            <td ><input type="text" name="intro" style="width:95%"></td>
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