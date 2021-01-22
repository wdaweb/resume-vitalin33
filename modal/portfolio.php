<style>

        .up_box{
            margin: 0 auto;
            color: black;
            width: 500px;
            height: 400px;
            background: #fadbea;
            border-radius: 20px;
            padding: 20px;
          
        }

tr>td{
    height:30px;
    text-align:left;
}

</style>

<?php include_once "../base.php";?>
<div class="up_box">
<h3><?=$uploadimg[$_GET['table']][0];?></h3>
<hr>

      
    <form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table >
        <tr>
            <td>作品縮圖：</td>
            <td><input type="file" name="img" id=""></td>
        </tr>
        <tr>
            <td>作品名稱：</td>
            <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
            <td>作品連結：</td>
            <td><input type="text" name="link" id=""></td>
        </tr>
        <tr>
            <td>作品介紹：</td>
            <td><input type="text" name="text" id=""></td>
        </tr>
        <tr>
            <td colspan="2" style="height:80px;text-align:center;">
                <input type="hidden" name="table" value="portfolio">
                <input type="hidden" name="id" value="<?=$_GET['id'];?>">
                <input type="submit" value="新增" onclick="clo()">
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