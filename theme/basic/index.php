<?php
require_once("models/Board.php");
require_once("templatClass/TemplatArr.php");

use Model\Board;
use Template\TemplatArr;

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

$board_model    = new Board();
$templatArr     = new TemplatArr();

$result = $board_model->index($g5);

$t_arr = [
    'result' => $result, 
    'page' => 'board', 
    'config' => $config,
    'g5' => $g5,
    'g5_head_title' => $g5_head_title,
    'templatArr' => $templatArr,
];

$templatArr->setterArr($t_arr);

echo $templates->render('index', $templatArr->getterArr());
?>