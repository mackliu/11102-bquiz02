<?php
include_once "base.php";

$type=$_GET['type'];

$lists=$News->all(['type'=>$type,'sh'=>1]);

echo json_encode($lists);

/* foreach($lists as $list){
    echo "<a href='#' style='display:block' onclick='getNews({$list['id']})'>";
    echo $list['title'];
    echo "</a>";
}
 */
