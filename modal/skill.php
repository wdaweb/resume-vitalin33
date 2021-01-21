<style>
    .modal_box{
        margin:10px auto;
        width: 500px;
        height: 300px;
        background-color: #f9fffd;
        padding: 10px 0 0 0;
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
<div class="modal_box">

<div class="mx-auto mt-5">

<h3 style="color:#c21b1b;">新增技能</h3>

<form action="./api/add.php" method="post">
<table class="mx-auto">
            <tr>
                <td width="30%">技能類别</td>
                <td ><input type="text" name="skill_type" style="width:95%"></td>  
            </tr>
            <tr>
                 <td width="30%">技能名稱</td>
                 <td><input type="text" name="skill_name" style="width:95%"></td>
            </tr>
            <tr>
                <td width="30%">盒號</td>
                <td ><input type="text" name="box_num" style="width:95%"></td>
            </tr>
            <tr>
                <td colspan="3" style="height:80px" >
                    <input type="hidden" name="table" value="skill">
                    <input type="submit" value="新增">
                    <input type="reset" value="重置">
                </td>

            </tr>
</table>
</form>
</div>
</div>

