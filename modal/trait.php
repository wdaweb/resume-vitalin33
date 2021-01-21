<style>

        .up_box{
            margin: 0 auto;
            color: black;
            width: 500px;
            height: 300px;
            background: #fadbea;
            border-radius: 20px;
            padding: 20px;
        }

tr>td{
    height:30px;
}

</style>

<?php include_once "../base.php";?>
<div class="up_box">
<h3><?=$uploadimg[$_GET['table']][0];?></h3>
<hr>

      
    <form action="./api/upload.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>更新圖片</td>
            <td><input type="file" name="img" id=""></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="hidden" name="table" value="trait">
                <input type="hidden" name="id" value="<?=$_GET['id'];?>">
                <input type="submit" value="修改" onclick="clo()">
                <input type="reset" value="重置" >
            </td>

        </tr>
    </table>
    </form>


</div>

<script>
    function clo(){
        $(input[type=submit]).fadeOut();
    }

</script>