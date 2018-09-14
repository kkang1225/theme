<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<script>
  $(document).ready(function(){
		$(".slide1").bxSlider({
			pager:false, 
			controls:false,
			auto:true
			});
		});
</script>

<div class="slide1">
<div><img src="./theme/basic/img/pc03.jpg" alt="space03"></div>
<div><img src="<? echo G5_THEME_IMG_URL;?>/pc02.jpg" alt="space02"></div>
<div><img src="<? echo G5_THEME_IMG_URL;?>/pc01.jpg" alt="space01"></div>
</div>


<h2 class="sound_only">최신글</h2>

<!-- <div style="width:100%;height:500px;background:skyblue"></div> -->
<style>
	.gallery_wrap{width:100%;}
	.gallery_wrap>ul{width:100%;overflow:hidden}
	.gallery_wrap>ul>li{float:left;width:25%}
</style>

<div class="gallery_wrap" style="display:none;">
	<ul>
		<li>
			<?php echo latest('theme/basic','free',5, 15); ?>
		</li>
		<li>
			<?php echo latest('theme/basic','free',5, 15); ?>
		</li>
		<li>
			<?php echo latest('theme/basic','gallery',5, 23); ?>
		</li>
		<li>
			<?php echo latest('theme/basic','qa',5, 23); ?>
		</li>
	  </ul>
</div>

<div style="margin-top:20px;margin-bottom:20px;">
	<?php echo latest('theme/180910','notice',2, 25);?>
</div>

<div style="margin-bottom:20px;">
	<?php echo latest('theme/kkang','free',4, 20);?>
</div>

<div style="margin-bottom:20px;">
	<?php echo latest('theme/kkang','gallery',4, 20);?>
</div>

<div style="margin-bottom:20px;">
	<?php echo latest('theme/kkang','qa',4, 20);?>
</div>

<div class="latest_wr" style="display:none;">
    <!--  사진 최신글2 { -->
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('theme/pic_basic', 'gallery', 5, 23);
    ?>
    <!-- } 사진 최신글2 끝 -->
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>