<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"/bweb/www.buy297.com/jiubanben/application/index/view/index/index.html";i:1511403309;s:63:"/bweb/www.buy297.com/jiubanben/application/index/view/base.html";i:1511319345;}*/ ?>
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

<link href="__HOME__/dist/css/wx_qt_index.css" rel="stylesheet">
<link href="__HOME__/dist/css/animate.min.css" rel="stylesheet">

</head>


<!--轮播-->
<div class="wx_qt_header">
		<div class="wx_qt_index_ds">
			<!--地址栏-->
			<span class="wx_qt_index_ds_dz">丽水</span>
			<!--搜索栏-->
			<div class="wx_qt_index_ds_ss">
				<form>
					<input type="text" placeholder="请输入搜索内容" class="wx_qt_index_ds_ss_input">
					<input type="image" src="__HOME__/dist/images/index_ss.png" class="wx_qt_index_ds_ss_input_img">
				</form>
			</div>
			<a href="<?php echo url('personal'); ?>"><img src="__HOME__/dist/images/index_yhzx.png" class="wx_qt_index_grzx_img"></a>
		</div>
		<!--轮播-->
		<div class="wx_qt_index_slider_box">
			<div class="wx_qt_index_slider_img">
				<img src="__UPLOAD__/<?php echo $xinxi['lb_img1']; ?>">
				<img src="__UPLOAD__/<?php echo $xinxi['lb_img2']; ?>">
			</div>
			<div class="wx_qt_index_slider_sx">
				<div class="wx_qt_index_slider_sx_pre"></div>
				<div class="wx_qt_index_slider_sx_next"></div>
			</div>
		</div>
	</div>
<div class="wx_qt_index_main_box">
	<!--分类-->
	<div class="wx_qt_fl_box_box">
		<div class="wx_qt_fl_box">
			<div class="wx_qt_fl_box_main"><a href="<?php echo url('yqfc'); ?>">
				<img src="__HOME__/dist/images/index_fl4.png">
				<p>园区风采</p>
			</a></div>	
			<div class="wx_qt_fl_box_main"><a href="<?php echo url('zsyz'); ?>">
				<img src="__HOME__/dist/images/index_fl3.png">
				<p>招商引资</p>
			</a></div>
			<div class="wx_qt_fl_box_main"><a href="<?php echo url('qyfw','id='.$pagintor['4']['id']); ?>">
				<img src="__UPLOAD__/<?php echo $pagintor['4']['img']; ?>">
				<p><?php echo $pagintor['4']['name']; ?></p>
			</a></div>
			<div class="wx_qt_fl_box_main"><a href="<?php echo url('qyfw','id='.$pagintor['0']['id']); ?>">
				<img src="__UPLOAD__/<?php echo $pagintor['0']['img']; ?>">
				<p><?php echo $pagintor['0']['name']; ?></p>
			</a></div>
			<div class="wx_qt_fl_box_main"><a href="<?php echo url('qyfw','id='.$pagintor['1']['id']); ?>">
				<img src="__UPLOAD__/<?php echo $pagintor['1']['img']; ?>">
				<p><?php echo $pagintor['1']['name']; ?></p>
			</a></div>
			<div class="wx_qt_fl_box_main"><a href="<?php echo url('qyfw','id='.$pagintor['2']['id']); ?>">
				<img src="__UPLOAD__/<?php echo $pagintor['2']['img']; ?>">
				<p><?php echo $pagintor['2']['name']; ?></p>
			</a></div>
			<div class="wx_qt_fl_box_main"><a href="<?php echo url('qyfw','id='.$pagintor['3']['id']); ?>">
				<img src="__UPLOAD__/<?php echo $pagintor['3']['img']; ?>">
				<p><?php echo $pagintor['3']['name']; ?></p>
			</a></div>
			
			<div class="wx_qt_fl_box_main"><a href="<?php echo url('qbfl'); ?>">
				<img src="__HOME__/dist/images/index_fl8.png">
				<p>全部分类</p>
			</a></div>	
		</div>
	</div>
</div>
	<!--广播-->
	<div class="guangbo">
        <img src="__HOME__/dist/images/guangbo.png" alt="广播" class="pulse animated infinite">
        <ul class="guangbo_text">
            <ul class="guangbo_text_ul1">
                <li><a href="#">11111习近平总书记会见全国道德模范代表引发强烈反响领航新征程</a></li>
                <li><a href="#">习近平总书记会见全国道德模范代表引发强烈反响领航新征程</a></li>
                <li><a href="#">习近平总书记会见全国道德模范代表引发强烈反响领航新征程</a></li>
                <li><a href="#">习近平总书记会见全国道德模范代表引发强烈反响领航新征程</a></li>
                <li><a href="#">习近平总书记会见全国道德模范代表引发强烈反响领航新征程</a></li>
                <li><a href="#">习近平总书记会见全国道德模范代表引发强烈反响领航新征程</a></li>
                <li><a href="#">习近平总书记会见全国道德模范代表引发强烈反响领航新征程</a></li>
                <li><a href="#">习近平总书记会见全国道德模范代表引发强烈反响领航新征程</a></li>
                <li><a href="#">习近平总书记会见全国道德模范代表引发强烈反响领航新征程</a></li>
                <li><a href="#">习近平总书记会见全国道德模范代表引发强烈反响领航新征程</a></li>
            </ul>
            <ul class="guangbo_text_ul2"></ul>

        </ul>

	</div>
	<!--入园企业风采-->
	<div class="wx_qt_fc_box">
		<h1><a href="<?php echo url('gslb'); ?>">入园企业风采</a></h1>
		<div class="wx_qt_fc_box_main">
			<?php if(is_array($pagintor1) || $pagintor1 instanceof \think\Collection || $pagintor1 instanceof \think\Paginator): $i = 0; $__LIST__ = $pagintor1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
			<div class="wx_qt_fc_box_main_con"><a href="<?php echo url('aboutc','id='.$item['id']); ?>">
				<img src="__UPLOAD__/<?php echo $item['img']; ?>">
				<p><?php echo $item['name']; ?></p>
			</a></div>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			<div class="wx_qt_fc_box_main_con"><a href="<?php echo url('gslb'); ?>">
				<img src="__HOME__/dist/images/index_qyfc4.png">
				<p>更多企业&gt;&gt;</p>
			</a></div>
		</div>
	</div>

<!--底部banner-->
<img src="__UPLOAD__/<?php echo $xinxi['db_img']; ?>" class="wx_qt_index_banner_bt">
<!-- 底部栏显示标识 -->
<div class="wx_qt_dbgdl_active">0</div>

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

<script src="__HOME__/dist/js/index_slider.js"></script>
<script src="__HOME__/dist/js/hd.js"></script>
<script src="__HOME__/dist/js/hd_kz.js"></script>
<script src="__HOME__/dist/js/wx_index_text.js"></script>

</html>
