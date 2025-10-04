




<?php include("../header.html"); ?>

<main>
  <h2><?php echo $title; ?></h2>
  <div class="works">
    <?php foreach ($images as $img) {
      echo "<img src='images/$img' alt=''>";
    } ?>
  </div>

  <div class="nav">
    <?php if ($prev) echo "<a href='gallery$prev.php'>← 前のページ</a>"; ?>
    <a href='index.php'>一覧に戻る</a>
    <?php if ($next) echo "<a href='gallery$next.php'>次のページ →</a>"; ?>
  </div>
</main>

<?php include("../footer.html"); ?>
