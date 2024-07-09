<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);

$list = [
    'view'          => $view, 
    'list_href'     => $list_href,
    'reply_href'    => $reply_href,
    'write_href'    => $write_href,
    'update_href'   => $update_href,
    'delete_href'   => $delete_href,
    'copy_href'     => $copy_href,
    'move_href'     => $move_href,
    'search_href'   => $search_href,
    'category_name' => $category_name,
];

// 플레이트 레잉아웃
echo $templates->render('layouts/board/view', $list);
?>