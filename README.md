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
```
$name = htmlspecialchars($_GET["name"], ENT_QUOTES);
$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
```
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

### SESSION
$_SESSION というスーパーグローバル変数の中に値を格納する。
PHPはサーバー上のファイルに保管される。
有効期限は24分

#### session_start関数
    session_start();
cookieの値を元にセッション変数を復元する。

    $_SESSION["title"] = "情報";
sessionに情報を入れる

    session_destroy();
sessionを削除


#### sessionの良い使い方
```
session_start();
$err = $_SESSION;
$_SESSION = array();
session_destroy();
```


## データベース
### 用語
- テーブル
- - フィールド
- - レコード

テーブル    行と列のデータの集合体

フィールド - 縦列, 価格・名前 等のジャンル
レコード - 横行, ここのデータ

|フィールド / レコード|レコード|レコード|
|-|-|-|
|フィールド|||
|フィールド|||

### リレーショナルデータベース
複数のテーブルを組み合わせて使うことができる。　

### SQL文の種類
#### データ定義 DDL
テーブル操作
CREATE : 作成
DROP   : 削除
ALTER  : 更新
JOIN   : 結合

#### データ操作 DML
データ操作
SELECT : 取得
INSERT : 追加
insert into テーブル名(カラム名) values 値
UPDATE : 更新
DELETE : 削除
delete from テーブル名 where 絡む名 = 消したい値

#### データ制御 DCL
アクセス制御
GRANT    : ユーザ権限を付与
BEGIN    : トランザクションを開始
COMMIT   : トランザクションを確定
ROLLBACK : トランザクションを取り出す

### プライマリーキー と オートインクリメント
プライマリーキー   ：重複しない値を識別するため
オートインクリメント ：1から順に自動で値を振ってくれる

### データベース操作の基本
1. SQL文の準備
2. SQL文の実行
3. SQL文の結果取り出し

### [PDO (PHP Data Object)](https://www.php.net/manual/ja/book.pdo.php)
PHP 5.1~ 標準のデータベース接続クラス
データベース操作はシステムによって命令が異なるがPDOなら同じ関数で操作することができる。

例） データベースに接続
```
MySQL => mysql_connect();
PostgreSQL => pg_connect();
```

#### 記述方法
##### MySQLに接続
```
$dbh = new PDO($dsn, $user, $pass, opt)
```
dbh => data base handle
new PDO => PDOクラスのインスタンスを作成
dsn => data souce name 接続する時の情報を書く
user, pass => "root" ※初期設定

###### dnsを設定
mysql:host=localhost;dbname=データベース名;charset=utf8

###### ユーザーを設定
デフォルトはrootユーザーになっている。rootユーザーは全権限を持つ。
権限を分けることによって誤ってデータを削除するようなことがなくなる。

###### optを設定
optionは配列で記述する。

##### try~catch (例外処理)
DBのエラーをチェックできる構文
```
try{
通常処理
}catch(){
エラーが発生した場合の処理
}
```
実際の記述
```
try{
  $dbh = new PDO($dsn, $user, $pass,[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  ]);
  echo '接続成功';
  $dbh = null;
}catch(PDOException $e){
  echo '例外発生'.$e->getMessage();
  exit();
}
```

