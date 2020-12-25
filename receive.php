<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function h($val){
        return htmlspecialchars($val,ENT_QUOTES,"UTF-8");
    };

    
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $evaluation = $_POST["evaluation"];
    $comment = $_POST["comment"];
    
    ?>

    <?php $time = date("Y年m月d日")?>

    <ul>
    <li>投稿日：<?php echo h($time) ?></li>
    <li>お名前：<?php echo h($name) ?></li>
    <li>性別：<?php echo h($gender) ?></li>
    <li>総合評価：<?php echo h($evaluation) ?></li>
    <li>自由コメント：<?php echo h($comment) ?></li>
    </ul>

    
    
    <?php

    
    $array = [$time,$name,$gender,$evaluation,$comment];
    foreach($array as $str){
        echo $str;
        echo'';
        $file=fopen('./data/data.txt', 'a');
        fwrite($file, $str."\n");
        fclose($file);    
    }

    // $file=fopen('./data/data.txt', 'a');
    // fwrite($file, $time."/".$name."/".$gender."/".$evaluation."/".$comment."\n");
    // fclose($file);

    ?>



</body>
</html>