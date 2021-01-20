<style>
    .modal_box{

        padding: 20px;
        text-align: center;
    }

    td>span{

        background: #f0f194d4;
        border-radius: 20px;
        display: block;
        padding: 5px;
        margin-bottom: 20px;
    }


</style>
<div class="modal_box">

<h3 style="text-align: center;">上傳圖片</h3>


<form action="./api/add.php" method="post" enctype="multipart/form-data">
<table style="margin: 0 auto">
    <tr>
        <td><span>選一張喜歡的頭像</span></td>

    </tr>
    <tr>
        <td><input type="file" name="img" id=""></td>
    </tr>

</table>

    <div style="margin-top:20px">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
            <input type="submit" value="新增">
            <input type="reset" value="重置">
            </div>

</form>
</div>