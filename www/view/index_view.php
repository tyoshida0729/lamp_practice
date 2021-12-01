<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include VIEW_PATH . 'templates/head.php'; ?>

  <title>商品一覧</title>
  <link rel="stylesheet" href="<?php print(STYLESHEET_PATH . 'index.css'); ?>">
</head>

<body>
  <?php include VIEW_PATH . 'templates/header_logined.php'; ?>


  <div class="container">
    <h1>商品一覧</h1>
    <?php include VIEW_PATH . 'templates/messages.php'; ?>
    <div class="item_block">
      <?php foreach ($items as $item) { ?>
        <div class="items">
        <p class="item_name"><?php print(h($item['name'])); ?></p>
          <img class="card-img" src="<?php print(IMAGE_PATH . h($item['image'])); ?>">
            <p><?php print(number_format(h($item['price']))); ?>円</p>
            <?php if (h($item['stock']) > 0) { ?>
              <form action="index_add_cart.php" method="post">
                <input type="hidden" name="token" value="<?php print $token ?>">
                <p><input type="submit" value="カートに追加" class="addition_cart"></p>
                <input type="hidden" name="item_id" value="<?php print(h($item['item_id'])); ?>">
              </form>
            <?php } else { ?>
              <p class="text-danger">現在売り切れです。</p>
            <?php } ?>
        </div>
      <?php } ?>
      </div>
  </div>
  <h2>人気商品ランキング</h2>
  <table class="table table-bordered">
    <thead class="thead-light">
      <tr>
        <th>順位</th>
        <th>商品画像</th>
        <th>商品名</th>
        <th>価格</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <div class="ranking">
          <?php foreach ($popular_items as $i => $p_items) { ?>
            <td><?php print($i + 1) ?></td>
            <td><img src="<?php print(IMAGE_PATH . h($p_items['image'])); ?>" class="item_image"></td>
            <td><?php print(h($p_items['name'])); ?></td>
            <td><?php print(number_format(h($p_items['price']))); ?>円</td>
        </div>
      </tr>
    </tbody>
  <?php } ?>
  </table>
</body>

</html>