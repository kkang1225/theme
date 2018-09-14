<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>

<div class="main">
    <div class="main_bnr_wrap">
         <div class="bnr_section">
            <div class="bnr_notice">
                <dl>
                    <dt><? echo $bo_subject;?></dt>
                    <dd>
                    <ul id="noticeList">
                        <? for($i=count($list)-1;$i>=0;$i--){ ?>
                         <li>
                            <a href="<? echo $list[$i]['href'];?>"><span href="<? echo $list[$i]['href'];?>" class="ico ico_notice"></span> <? echo $list[$i]['subject']?><!-- 도미노피자 로그인&amp;수신동의 이벤트 당첨자 안내 -->
                            </a>
                        </li>   
                        <?} ?>
                        
                        <!-- <li><a href="#"><span class="ico ico_notice"></span> 도미노 파티카 10주년 기념 고객 대상 8월 이벤트 당첨자 안내</a>
                        </li>
                        <li><a href="#"><span class="ico ico_notice"></span> 도미노피자 개인정보 처리방침 개정 안내</a>
                        </li> -->
                    </ul>
                    </dd>
                </dl>
                <a href="<? echo G5_BBS_URL?>/board.php?bo_table=<? echo $bo_table;?>" class="btn_ico btn_more">더보기</a>
            </div>
        </div>
    </div>
</div>