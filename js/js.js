// JavaScript Document
$(document).ready(function(e) {
    $(".mainmu").mouseover(
		function()
		{
			$(this).children(".mw").stop().show()
		}
	)
	$(".mainmu").mouseout(
		function ()
		{
			$(this).children(".mw").hide()
		}
	)
});
function lo(x)
{
	location.replace(x)
}
function op(x,y,url)
{
	$(x).fadeIn()
	if(y)
	$(y).fadeIn()
	if(y&&url)
	$(y).load(url)
}
function cl(x)
{
	$(x).fadeOut();
}

$(".addData").on('click',function(){
   
    $(".insertZone").html(`
            <form action="">
            <h1>新增動物資料</h1>
            <hr>
            <P>動物：<input type="text" name="name"></P>
            <P>重量：<input type="text" name="weight"></P>
            <P>簡介：<input type="text" name="info"></P>
            <hr>
            <button>新增</button>
            <button>取消</button>  
            <!-- form裡面的button如果沒有指定type，會變成submit效果 -->
        </form>
    `).fadeIn();
    $(".insertZone button:contains('取消')").on('click',function(){
        $(".insertZone").fadeOut();
  })
    $(".insertZone button:contains('新增')").on('click',function(){
        $.post("api.php?todo=insert",data,function(re){
            console.log(re);
        })
  });

  })
