<?php
namespace Model;

include_once(G5_LIB_PATH.'/connect.lib.php');


class Board {

    public function index(array $g5)
    {
        if (!empty($g5)) {

            //  최신글
            $sql = " select bo_table
            from `{$g5['board_table']}` a left join `{$g5['group_table']}` b on (a.gr_id=b.gr_id)
            where a.bo_device <> 'mobile' ";
            $sql .= " and a.bo_use_cert = '' ";
            // $sql .= " and a.bo_table not in ('notice', 'gallery') ";     //공지사항과 갤러리 게시판은 제외
            $sql .= " order by b.gr_order, a.bo_order ";

            $result = sql_query($sql);

            return $result;
        }
    }
}