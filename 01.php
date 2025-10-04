<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>サイトタイトル</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <footer>
    <?php include("header.html"); ?>
  </footer>




<?php
$title = "春のイラスト集";
$images = ["spring01.jpg", "spring02.jpg", "spring03.jpg"];
$prev = 1;
$next = 3;
include("gallery-template.php");
?>





  <footer>
    <?php include("footer.html"); ?>
  </footer>
</body>
</html>
