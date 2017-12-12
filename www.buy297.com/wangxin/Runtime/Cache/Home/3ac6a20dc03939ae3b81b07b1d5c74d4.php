<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>评价</title>
		<link href="/Public/home/dist/css/reset.css" type="text/css" rel="stylesheet" />
		<link href="/Public/home/dist/css/evaluate.css" type="text/css" rel="stylesheet" />
		
	</head>
	<body>
		<!--展示内容-->
		<div class="ev-company-box">
			<div class="left-name" style="float: left;">
				<div class="ev-name">项目名称:<span><?php echo ($item["fw_name"]); ?></span></div>
				<div class="ev-pname">服务公司:<span><?php echo ($item["fws_name"]); ?></span></div>
			</div>
			<div class="ev-time">
				<p>开始时间：<span><?php echo ($item["create_time"]); ?></span></p>
				<p>结束时间：<span><?php echo ($item["over_time"]); ?></span></p>
			</div>	
		</div>
		<!--星评价-->
		<div class="icon-star-box" >
			<ul class="icon-star js-star">
				<li class="js-star-list"></li>
				<li  class="js-star-list"></li>
				<li  class="js-star-list"></li>
				<li  class="js-star-list"></li>
				<li  class="js-star-list"></li>
			</ul>
		</div>
		<!--提交-->
		<form action="<?php echo U('evaluate','id='.$item['id']);?>" method="post">
			<textarea  name="pingjia" class="write"/ ></textarea>
			<input type="submit"  value="提交" class="eval-sub"/>
			<input type="hidden"/ name="xing" class="hide" value="2">
		</form>
		<script src="/Public/home/dist/js/mobblie.js"></script>
		<script src="/Public/home/dist/js/jquery-1.11.0.min.js"></script>
		<script src="/Public/home/dist/js/evaluate.js"></script>
		<script type="text/javascript">
            
            if(<?php echo I('get.alert');?>=='2'){
            	alert('请重新提交评价');
            }
		</script>
	</body>
</html>