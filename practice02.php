<?php

/**
 * ファイル名：practice02.php
 *
 * 課題  ( 時刻と日付 )
 * 課題概要　時刻と日付を使ってプログラミング
 * 
 * @author 
 * @package 
 * @license ECC
 * Relese2.0 
 */

    //ここに文字コード設定、変数、自作関数の定義　を実装しましょう
    header('charset=utf-8');  //文字コード

    //現在の日付と時刻を取得(getdate()関数)　変数は$todayを使う
    $today;
    //秒数の取得　変数$todayから秒数を取り出す　変数は$secondを使う
    $second;

?>
<!DOCTYPE html>
<html lang="ja">
<head><title>PRACTICE-02</title>
<link rel="stylesheet" href="../css/kad.css">
</head>
<body>
<header>
<h1><span>練習課題　その２[時刻と日付]</span></h1>
</header>
<div id="contents">
    <h2>■日付の取得</h2>
    <?php
        //現在日時と時刻の表示
        // date( )関数　⇒　[書式] date( 'y年m月d日　H時i分s秒' )　アルファベットの大文字小文字で表示に違いがあります
        date_default_timezone_set('Asia/Tokyo');
        echo date('Y年m月d日  H時i分s秒');
        $second = date('s秒');
        
    ?>
    <br><br>
    <h2>■ゾロ目秒数判定</h2>
    <?php
        //秒数を取得し、ゾロ目の時に「ゾロ目！！」　そうでない時に「ゾロ目じゃない！！」
        // PHP のif文で気を付けるのは「等しい(A===B)」「異なる(A!==B)」と=がjavaより1つ多い点
        print 'ただいまの秒は　'.$second.'　です。';

        //ここにif文を作成
        for($i=0;$i<=60;$i+=11){
            if( (int)date('s') === $i ){
                echo "ゾロ目です！";
            }
        }
    ?>

</div>
</body>
</html>
