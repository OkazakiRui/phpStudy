<?php

/**
 * ファイル名：〇〇.php
 *
 * 課題〇〇(単元名)
 * 課題概要
 * 
 * @author 作成者名
 * @package クラス名番号
 * @license ECC
 * Relese2.0 
 */

    /**
     * 文字コードの設定
     */
    header('charset=utf-8');

    //ここにhtmlから送られてきた各データを変数で受け取る
    //変数の中身のエラーチェック(空っぽ　数字以外の入力　などなど)
    //namae : 空白　又は　20文字以上ならエラー文を表示
    //age   : 空白　又は　数字以外ならエラー分を表示
    $username = htmlspecialchars(filter_input(INPUT_POST,"username"),ENT_QUOTES);
    // echo $username;
    $userage = htmlspecialchars(filter_input(INPUT_POST,"userage"),ENT_QUOTES);
    // echo $userage;
    /**
     * 空白かどうかのチェック
     */
    function twenty($input){
        return mb_strwidth($input)>20?"<font color='red'>20文字以内で入力してください。</font>":$input;
    }


    // if (/*空白を受け取る　また　変数の中身が空*/) {
	// 	$err_name = "名前を入力してください"; /* 赤文字にする */
    // } elseif (/* 20文字を超えたら */) {
    //     /**
    //      * 20文字以上かどうかのチェック
    //     */
	// 	$err_name = "20文字以内で入力してください"; /* 赤文字にする */
    // }
	
    /**
     * Noが空白かどうかのチェック(上と同様)
     */
    

?>
<!DOCTYPE html>
<html lang="ja">
<head><title>PHP復習問題２</title>
<link rel="stylesheet" href="../css/kad.css">
</head>
<body>
<header>
<h1><span>PHP復習問題２ フォーム処理(POST)</span></h1>
</header>
<div id="contents">

    <p>
    名前：

    <?php
        /**
         * 名前の表示
         */
        // if (/*エラーメッセージがあれば*/) {
        //     // print $err_name;
        // } else {
        //     // print $namae;
        // }
        echo $username?twenty($username):"<font color='red'>名前を入力してください。</font>";
        ?>

</p>

年齢：

<?php
        /**
         * 年齢の表示(上と同様)
         */
        echo $userage?$userage."歳":"<font color='red'>年齢を入力してください。</font>";
        
    ?>

    <p><a href="practice05.html">入力フォームへ</a></p>
    </p>
</div>
</body>
</html>
