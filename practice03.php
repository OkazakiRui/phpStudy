<?php

/**
 * ファイル名：practice03.php
 *
 * 課題  ( 文字列操作と正規表現 )
 * 課題概要　文字列を入れ替えたり、正しい表記が行われているかチェック
 * 
 * @author 
 * @package 
 * @license ECC
 * Relese2.0 
 */

    //ここに文字コード設定、変数、自作関数の定義　を実装しましょう
    header('charset=utf-8');  //文字コード

    //文字列の準備
    //変数$telに電話番号(000-0000-0000)ハイフン込みで11桁　を格納
    $tel = '012-3456-7890';
    //変数$weatherに「明日は　晴れ！！」　を格納
    $weather = '明日は　晴れ！！';
?>
<!DOCTYPE html>
<html lang="ja">
<head><title>PRACTICE-03</title>
<link rel="stylesheet" href="../css/kad.css">
</head>
<body>
<header>
<h1><span>練習課題　その３[文字列操作と正規表現]</span></h1>
</header>
<div id="contents">

    <h2>■文章の入れ替え</h2>
    <?php
        //文章の中から　任意の文字列を探し　別の文字列に置き換えます
        //使用する関数は　str_replace()関数
        //[書式]　変数 = str_replace( 探したい文字列, 置き換えたい文字列, 探す場所(変数名) )
        //　　　　今回は「$weather」の中から '晴れ' を探して '雨' に置き換えましょう

        //ひとまず置き換える前の文章を表示
        echo $weather;

        //次に入れ替え作業(ここを実装)
        $weather = str_replace("晴れ","雨",$weather);
        echo "<br>";
        //入れ替えた物を表示
        echo $weather;
    ?>
    <br><br>
    
    <h2>■正規表現</h2>
    <?php
        //if文とpreg_match()関数を使い、$telの中が正しい表記かチェックします
        //使用する関数は　preg_match()関数
        //[書式]　preg_match( 書式パターン,チェック対象 )
        //　　　　　今回は「$tel」の中が 「数字3桁-数字4桁-数字4桁」のパターンかどうかをチェック
        //　　　　　数字で始まり・・・　や　〇回連続する・・・　などは授業資料で確認しましょう
        //         この関数はパターンが正しければ「１」を返すので、if文の条件式に用いられます
        //         if( preg_match( 書式パターン,チェック対象 ) ){
        //                パターンマッチで１が返る　と言う事は　true部分が実行される
        //         }
        if(preg_match("/\A[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}\z/", $tel)){
            echo "正規表現と同じです";  
        }else{
            echo "正規表現から外れています";
        }
        

    ?>
</div>
</body>
</html>
