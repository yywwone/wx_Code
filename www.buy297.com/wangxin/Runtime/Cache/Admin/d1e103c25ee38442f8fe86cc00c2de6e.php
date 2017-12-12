<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="en">

    

<head>

        <title>后台管理系统</title><meta charset="UTF-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" href="/Public/admin/css/bootstrap.min.css" />

		<link rel="stylesheet" href="/Public/admin/css/bootstrap-responsive.min.css" />

        <link rel="stylesheet" href="/Public/admin/css/matrix-login.css" />

        <link href="/Public/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />

		 



    </head>

    <body>

        <div id="loginbox">            

            <form id="loginform" class="form-vertical" method="post" action="<?php echo U('index/login');?>">

				 <div class="control-group normal_text">后台管理系统</div>

                <div class="control-group">

                    <div class="controls">

                        <div class="main_input_box">

                            <span class="add-on bg_lg"><i class="icon-user"></i></span><input type="text" placeholder="账户名" name="name" />

                        </div>

                    </div>

                </div>

                <div class="control-group">

                    <div class="controls">

                        <div class="main_input_box">

                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" placeholder="登录密码" name="pwd" />

                        </div>

                    </div>

                </div>

                <div class="form-actions">

                   <!--  <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span> -->

                    <span style="float:left;margin-left:210px" class="pull-right"><input  style="width:100px;height:40px" type="submit" class="btn btn-success" /> </input></span>

                </div>

            </form>

            <form id="recoverform" action="#" class="form-vertical">

				<p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>

				

                    <div class="controls">

                        <div class="main_input_box">

                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />

                        </div>

                    </div>

               

                <div class="form-actions">

                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>

                    <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>

                </div>

            </form>

        </div>

        

        <script src="/Public/admin/js/jquery.min.js"></script>  

        <!-- <script src="/Public/admin/js/matrix.login.js"></script>  -->

    </body>



</html>