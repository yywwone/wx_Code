<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="en">

<head>

<title>网新后台</title>

<meta charset="UTF-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" href="/Public/admin/css/aboutc.css"/>   
<link href="/Public/admin/css/reset1.css" rel="stylesheet" /> 
    
<link rel="stylesheet" href="/Public/admin/css/bootstrap.min.css" />

<link rel="stylesheet" href="/Public/admin/css/bootstrap-responsive.min.css" />

<link rel="stylesheet" href="/Public/admin/css/fullcalendar.css" />

<link rel="stylesheet" href="/Public/admin/css/matrix-style.css" />

<link rel="stylesheet" href="/Public/admin/css/matrix-media.css" />

<link href="/Public/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />

<link rel="stylesheet" href="/Public/admin/css/jquery.gritter.css" />
<link rel="stylesheet" href="/Public/admin/css/page.css" />
<style type="text/css">
 .table_tr_td tr td{
  width:120px;height:150px;
 }
</style>
</head>

<body>



<!--Header-part-->

<div id="header">
  <div style="width:100px;height:30px"></div>
<b><a href="<?php echo U('index/index');?>" style="color:green;font-size:30px;margin-left:30px" ><?php echo session('type')['name'];?></a></b>

</div>
<div id="search">
  <!-- <input type="text" placeholder="Search here..."/> -->
 <div style="width:20px;height:4px"></div>
 <!-- <a href="http://www.buy297.com" style="font-size:13px;margin-right:30px;" target="view_frame">站点首页</a> -->
  <a href="<?php echo U('index/uplogin');?>" style="font-size:13px;margin-right:20px">退出登录</a>
</div>
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> one</a>

  <ul>

      <li><a href="<?php echo U('index/index');?>"><i class="icon icon-home"></i> <span>网站管理</span></a> </li>
      <?php if(session('type')['quan']=='1'): ?><li> <a href="<?php echo U('index/accout');?>"><i class="icon icon-signal"></i> <span>园区账号管理</span></a> </li><?php endif; ?>
    <li> <a href="<?php echo U('index/widgets');?>"><i class="icon icon-inbox"></i> <span>订单管理</span></a> </li>

    <li><a href="<?php echo U('index/tables');?>"><i class="icon icon-th-list"></i> <span>用户管理</span></a></li>
    <li><a href="<?php echo U('index/facilitator');?>"><i class="icon icon-th"></i> <span>服务商管理</span></a></li>

    <li><a href="<?php echo U('index/qylr');?>"><i class="icon icon-calendar"></i> <span>企业录入信息</span></a></li>
    <li><a href="<?php echo U('index/grid');?>"><i class="icon icon-fullscreen"></i> <span>服务管理</span></a></li>

    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>投诉&评论&活动</span><!--  <span class="label label-important">3</span> --></a>
      <ul>
        <li><a href="<?php echo U('complain/complain');?>">投诉</a></li>
        <li><a href="<?php echo U('complain/comment');?>">评论</a></li>
        <li><a href="<?php echo U('complain/hdlist');?>">活动</a></li>
      </ul>
    </li>
  </ul>

</div>

<!--sidebar-menu-->



<!--main-container-part-->

<div id="content">

<!--breadcrumbs-->

  <div id="content-header">

    <div id="breadcrumb"> <a href="<?php echo U('index/index');?> 
      " title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>

  </div>

<!--End-breadcrumbs-->



<!--Action boxes-->

	<div style="margin-left:34%">
      <form method="post" action="<?php echo U('Complain/addqylr');?>">

<input type="text" name="name" placeholder="录入信息名称" id="goname">
<input type="text" name="yunm" placeholder="录入信息英文名" onKeyUp="value=value.replace(/[^a-zA-Z]/g,'')" id="goyuan">
<input type="submit" id='submit' style="margin-top:-10px">
      </form>

	</div>
   <div class="box">
      
            <h2>企业录入信息状态修改</h2>
        <div class="xq_main">
        	<table border="1">
                 <tr>
                 	<th>现有信息</th>
                 	<th>状态操作</th>
                 	<!-- <th></th> -->
                 </tr>
               
                    
                 
        	
        	<?php if(is_array($con)): $i = 0; $__LIST__ = $con;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                  <td width="300"><span style="width:100px;height:30px;margin-left:25%;text-align:center">

                  <?php echo ($v['inputname']); ?>
              </span></td>
                      <td width="300">
                      	<span style="width:100px;height:30px;margin-left:25%;text-align:center">
				          <a href="<?php echo U('Complain/qylr',array('id'=>$v["id"],'state'=>'1'));?>"> 
				             <?php if(($v['inputstatus']) == "1"): ?><div style="border:1px solid #ccc;border-radius:8px;width:100px;height:30px;text-align:center;line-height:30px">
				              点击停用
				              </div>
				            <?php else: ?>
				            <div style="border:1px solid green;border-radius:8px;width:100px;height:30px;text-align:center;line-height:30px">
				              点击可用
				            </div><?php endif; ?>
				          </a>
				          </span>
                      </td>
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
        </div>
      
		<!-- 底部栏显示标识 -->
	  </div>
	 
  </div>

