<?php
require_once '../conf/const.php';
require_once MODEL_PATH . 'functions.php';
require_once MODEL_PATH . 'user.php';
require_once MODEL_PATH . 'item.php';
require_once MODEL_PATH . 'cart.php';

session_start();

if (is_logined() === false) {
    redirect_to(LOGIN_URL);
}

$db = get_db_connect();
$user = get_login_user($db);

if (is_admin($user) === true) {
    $histories = get_histories($db);
} else {
    $histories = get_users_histories($db, $user['user_id']);
}

include_once VIEW_PATH . 'bought_history_view.php';
