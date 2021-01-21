    <style>
    .modal_box{
        margin:0 auto;

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

            <div class="insertZone"></div>
                <div class="modal_box"></div>

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
                        <input type="hidden" name="table" value="photo">
                            <input type="submit" value="新增">
                            <input type="reset" value="取消">
                            </div>

                </form>
                </div>



</div>
