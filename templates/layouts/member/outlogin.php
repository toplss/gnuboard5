<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$outlogin_skin_url.'/style.css">', 0);

?>

<!-- 로그인 전 아웃로그인 시작 { -->
<section id="ol_before" class="ol">
	<div id="ol_be_cate">
    	<h2><span class="sound_only">회원</span>로그인</h2>
    	<a href="<?php echo G5_BBS_URL ?>/register.php" class="join">회원가입</a>
    </div>
    <form name="foutlogin" action="<?php echo $outlogin_action_url ?>" onsubmit="return fhead_submit(this);" method="post" autocomplete="off">
    <fieldset>
        <div class="ol_wr">
            <input type="hidden" name="url" value="<?php echo $outlogin_url ?>">
            <label for="ol_id" id="ol_idlabel" class="sound_only">회원아이디<strong>필수</strong></label>
            <input type="text" id="ol_id" name="mb_id" required maxlength="20" placeholder="아이디">
            <label for="ol_pw" id="ol_pwlabel" class="sound_only">비밀번호<strong>필수</strong></label>
            <input type="password" name="mb_password" id="ol_pw" required maxlength="20" placeholder="비밀번호">
            <input type="submit" id="ol_submit" value="로그인" class="btn_b02">
        </div>
        <div class="ol_auto_wr"> 
            <div id="ol_auto" class="chk_box">
                <input type="checkbox" name="auto_login" value="1" id="auto_login" class="selec_chk">
                <label for="auto_login" id="auto_login_label"><span></span>자동로그인</label>
            </div>
            <div id="ol_svc">
                <a href="<?php echo G5_BBS_URL ?>/password_lost.php">ID/PW 찾기</a>
            </div>
        </div>
        <?php
        // 소셜로그인 사용시 소셜로그인 버튼
        @include_once(get_social_skin_path().'/social_login.skin.php');
        ?>

    </fieldset>
    </form>
</section>

<script src="/templates/js/member.outlogin.js"></script>
<!-- } 로그인 전 아웃로그인 끝 -->
