<?php
$subjects=$Que->all(['parent'=>0]);
?>
<fieldset>
    <legend>目前位置：首頁 > 問卷調查</legend>
    <table>
        <tr>
            <td width="10%">編號</td>
            <td width="50%">問卷題目</td>
            <td width="10%">投票總數</td>
            <td width="10%">結果</td>
            <td>狀態</td>
        </tr>
    <?php
    foreach($subjects as $key => $subject){
    ?>
        <tr>
            <td><?=$key+1;?>.</td>
            <td><?=$subject['text'];?></td>
            <td><?=$subject['count'];?></td>
            <td>
                <a href='index.php?do=result&id=<?=$subject['id'];?>'>結果</a>
            </td>
            <td>
            <?php
            if(isset($_SESSION['login'])){
                echo "<a href='index.php?do=vote&id={$subject['id']}'>我要投票</a>";
            }else{
                echo "請先登入";
            }
            ?>
            </td>
        </tr>
    <?php
    }
    ?>
    </table>
</fieldset>