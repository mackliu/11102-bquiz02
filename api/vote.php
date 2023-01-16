<?php include_once "base.php";

$opt=$Que->find($_POST['opt']);
$subject=$Que->find($opt['parent']);

$opt['count']++;
$subject['count']++;

$Que->save($opt);
$Que->save($subject);

to("../index.php?do=result&id={$subject['id']}");
?>