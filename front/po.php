<div>
    目前位置：首頁 > 分類網誌 > <span id="type">健康新知</span>
</div>

<fieldset style="display:inline-block;vertical-align:top">
    <legend>分類網誌</legend>
    <?php
    foreach($News->type as $key => $type){
        echo "<a href='#' class='type' data-type='$key' style='display:block'>";
        echo $type;
        echo "</a>";
    }

    ?>
</fieldset>
<fieldset style="display:inline-block;width:75%">
    <legend>文章列表</legend>
    <div id="content">

    </div>
</fieldset>

<script>

getList(1);

$(".type").on("click",function(){
    $("#type").text($(this).text());
    getList($(this).data("type"));
})

function getList(type){
    $.get("./api/get_list.php",{type},(list)=>{
        list=JSON.parse(list)
        //console.log(list)
        $("#content").html(list);
    })
}

function getNews(id){
    $.get("./api/get_news.php",{id},(news)=>{
        //console.log(news)
        $("#content").html(news);
    })
}

</script>
