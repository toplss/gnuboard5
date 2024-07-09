<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);

$tem_list = [
    'category_option' => $category_option,
    'bo_table' => $bo_table,
    'sfl' => $sfl,
    'spt' => $spt,
    'sca' => $sca,
    'sst' => $sst,
    'sod' => $sod,
    'page' => $page,
    'total_count' => $total_count,
    'admin_href' => $admin_href,
    'rss_href' => $rss_href,
    'board' => $board,
    'list' => $list,
    'sxt'  => $sxt ?? '',
    'is_checkbox' => $is_checkbox,
    'is_good' => $is_good,
    'is_nogood' => $is_nogood,
    'board_skin_url' => $board_skin_url,
    'is_category'   => $is_category,
    'write_href' => $write_href,
    'is_admin' => $is_admin,
    'qstr2' => $qstr2,
    'wr_id' => $wr_id,
    'write_pages' => $write_pages,
    'list_href' => $list_href,
    'is_auth' => $is_auth,
];

echo $templates->render('layouts/board/list', $tem_list);
?>
