<?php
$subject=$Que->find($_GET['id']);
$options=$Que->all(['parent'=>$_GET['id']]);
?>

<fieldset>
<legend>目前位置：首頁 > 問卷調查 > <?=$subject['text'];?></legend>

    <h3><?=$subject['text'];?></h3>
    <?php

    foreach($options as $opt){
        $vote=$opt['count'];
        $all=($subject['count']==0)?1:$subject['count'];
        
        $rate=$vote/$all;

        echo "<div style='display:flex;align-items:center;margin:10px 0'>";
        echo    "<div style='width:50%'>";
        echo    $opt['text'];
        echo    "</div>";
        echo    "<div style='width:50%'>";
        echo        "<span style='display:inline-block;width:";
        echo        70*$rate;
        echo       "%;height:1.1rem;background-color:#ccc'></span>";
        echo        "<span>{$vote}票(";
        echo        round($rate*100,1);
        echo        "%)</span>";
        echo    "</div>";
        echo "</div>";
    }

    ?>

    <div class="ct">
        <button onclick="location.href='?do=que'">返回</button>
    </div>

</fieldset>