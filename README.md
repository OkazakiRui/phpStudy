# PHP
## 基礎
### 変数
変数名はドル記号($)から始まります。
変数名は大文字と小文字を区別します。（$aと$Aは別の変数だと認識されます。）

変数名に使えるのは、以下の文字になります。
英大文字小文字（a～zもしくはA～Z）
数字（ただし、先頭には使えません。）
_(アンダーバー)
```
$name = "okazaki";
```

### 定数
定数は、先頭にドル記号($)が必要ありません。
定数を定義することができるのは、define関数 のみです。（単なる代入（=）による定義はできません。）

定数に指定できるのは、スカラデータ（値） （型がboolean, integer, double, string, NULL) のみです。
```
define("定数名", "value");
define("TAX", 1.1);
```
定数名は大文字が多い

### "" と '' の違い
""
改行コード、変数が展開される
''
全て文字として認識される

```
echo '1. タイトルは $a です。<br>';
1. タイトルは $a です。
echo "2. タイトルは $a です。<br>";
2. タイトルは PHP Study です。
echo "3. タイトルは$aです。<br>";
3. タイトルは
echo "4. タイトルは{$a}です。<br>";
4. タイトルはPHP Studyです。
echo "5. タイトルは".$a."です。<br>";
5. タイトルはPHP Studyです。
```

### print と echo の違い
print は引数が1つだけ
echo は引数が何個でも取れる
こだわりがなければ echo を使う

### 配列
変数と同じく、配列名はドル記号($)から始まります。
配列名に使えるのは、変数と同じく以下の文字になります。（大文字と小文字も区別します。）

英大文字小文字（a～zもしくはA～Z）
数字（ただし、先頭には使えません。）
_(アンダーバー)
```
$配列名 = array("val", "val", "val")
```
表示方法
```
print_r($配列名)
表示結果 ： Array ( [0] => val [1] => val [2] => val )
```
print_rじゃないと Array としか表示されない

### [print_r と var_dump](https://www.it-swarm.jp.net/ja/php/php%E3%81%AEecho%E3%80%81print%E3%80%81printr%E3%81%AE%E9%81%95%E3%81%84%E3%81%AF%E4%BD%95%E3%81%A7%E3%81%99%E3%81%8B%EF%BC%9F/968854098/)
print_r
0と0.0、またはfalseと''の違いがわからない

var_dump
0と0.0、またはfalseと''の違いを認識する
型タイプも表示する。

#### 添字を指定して配列を作成する方法
```
$ary1 = array( 0 => "0番目" , 3 => "3番目" , 7 => "7番目" );
$ary1[4] = "4番目";
$ary1[] = "最後に追加";
```

### 連想配列
添字を文字にするだけ

### array_push()
    array_push($ary1, "9番目", "10番目");
### unset()
    unset($ary1[9]);

### if
```
$num = 10;
if($num === 10){
  echo '$numの値は10です';
}
```

### count()
count(配列);
配列.length

### 関数 参照渡し
```
function cangeA($a){
  $a = "上書き";
}
```
普通の関数。
参照元は上書きされない

```
function cangeB(&$a){
  $a = "上書き";
}
```
引数の頭に & をつけると上書きされる。

### formからの情報を受け取る
$_GET or $_POST で受け取ることが出来る。

#### [htmlspecialchars を使ったエスケープ処理について](https://www.php.net/manual/ja/function.htmlspecialchars.php)
$name = htmlspecialchars($_GET["name"], ENT_QUOTES);
$name = htmlspecialchars($_POST["name"], ENT_QUOTES);

### GET と POST の使い分け
サーバーから何か情報を取り出す時は**GET**
サーバーに情報を投稿する時は**POST**
サーバー内のデータをユーザーが書き換える時は**POST**
**GET**は送信できる情報の長さに限りがある
ファイルのアップロードは**POST**
**GET**は送るデータはURLの一部になるのでブックマーク、アンカーによるリンクが可能

### クッキー発行と利用
setcookie("name","Okazaki");
nameという名前のクッキー発行する

$_COOKIE["name"];
nameというクッキーを探して値を取り出す。




