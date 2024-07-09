jQuery(function($) {

    var $omi = $('#ol_id'),
        $omp = $('#ol_pw'),
        $omi_label = $('#ol_idlabel'),
        $omp_label = $('#ol_pwlabel');

    $omi_label.addClass('ol_idlabel');
    $omp_label.addClass('ol_pwlabel');

    $("#auto_login").click(function(){
        if ($(this).is(":checked")) {
            if(!confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?"))
                return false;
        }
    });
});

function fhead_submit(f)
{
    if( $( document.body ).triggerHandler( 'outlogin1', [f, 'foutlogin'] ) !== false ){
        return true;
    }
    return false;
}