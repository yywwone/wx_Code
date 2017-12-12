<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"/bweb/www.buy297.com/application/index/view/index/aboutc.html";i:1509607383;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>公司详情</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link href="__HOME__/dist/css/reset.css" type="text/css" rel="stylesheet" />
		<link href="__HOME__/dist/css/aboutc.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div class="company-banner-box">
			<img src="__UPLOAD__/<?php echo $item['image']; ?>">
		</div>
		<div class="company-logo-box">
			<h1><?php echo $item['name']; ?></h1>
		</div>
		<p class="p-main">
			<?php echo $item['xiangqing']; ?>
		</p>
		<div class="honor">
			<h3>企业荣誉</h3>
			<p class="honor-main">
				<?php echo $item['qy_rongyu']; ?>
			</p>
		</div>
		<!-- 底部栏显示标识 -->
		<script src="__HOME__/dist/js/mobblie.js"></script>
		<script src="__HOME__/dist/js/jquery-1.11.0.min.js"></script>
	</body>
</html>
