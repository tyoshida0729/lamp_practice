<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include VIEW_PATH . 'templates/head.php'; ?>
  <title>購入履歴画面</title>
</head>

<body>
  <?php include VIEW_PATH . 'templates/header_logined.php'; ?>
  <h1>購入履歴</h1>
  <div class="container">

    <?php include VIEW_PATH . 'templates/messages.php'; ?>

    <table class="table table-bordered">
      <thead class="thead-light">
        <tr>
          <th>注文番号</th>
          <th>購入日時</th>
          <th>合計金額</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($histories as $history) { ?>
          <tr>
            <td><?php print(h($history['order_id'])) ?></td>
            <td><?php print(h($history['boughtd'])) ?></td>
            <td><?php print(h($history['total_price'])) ?></td>
            <td>
              <form method="post" action="bought_detail.php">
                <input class="btn btn-block btn-primary" type="submit" value="購入明細を表示">
                <input type="hidden" name="order_id" value="<?php print h(($history['order_id'])) ?>">
                <input type="hidden" name="boughtd" value="<?php print h(($history['boughtd'])) ?>">
                <input type="hidden" name="total_price" value="<?php print h(($history['total_price'])) ?>">
              </form>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

</body>

</html>