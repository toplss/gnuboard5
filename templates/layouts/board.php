
<h2 class="sound_only">최신글</h2>

<div class="latest_wr">
<!-- 최신글 시작 { -->
    <?php
    foreach ($result as $key => $row):
		$lt_style = '';
    	if ($key % 3 !== 0 ) $lt_style = "margin-left:2%";
    ?>
    <div style="float:left;<?php echo $lt_style ?>" class="lt_wr">
        <?=latest('theme/basic', $row['bo_table'], 6, 24)?>
    </div>
    <?php endforeach ?>
    <!-- } 최신글 끝 -->
</div>
