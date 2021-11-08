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

$order_id = get_post('order_id');
$boughtd = get_post('boughtd');
$total_price = get_post('total_price');

$db = get_db_connect();
$user = get_login_user($db);

if (is_admin($user) === true) {
    $details = get_details($db,$order_id);
} else {
    $details = get_users_details($db, $user['user_id'],$order_id);
}

include_once VIEW_PATH . 'bought_detail_view.php';