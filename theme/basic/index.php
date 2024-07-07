<?php
require_once("Models/Board.php");

use Model\Board;

if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

// include_once(G5_THEME_PATH.'/head.php');

$board_model = new Board();
$result = $board_model->index($g5);

echo $templates->render('index', ['result' => $result, 'page' => 'board']);
?>