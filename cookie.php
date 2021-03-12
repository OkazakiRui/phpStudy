<?php
setcookie("name","Okazaki");
?>

<html>

<body>
  <?php
    $getCookie = $_COOKIE["name"];
    echo "あなたの名前は{$getCookie}です。<br>"
    ?>
  <a href="cookie2.php">ページ2へ</a>
</body>

</html>