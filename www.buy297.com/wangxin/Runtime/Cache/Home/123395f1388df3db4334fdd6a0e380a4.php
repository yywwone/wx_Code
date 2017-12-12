<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>企业录入</title>
		<link href="/Public/home/dist/css/reset.css" type="text/css" rel="stylesheet" />
		<link href="/Public/home/dist/css/enter.css" type="text/css" rel="stylesheet" />
	</head>	
	<body>
		<div class="title">
			<p>带*为必填内容</p>
		</div>
		<table  border-collapse: collapse; class="mytable" border="1">
			<form action="<?php echo U('enter');?>" method="post">
				<tr class="fitr">
					<td colspan="4">公司名称<sup>*</sup></td>
					<td colspan="8">
						<input type="text" name="gs_name" placeholder="请填写您的公司名称" class="use-inp js-cpany" >
					</td>
				</tr>
				
				<tr class="fitr">
					<td colspan="4">法定代表人<sup>*</sup></td>
					<td colspan="8">
						<input type="text" name="gs_faren" placeholder="请输入法定代表人姓名" class="use-inp js-man" >
					</td>
				</tr>
				
				<tr class="fitr">
					<td colspan="4">公司地址<sup>*</sup></td>
					<td colspan="8">
						<input type="text" name="gs_add" placeholder="请输入公司地址（具体到楼层房间号）" class="use-inp js-gps" >
					</td>
				</tr>
				
				<tr class="fitr">
					<td colspan="4">联系电话<sup>*</sup></td>
					<td colspan="8">
						<input type="text" name="gs_tel" placeholder="请输入联系电话" class="use-inp js-tel1" >
					</td>
				</tr>
				
				<tr class="fitr">
					<td colspan="4">主营业务<sup>*</sup></td>
					<td colspan="8">
						<input type="text" name="gs_yw" placeholder="请输入公司主营业务" class="use-inp zhu-y" >
					</td>
				</tr>
				
				<tr class="fitr">
					<td colspan="4">代表产品</td>
					<td colspan="8">
						<input type="text" name="gs_cp" placeholder="请输入公司代表业务（产品）" class="use-inp" >
					</td>
				</tr>
				<!-- 选择性显示信息 -->
				<?php if(is_array($con)): $i = 0; $__LIST__ = $con;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; echo htmlspecialchars_decode($v['inputcon']); endforeach; endif; else: echo "" ;endif; ?>
				
		</table>
		<input type="submit" class="he-ii" value="确认提交"/>
		<div class="marsk-tips88">用户名不能为空</div>
		</form>
		<script src="/Public/home/dist/js/mobblie.js"></script>
		<script src="/Public/home/dist/js/jquery-1.11.0.min.js"></script>
		<script src="/Public/home/dist/js/enter.js"></script>
	</body>
</html>