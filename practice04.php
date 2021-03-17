<?php

/**
 * ファイル名：practice04.php
 *
 * 課題  ( 自作関数 )
 * 課題概要 自作関数の定義と呼び出し
 * 
 * @author 
 * @package 
 * @license ECC
 * Relese2.0 
 */

    //ここに文字コード設定、変数、自作関数の定義　を実装しましょう
    header('charset=utf-8');  //文字コード

    //現在時刻の取得
    $today = getdate();

    //時の取得
    $hours = $today['hours'];

    //午前午後判定関数
    //　関数名  : ampm
    //　引数    : $time
    //　戻り値　：$message　
    //　　　　　　※javaと違い、関数作成時に戻り値の方を明記する必要はない
    //　　　　　　※戻り値はreturn文を用いる
    //　仕様　　：html部分から時間を送り、「午前」か「午後」の文章を返す   
    function ampm(int $time){
        if($time < 12){
            return "午前";
        }else{
            return "午後";
            
        }
    }

?>
<!DOCTYPE html>
<html lang="ja">
<head><title>PRACTICE-04</title>
<link rel="stylesheet" href="../css/kad.css">
</head>
<body>
<header>
<h1><span>練習課題　その４[自作関数の定義と呼び出し]</span></h1>
</header>
<div id="contents">

    <h2>■自作関数の呼び出し</h2>
    <br>
    <?php

        
        print '現在時刻：'.date('H:i:s').'<br>';

        //関数の呼び出しは　関数名(引数[今回は時間])
        //戻り値は呼び出した場所に帰ってきます
        echo ampm($hours);


    ?>

</div>
</body>
</html>
