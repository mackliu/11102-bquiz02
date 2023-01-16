
<script>
$.get("./api/pop.php",(content)=>{
	$(".content").html(content)
	goodsEvent('pop')
})
</script>