<?php
require_once '../conf/const.php';
require_once MODEL_PATH . 'functions.php';
require_once MODEL_PATH . 'user.php';
require_once MODEL_PATH . 'item.php';
require_once MODEL_PATH . 'cart.php';

session_start();

if(is_logined() === false){
  redirect_to(LOGIN_URL);
}

$token = get_csrf_token();

$db = get_db_connect();
$user = get_login_user($db);

$carts = get_user_carts($db, $user['user_id']); //中ではfetch_all_queryに$user['user_id]を渡して、その結果を$params(配列)で受け取っている

$total_price = sum_carts($carts); //$cartsの中(配列)を参照して、$cart['price'] * $cart['amount']で合計金額を計算している

include_once VIEW_PATH . 'cart_view.php';