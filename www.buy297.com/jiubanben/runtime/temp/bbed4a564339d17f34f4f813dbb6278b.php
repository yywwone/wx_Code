<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"/bweb/www.buy297.com/application/index/view/index/upuser.html";i:1509960515;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>补全信息</title>
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<style>
	*{padding: 0;margin: 0;text-decoration:none;list-style: none;font-family: 微软雅黑;outline: none;}
	.xxtx_box{
		width: 95%;
		height: 200px;
		margin:10px auto;

	}
	input{
		width: 100%;
		height: 30px;
		margin-bottom: 15px;
		padding-left: 5px;
		box-sizing: border-box;
	}
	input[type="submit"]{
		width: 50%;
		height: 30px;
	}
</style>
</head>

<body>
	<div class="xxtx_box">
		<form action="<?php echo url('upuser','id='.$id); ?>" method="post">
			<input type="text" name="z_name" class="" placeholder="请填写姓名" required>
			<input type="text" name="tel" class="" placeholder="请填写手机号"  required>
			<input type="text" name="add" class="" placeholder="请填写地址"  required>
			<input type="submit" class="" value="提交">
		</form>
	</div>	
</body>
</html>
