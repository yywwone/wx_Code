<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:59:"/bweb/www.buy297.com/application/index/view/index/qbfl.html";i:1509589603;s:53:"/bweb/www.buy297.com/application/index/view/base.html";i:1511319345;}*/ ?>
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

<link href="__HOME__/dist/css/wx_qt_foot.css" rel="stylesheet">
<link href="__HOME__/dist/css/wx_qt_qbfl.css" rel="stylesheet">

</head>


<div class="wx_qbfl_nav_box">
	<!--侧边导航-->
	<div class="wx_qbfl_nav_box_left">
		<?php if(is_array($pagintor) || $pagintor instanceof \think\Collection || $pagintor instanceof \think\Paginator): $i = 0; $__LIST__ = $pagintor;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
		<div class="wx_qbfl_nav"><?php echo $item['name']; ?></div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
	<!--内容-->
	<div class="wx_qbfl_nav_box_right">
		<?php if(is_array($pagintor) || $pagintor instanceof \think\Collection || $pagintor instanceof \think\Paginator): $i = 0; $__LIST__ = $pagintor;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;
			$er=db('fuwu')->where('f_id',$item['id'])->select();
		?>
		<div class="wx_qbfl_nav_main_box">
			<?php if(is_array($er) || $er instanceof \think\Collection || $er instanceof \think\Paginator): $i = 0; $__LIST__ = $er;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item1): $mod = ($i % 2 );++$i;
				$san=db('fuwu')->where('f_id',$item1['id'])->select();
			?>
			<div class="wx_qt_nav_main">
				<h2><?php echo $item1['name']; ?></h2>
				<div class="wx_qt_nav_main_con_box">
					<?php if(is_array($san) || $san instanceof \think\Collection || $san instanceof \think\Paginator): $i = 0; $__LIST__ = $san;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item2): $mod = ($i % 2 );++$i;?>
					<div class="wx_qt_nav_main_con"><a href="<?php echo url('xqym','id='.$item2['id']); ?>">
						<img src="__UPLOAD__/<?php echo $item2['img']; ?>">
						<p><?php echo $item2['name']; ?></p>
					</a></div>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
</div>
<!-- 底部栏显示标识 -->
<div class="wx_qt_dbgdl_active">1</div>

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
<script src="__HOME__/dist/js/wx_qt_qbfl_tab.js"></script>

</html>