##### SQLの実行
```
$stmt = $dbh -> query($sql);
```
stmt => PDOstatement
queryを使うと帰ってくるのがPDOstatement
[参照](https://www.php.net/manual/ja/pdo.query.php)

query();
命令文のこと。
アロー関数で SQL文 を入れるとbdの処理を行ってくれる。

##### SQLのresult
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
[fetchAllの引数](https://www.php.net/manual/ja/pdostatement.fetch.php)

### SQLを即実行1回のみ
SQL文を即時実行、１回しか使わないならqueryメソッド。
使いまわしたい場合はprepareを使う

### [プレースホルダー (prepare)](https://qiita.com/mitsuru793/items/45b2452284e321c7a5a9)
SQLに値を入れる場所を確保し、後でSQLと分離して値を渡すことでSQLを完成させる方法
これにより **SQLインジェクション** の対策をすることができる。

prepare
[公式doc](https://www.php.net/manual/ja/pdo.prepare.php)

    $sql = "SELECT * FROM blog WHERE id = :id";
    $stmt = $dbh -> prepare($sql);
    $stmt -> bindValue(":id", $id, PDO::PARAM_INT);
    // $stmt -> bindValue(:id, $id, 型);
    $stmt->execute();
$stmt->execute();で実行

#### prepareを使う場合はoptを追加する必要がある
    $dbh = new PDO($_SESSION["dsn"], $_SESSION["user"], $_SESSION["pass"], [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_EMULATE_PREPARES => false,
    ]);
PDO::ATTR_EMULATE_PREPARES => false,
default は true
trueだとSQLインジェクションを防げない場合がある。

### 型変換
(int)$id
(型)$変数
で変換できる。

## 外部ファイル読み込み require, inculude
require: 読み込み失敗 => 処理中止
include:読み込み失敗 => 処理継続
require_once: 再読み込みしない
include_once:再読み込みしない

### 使い分け
処理が実行しても問題がないHTMLはincludeを使う。
ロジック系はrequire_onceを使う。(function, class)

## namespace
変数名、関数名などの重複を回避できる。

use(エイリアス)が一緒に使われることが多い。

    namespace Name(名前空間名);
namespaceは一番最初に書くこと！！

namespace Blog\Dbc;
で名前空間を確保することができる。

PDOなどのグローバル関数を使う場合は

    \PDO
としなければエラーになる。
これは
namespace 以降に書かれた関数は namespace の対象となってしまうためである。

読み込み先で使う場合は

    $blogData = Blog\Dbc\getAllBlog();
のように関数名の前にnamespaceを入れる必要がある。

### エイリアスを使う方法
    require_once('dbc.php');
    use Blog\Dbc;
use 〇〇;
で今回だと最後の Dbc がエイリアスになる。

つまり

    $blogData = Dbc\detailBlog($id);
と Blog\ を抜くことができる。

## トランザクション
DBにデータを入力するときに行う。

## テーブル
unsigned → 正の数のみ
unique   → 唯一無二

## バリデーション
受け取ったデータが正しいかどうかを判断したりする。

filter_input 等でできる。

- そもそもでデータがあるか
- 型があっているか
- 文字数が上限を越えていないか？
- ファイル形式があっているか？
- 形式があっているか？ ( mail => **@*.* )

## [パスワードのバリデーション (正規表現)](https://qiita.com/mpyw/items/886218e7b418dfed254b)
**英数記号あり（大文字小文字の区別なし）で、かつ8文字以上**等の条件が当てはまっているかをチェックするためのもの

```
'/\A[a-z\d]{8,100}+\z/i'
```
preg_matchを使う。
```
if(!preg_match('/\A[a-z\d]{8,100}+\z/i',$password)){
    エラーを書く
}
```
## パスワードをハッシュ化する
password_hash でできる。

### ハッシュ化とは
データを適当なハッシュ値にする。
ハッシュ値から元データを復元することが困難

## [PHPDoc](https://zonuexe.github.io/phpDocumentor2-ja/references/phpdoc/basic-syntax.html)
コメントを書くときの共通の形式のこと
クラスやメソッドの役割を書く
```
/**
 * idを取得する。    => 説明を書く
 * @param int $id  => 引数を書く
 * @return int $id => 返り値を書く
*/
public function getId($id){
  return $id;
}
```

## ハッシュされたパスワードでのパスワード照会の方法
```
password_verify(パスワード, ハッシュ);
@return => bool
```
## セッションハイジャック と 対策
セッションIDを盗まれてなりすましをされること

セッションIDを作成
↓
↓ → 盗難
↓
ログイン認証
↓
ログイン後

セッションIDで判別しているので盗難されてしまうと全ての挙動を自由にできる。

### 対策
セッションIDを再生成する。

### executeの引数
executeの引数は配列である必要がある。

## セキュリティ対策
### CSRF対策
**クロスサイトリクエストフォージェリ(偽造)**
web利用者が意図しない偽造されたリクエストが実行される脆弱性

#### 対策
ワンタイムトークンを利用しよう！

### XSS対策
**クロスサイトスクリプティング**
webページにアクセスすることで、不正なスクリプトが実行される脆弱性

#### 対策
エスケープ処理をしよう！

### 二重送信防止
#### 二重送信とは？
- データを登録するときなどに、送信ボタンを連打され、多重送信されてしまう。
- 登録中の画面で何度もリロードをされ多重でリクエストが送られる
- 登録後にブラウザバックされ登録処理が再度走ってしまう

#### 対策
ワンタイムトークンを利用しよう！

### ID, passへの攻撃対策
- ログインフォームにIDやパスワードを片っ端から入力され、不正ログインされること

#### ブルートフォースアタック
総当たりでパスワードを解読する方法

#### 対策
- ログイン失敗の回数ロックをかける
- ワンタイムパスワードにする
- 二要素認証にする

## ログアウト機能
[公式Doc](https://www.php.net/manual/ja/function.session-destroy.php)













