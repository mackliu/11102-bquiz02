<script>
$.get("./api/news.php",(content)=>{
	$(".content").html(content)
	goodsEvent('news')
})
</script>