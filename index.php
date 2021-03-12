<?php
$age = 19;
define("NAME", "Okazaki Rui");
define("TAX",1.1);
echo $age."\n".NAME;
echo "<br>";
echo 3000 * TAX;

echo "<hr>";

$a = "PHP Study";

echo '1. タイトルは $a です。<br>';
echo "2. タイトルは $a です。<br>";
echo "3. タイトルは$aです。<br>";
echo "4. タイトルは{$a}です。<br>";
echo "5. タイトルは".$a."です。<br>";

echo "<hr>";

$family = array("智子", "愛弥", "流依");
print_r($family);
echo "<br>";
var_dump($family);
echo "<br>";
echo "<br>";
echo $family[0];

echo "<hr>";

$values = array(0, 0.0, false, '');
var_dump($values);
echo "<br>";
print_r ($values);

echo "<hr>";

$ary1 = array( 0 => "0番目" , 3 => "3番目" , 7 => "7番目" );
print_r($ary1);

echo "<hr>";

$ary1[4] = "4番目";
print_r($ary1);

echo "<hr>";

$ary1[] = "最後に追加";
print_r($ary1);

echo "<hr>";

array_push($ary1, "9番目", "10番目");
print_r($ary1);

echo "<hr>";

unset($ary1[9]);
print_r($ary1);

echo "<hr>";
?>

<?php
$num = 10;
if($num === 10){
  echo '$numの値は10です';
  echo "<hr>";
}
?>

<?php
$num = 0;
while(TRUE){
  if($num % 2 === 0){
    echo $num;
    echo "<br>";
  }
  if($num === 20){
    break;
  }
  $num++;
}

echo "<hr>";
?>

<?php
$shiki = array(
  "spr" => "春",
  "sum" => "夏",
  "aut" => "秋",
  "win" => "冬"
);
print_r($shiki);
echo "<br>";

echo count($shiki);
echo "<br>";

foreach ($shiki as $key => $value) {
  echo '$key'.$key.'の中身は$value'.$value.'です。';
  echo "<br>";
}
echo "<hr>";
?>

<?php
function hello($name){
  echo "こんにちは！{$name}さん！";
}
hello("岡崎");

echo "<hr>";
?>

<?php
function sum($num1,$num2){
  return $num1 + $num2;
}

echo sum(30,10);

echo "<hr>";
?>

<?php
function cangeA($a){
  $a = "上書き";
}
$b = "デフォルト";
cangeA($b);
echo $b;

echo "<br>";

function cangeB(&$a){
  $a = "上書き";
}
cangeB($b);
echo $b;
?>