<fieldset>
    <legend>目前位置：首頁 > 人氣文章區</legend>

    <table>
        <tr>
            <td width="30%">標題</td>
            <td width="50%">內容</td>
            <td>人氣</td>
        </tr>
    <?php
    $all=$News->count(['sh'=>1]);
    $div=5;
    $pages=ceil($all/$div);
    $now=$_GET['p']??1;
    $start=($now-1)*$div;

    $rows=$News->all(['sh'=>1]," order by `good` desc limit $start,$div");
    foreach($rows as $row){

    ?>
        <tr>
            <td><?=$row['title'];?></td>
            <td><?=mb_substr($row['text'],0,20);?>...</td>
            <td></td>
        </tr>
    <?php
    }
    ?>        
    </table>
    <div>
     <?php
     if(($now-1)>0){
        $prev=$now-1;
        echo "<a href='index.php?do=pop&p=$prev'> < </a>";
     }

     for($i=1;$i<=$pages;$i++){
        $size=($now==$i)?"26px":"16px";
        echo "<a href='index.php?do=pop&p=$i' style='font-size:$size'> $i </a>";
     }

     if(($now+1)<=$pages){
        $next=$now+1;
        echo "<a href='index.php?do=pop&p=$next'> > </a>";
     }
     
     ?>
    </div>

</fieldset>