</div>



<!--end-main-container-part-->



<!--Footer-part-->



<div class="row-fluid">

  <div id="footer" class="span12"><a href="http://themedesigner.in/"></a> </div>

</div>



<!--end-Footer-part-->



<script src="/Public/admin/js/excanvas.min.js"></script> 

<script src="/Public/admin/js/jquery.min.js"></script> 

<script src="/Public/admin/js/jquery.ui.custom.js"></script> 

<script src="/Public/admin/js/bootstrap.min.js"></script> 

<script src="/Public/admin/js/jquery.flot.min.js"></script> 

<script src="/Public/admin/js/jquery.flot.resize.min.js"></script> 

<script src="/Public/admin/js/jquery.peity.min.js"></script> 

<script src="/Public/admin/js/fullcalendar.min.js"></script> 

<script src="/Public/admin/js/matrix.js"></script> 

<script src="/Public/admin/js/matrix.dashboard.js"></script> 

<script src="/Public/admin/js/jquery.gritter.min.js"></script> 

<script src="/Public/admin/js/matrix.interface.js"></script> 

<script src="/Public/admin/js/matrix.chat.js"></script> 

<script src="/Public/admin/js/jquery.validate.js"></script> 

<script src="/Public/admin/js/matrix.form_validation.js"></script> 

<script src="/Public/admin/js/jquery.wizard.js"></script> 

<script src="/Public/admin/js/jquery.uniform.js"></script> 

<script src="/Public/admin/js/select2.min.js"></script> 

<script src="/Public/admin/js/matrix.popover.js"></script> 

<script src="/Public/admin/js/jquery.dataTables.min.js"></script> 

<script src="/Public/admin/js/matrix.tables.js"></script> 

        <script src="/Public/admin/js/jquery-1.11.1.min.js"></script>
        <script src="/Public/admin/js/font_440400_waj7qmu35o2yb9.js"></script>
        <!-- <script src="/Public/admin/js/rem.js"></script> -->
  <script type="text/javascript">
  	$(function(){
		  	function a11(){
		  		var a=$('#goname').val();
				var b=$('#goyuan').val();
				if(a==''||b==''){
				  $('#submit').attr('disabled','disabled')
				}else {
				  $('#submit').removeAttr("disabled")
				}
		  	}
		   $('#goname').blur(function(){
		    value = $('#goname').val();
		    a11()
		     $.ajax({
		            type:"post",
		            url:'<?php echo U("/Admin/Complain/ajaxacc");?>',
		            data:'name='+value,
		            // data:{"name":$('#goname').val(),"yuan":yuan},
		            
		            success:function(status){
		                if(status==1){
		                alert('企业名重复');
		                $('#goname').val("");
		                }
		            },
		            error:function(res){
		               alert('系统错误');
		            }
		        });
		    
   		 })
		$('#goyuan').blur(function(){
		    yuan = $('#goyuan').val();
		    a11()
		   })
		 $('#goname').keydown(function(){
		    	 a11()
		    });
		    $('#goyuan').keydown(function(){
		    	 a11()
		    });
	})
  </script>
        

<!-- <script type="text/javascript">

  // This function is called from the pop-up menus to transfer to

  // a different page. Ignore if the value returned is a null string:

  function goPage (newURL) {



      // if url is empty, skip the menu dividers and reset the menu selection to default

      if (newURL != "") {

      

          // if url is "-", it is this page -- reset the menu:

          if (newURL == "-" ) {

              resetMenu();            

          } 

          // else, send page to designated URL            

          else {  

            document.location.href = newURL;

          }

      }

  }



// resets the menu selection upon entry to this page:

function resetMenu() {

   document.gomenu.selector.selectedIndex = 2;

}

</script> -->

</body>

</html>