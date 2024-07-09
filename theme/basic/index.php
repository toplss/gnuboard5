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

if (empty($g5['lo_location'])) $g5['lo_location'] = '';
if (empty($g5['lo_url'])) $g5['lo_url'] = '';

$t_arr = [
    'result' => $result, 
    'page' => 'board', 
    'config' => $config,
    'g5' => $g5,
    'templatArr' => $templatArr,
    'is_admin' => $is_admin,
    'is_member' => $is_member,
    'member' => $member,
];

$templatArr->setterArr($t_arr);

echo $templates->render('index', $templatArr->getterArr());
?>