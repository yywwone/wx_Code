<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:59:"/bweb/www.buy297.com/application/index/view/index/xqym.html";i:1510043429;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title></title>
<link rel="icon" href="__HOME__/dist/images/" type="image/x-icon"/>
<!--通用CSS-->
<link href="__HOME__/dist/css/reset1.css" rel="stylesheet">
<!--本页CSS-->
<link href="__HOME__/dist/css/wx_qt_xqym.css" rel="stylesheet">
<style type="text/css">
	.t::-webkit-scrollbar {
		width: 0px;
		height: 1px;
}
</style>
</head>
<div class="wx_qt_xqym_header_img">
	<img src="__UPLOAD__/<?php echo $fu['image']; ?>">
</div>
<div class="wx_qt_xqym_tit_box">
	<div class="wx_qt_xqym_tit">
		<img src="__HOME__/dist/images/xqym_icon1.png">
		<p>闪电响应</p>
	</div>
	<img src="__HOME__/dist/images/xqym_icon4.png" class="wx_qt_xqym_tit_icon_sx">
	<div class="wx_qt_xqym_tit">
		<img src="__HOME__/dist/images/xqym_icon2.png">
		<p>资质认证</p>
	</div>
	<img src="__HOME__/dist/images/xqym_icon4.png" class="wx_qt_xqym_tit_icon_sx">
	<div class="wx_qt_xqym_tit">
		<img src="__HOME__/dist/images/xqym_icon3.png">
		<p>售后无忧</p>
	</div>
</div>
<!--选项卡-->
<div class="wx_qt_xqym_tab_tit_box">
		<div class="wx_qt_xqym_tab_tit">服务介绍</div>
		<div class="wx_qt_xqym_tab_tit">服务流程</div>
		<div class="wx_qt_xqym_tab_tit">服务评价</div>
</div>
<div class="wx_qt_xqym_tab_box">
	<!--标题-->
	<div class="wx_qt_xqym_tab_con_box">
		<div class="wx_qt_xqym_tab_con" >
			<textarea   class='t'    readonly="readonly" style="border:none;width:100%;height:400px"><?php echo $fu['fw_js']; ?></textarea>
		</div>
		<div class="wx_qt_xqym_tab_con">
			<textarea   class='t'    readonly="readonly" style="border:none;width:100%;height:400px"><?php echo $fu['fw_lc']; ?></textarea>
		</div>
		<div class="wx_qt_xqym_tab_con">
			<div class="wx_qt_xqym_tab_con_slider_box">
				<?php if(is_array($pagintor) || $pagintor instanceof \think\Collection || $pagintor instanceof \think\Paginator): $i = 0; $__LIST__ = $pagintor;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
					<div class="wx_qt_xqym_tab_con_text"><?php echo $item['pj_name']; ?> ：<?php echo $item['pj_nr']; ?>
				
					</div>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<!-- <div class="wx_qt_xqym_tab_con_slider_box2"></div> -->
			<div class="wx_qt_xqym_foot_zw"></div>
		</div>
	</div>
</div>
<!--底部固定栏-->
<div class="wx_qt_xqym_foot_zw"></div>
<div class="wx_qt_xqym_foot_box">
	<div class="wx_qt_xqym_foot_main"><a href="<?php echo url('gyslb','id='.$fu['id']); ?>">
		<svg class="wx_qt_xqym_icon " aria-hidden="true">
			<use xlink:href="#icon-duoren"></use>
		</svg>
		<span>选择服务商</span>
	</a></div>
	<img src="__HOME__/dist/images/xqjm_foot_icon.png" class="wx_qt_xqjm_foot_icon">
	<div class="wx_qt_xqym_foot_main"><a href="tel:05782095085">
		<svg class="wx_qt_xqym_icon " aria-hidden="true">
			<use xlink:href="#icon-dianhua"></use>
		</svg>
		<span>联系我们</span>
	</a></div>
</div>
<!--通用JS-->
<script src="__HOME__/dist/js/jquery-1.11.1.min.js"></script>
<script src="__HOME__/dist/js/rem.js"></script>
<!--本页JS-->
<script src="__HOME__/dist/js/wx_qt_xqym.js"></script>
<script src="__HOME__/dist/js/font_440400_waj7qmu35o2yb9.js"></script>
<script src="__HOME__/dist/js/xqym_slider.js"></script>   
</html>
