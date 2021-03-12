<?php
$name = htmlspecialchars($_GET["name"], ENT_QUOTES);
echo "{$name}さん！ようこそ！";
?>