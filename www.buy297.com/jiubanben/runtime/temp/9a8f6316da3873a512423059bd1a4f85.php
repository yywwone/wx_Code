<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"/bweb/www.buy297.com/application/index/view/index/gyslb.html";i:1510043380;s:53:"/bweb/www.buy297.com/application/index/view/base.html";i:1511319345;}*/ ?>
﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>浙大网新</title>


<link rel="icon" href="__HOME__/dist/images/" type="image/x-icon"/>
<!--通用CSS-->
<link href="__HOME__/dist/css/reset1.css" rel="stylesheet">
<link href="__HOME__/dist/css/wx_qt_foot.css" rel="stylesheet">
<!--本页CSS-->

<link href="__HOME__/dist/css/wx_qt_gyslb.css" rel="stylesheet">

</head>


<?php if(is_array($pagintor) || $pagintor instanceof \think\Collection || $pagintor instanceof \think\Paginator): $i = 0; $__LIST__ = $pagintor;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;
	$arr=explode(",",$item['fu_id']);
	$arrr=in_array($id,$arr);
	if ($arrr) {
?>
<div class="wx_qt_gyslb_box">
	<div class="wx_qt_gyslb_box_top"></div>
	<div class="wx_qt_gyslb_main_box">
		<div class="wx_qt_gyslb_main_top">
			<div class="wx_qt_gyslb_main_top_left">
				<img src="__UPLOAD__/<?php echo $item['img']; ?>">
			</div>
			<div class="wx_qt_gyslb_main_top_right">
				<h2 class="wx_qt_gyslb_main_top_right_tit"><?php echo $item['name']; ?></h2>
				<p class="wx_qt_gyslb_main_top_right_text">负责人：<?php echo $item['fuzeren']; ?></p>
				<p class="wx_qt_gyslb_main_top_right_text2">综合实力</p>
				<div class="wx_qt_gyslb_main_top_right_img">
					<img src="__HOME__/dist/images/gyslb_xing1.png">
					<img src="__HOME__/dist/images/gyslb_xing1.png">
					<img src="__HOME__/dist/images/gyslb_xing1.png">
					<img src="__HOME__/dist/images/gyslb_xing1.png">
					<img src="__HOME__/dist/images/gyslb_xing2.png">
				</div>
			</div>
		</div>
		<div class="wx_qt_gyslb_main_bottom">
			<div class="wx_qt_gyslb_main_bottom_main">
				<svg class="wx_qt_gyslb_main_bottom_main_icon " aria-hidden="true">
					<use xlink:href="#icon-querenxiadan-xuanze"></use>
				</svg>
				<?php $fw_id=input('id'); ?>
				<a href="<?php echo url('xiadan',['fws_id'=>$item['id'],'fw_id'=>$id]); ?>">确认下单</a>
			</div>
			<div class="wx_qt_gyslb_main_bottom_main">
				<a href="<?php echo url('aboutc','id='.$item['id']); ?>">
					<span class="wx_qt_gslb_icon_text">查看详情</span>
					<svg class="wx_qt_gslb_icon" aria-hidden="true">
						<use xlink:href="#icon-chakangengduo"></use>
					</svg>
				</a>
			</div>
		</div>
	</div>
</div>
<?php	
}
endforeach; endif; else: echo "" ;endif; ?>

<!--底部-->
<div class="wx_qt_foot_zw"></div>
<div class="wx_qt_foot">
	<div class="wx_qt_foot_top"></div>
	<div class="wx_qt_foot_main_box">
		<div class="wx_qt_foot_main_con wx_qt_foot_main_con_active"><a href="<?php echo url('index'); ?>">
			<svg class="wx_qt_foot_icon" aria-hidden="true">
				<use xlink:href="#icon-shouye-copy"></use>
			</svg>
			<p class="">园区首页</p>
		</a></div>
		<div class="wx_qt_foot_main_con"><a href="<?php echo url('qbfl'); ?>">
			<svg class="wx_qt_foot_icon" aria-hidden="true">
				<use xlink:href="#icon-fenlei"></use>
			</svg>
			<p>分类</p>
		</a></div>
		<div class="wx_qt_foot_main_con"><a href="#">
            <!--<a href="<?php echo url('zsyz'); ?>">-->
			<svg class="wx_qt_foot_icon" aria-hidden="true">
				<use xlink:href="#icon-zhaoshang"></use>
			</svg>
			<p>论坛</p>
		</a></div>
		<?php 
			if (session('user')) {
		?>

		<div class="wx_qt_foot_main_con"><a href="<?php echo url('personal'); ?>">
			<svg class="wx_qt_foot_icon" aria-hidden="true">
				<use xlink:href="#icon-iconfontyonghu-copy"></use>
			</svg>
			<p>用户中心</p>
		</a></div>
		<?php		
			}else{

		?>
		<div class="wx_qt_foot_main_con"><a href="<?php echo url('gslb/gslb'); ?>">
			<svg class="wx_qt_foot_icon" aria-hidden="true">
				<use xlink:href="#icon-iconfontyonghu-copy"></use>
			</svg>
			<p>用户中心</p>
		</a></div>
		<?php		
			}
		?>
	</div>
</div>
<!--通用JS-->
<script src="__HOME__/dist/js/jquery-1.11.1.min.js"></script>
<script src="__HOME__/dist/js/rem.js"></script>
<script src="__HOME__/dist/js/font_440400_waj7qmu35o2yb9.js"></script>
<script src="__HOME__/dist/js/wx_qt_foot_active.js"></script>
<!--本页JS-->

<script src="__HOME__/dist/js/font_440400_waj7qmu35o2yb9.js"></script>

</html>
