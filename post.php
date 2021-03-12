<?php
$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
echo "{$name}さん！ようこそ！";
?>