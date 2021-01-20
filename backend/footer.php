
<div style="width:99%; height:87%; margin:auto; overflow:auto;">
    <p class="t cent botli"><?=$tstr[$do];?></p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="50%">頁尾版權資料：<input type="text" name="bottom" value="<?=$Footer->find(1)['text'];?>"></td>
                    <input type="hidden" name="id[]" value='1'>
                </tr>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                   
                </tr>
            </tbody>
        </table>
        <div>
        <input type="hidden" name="table" value="<?=$do;?>">
                   <input type="submit" value="修改確定">　<input type="reset" value="重置">                    
        </div>
    </form>
</div>