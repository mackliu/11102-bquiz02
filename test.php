<?php
include "./api/base.php";


for($i=0;$i<3650;$i++){
    $today=date("Y-m-d",strtotime("+$i days"));
    $Total->save(['date'=>$today,'total'=>0]);
}

?>