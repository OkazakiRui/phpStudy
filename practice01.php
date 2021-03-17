<?php

/**
 * ファイル名：practice01.php
 *
 * 練習課題  ( 文章と変数の表示 )
 * 課題概要　文章内に変数を組み込んで表示する練習
 * 
 * @author 
 * @package 
 * @license ECC
 * Relese2.0 
 */

    //ここに文字コード設定、変数、自作関数の定義　を実装しましょう
    header('charset=utf-8');  //文字コード

    //変数($num[0で初期化])と定数(DEF[中身は'ECCコンピュータ専門学校'])の宣言
    //以下のように記述してみましょう。
    $num = 0;
    define('DEF','ECCコンピュータ専門学校'); 
    
?>
<!DOCTYPE html>
<html lang="ja">
<head><title>PRACTICE-01</title>
<link rel="stylesheet" href="../css/kad.css">
</head>
<body>
<header>
<h1><span>練習課題　その１[文章と変数の表示]</span></h1>
</header>
<div id="contents">
    <h2>■文章のみ表示</h2>
    <?php
        //以下のように記述してください
        //　※注意　\n(改行)はHTMLコードを改行するもので
        //　　　　　見た目を改行してくれるものではない
        //　　　　　また、\nを入れる際は文章を" "で囲む
        
        print '文章の表示を行います。¥n';
        
        print '<br>';
        
        print "文章の表示を行います。\n";
        
        ?>
    <br><br>
    <h2>■変数と定数の中身を表示</h2>
    <?php
        //以下のように記述してください
        print '変数$numの中身は'.$num."です。";
        //　※注意　print使用時、文章を " " で囲んだ文章の中に、
        //　　　　　半角$が入っているとエラーになります(試してみよう)
        print '<br>';
        
        //変数と同じように定数DEFを表示してみましょう
        print '定数DEFの中身は'.DEF."です。";
    ?>
    <br><br>
    <h2>■for文を使用して表示</h2>
    <?php
        print '変数$numを1ずつ増やしながら5回表示します<br>';
        
    for($i=0;$i<5;$i++){
        echo '変数$numの値：'.$num++."<br>";
    }
        
    ?>
</div>
</body>
</html>
