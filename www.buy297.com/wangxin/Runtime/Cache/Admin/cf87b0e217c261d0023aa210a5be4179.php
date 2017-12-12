<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="en">

<head>

<title>网新后台</title>

<meta charset="UTF-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="/Public/admin/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="/Public/admin/css/style.css"/>       
        <link href="/Public/admin/css/codemirror.css" rel="stylesheet">
        <link rel="stylesheet" href="/Public/admin/css/ace.min.css" />
        <link rel="stylesheet" href="/Public/admin/css/font-awesome.min.css" />
        <style type="text/css">
        .qylr tr td{
          width: 50px;height:100px;
        }
        .qylrs{
          width: 50px;height:100px;
          overflow: hidden;
        }
      </style>
    <script src="/Public/admin/js/jquery.min.js"></script>
    <script type="text/javascript">
      window.jQuery || document.write("<script src='/Public/admin/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
    </script>
    <script type="text/javascript">
      if("ontouchend" in document) document.write("<script src='/Public/admin/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
    </script>
    <script src="/Public/admin/js/bootstrap.min.js"></script>
    <script src="/Public/admin/js/typeahead-bs2.min.js"></script>
    <!-- page specific plugin scripts -->
    <script src="/Public/admin/js/jquery.dataTables.min.js"></script>
    <script src="/Public/admin/js/jquery.dataTables.bootstrap.js"></script>
        <script type="text/javascript" src="/Public/admin/js/H-ui.js"></script> 
        <script type="text/javascript" src="/Public/admin/js/H-ui.admin.js"></script> 
        <script src="/Public/admin/layer/layer.js" type="text/javascript" ></script>
        <script src="/Public/admin/laydate/laydate.js" type="text/javascript"></script>
  
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

  <div class="page-content clearfix">
    <div id="Member_Ratings">
      <div class="d_Confirm_Order_style">
    <div class="search_style">
      <div class="title_names">搜索查询</div>
      <ul class="search_content clearfix">
        <form method="post" action=<?php echo U('index/widgets');?>>
         <li><label class="l_f">订单用户</label><input name="name" type="text"  class="text_add" placeholder="输入公司名称"  style=" width:400px"/></li>
         <li style="width:90px;"><input type="submit" class="btn_search"></input></li>
       </form>
      </ul>
    </div>
     <!---->
     <div class="border clearfix">
      <span class="l_f" style="margin-top:10px">
        <a href="<?php echo U('complain/excelqiye');?>" id="member_add" class="btn btn-warning">企业录入信息导出</a>
        <a href="<?php echo U('complain/addqylr');?>" id="member_add" class="btn btn-warning">添加录入内容</a>
       </span>
       <span class="l_f">
       </span>
       <span class="r_f" >共：<b><?php echo ($count); ?></b>条</span>
     </div>
     <!---->
     <div class="table_menu_list">
       <table class="table table-striped table-bordered table-hover qylr" id="sample-table">
    <thead>
    <!--   <tr>
<?php if(is_array($c)): $i = 0; $__LIST__ = $c;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vs): $mod = ($i % 2 );++$i;?><th width="100">
          <a href="<?php echo U('Complain/qylr',array('id'=>$vs["id"],'state'=>'1'));?>"> 
             <?php if(($vs['inputstatus']) == "1"): ?><div style="border:1px solid #ccc;border-radius:8px;width:100px;height:30px;text-align:center;line-height:30px">
              点击停用
              </div>
            <?php else: ?>
            <div style="border:1px solid green;border-radius:8px;width:100px;height:30px;text-align:center;line-height:30px">
              点击可用
            </div><?php endif; ?>
          </a>
        </th><?php endforeach; endif; else: echo "" ;endif; ?>   
      </tr> -->
     <tr>
        <!-- <th width="80">批次</th> -->
      <?php if(is_array($c)): $i = 0; $__LIST__ = $c;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><th width="100"><?php echo ($v['inputname']); ?></th><?php endforeach; endif; else: echo "" ;endif; ?>
        <!-- <th width="80">公司法人</th>
        <th width="120">公司地址</th>
        <th width="150">公司电话</th>
        <th width="">主营业务</th> -->
        <!-- <th width="180">产品代表</th> -->
        <!-- <th width="180">新增成果</th> -->
        <!-- <th width="180">主要指标</th> -->
        <!-- <th width="180">从业人数</th> -->
        <!-- <th width="180">创业人数</th> -->
        <!-- <th width="180">技术职称</th> -->
        <!-- <th width="180">高新企业</th> -->
        <!-- <th width="180">科技企业</th> -->
        <!-- <th width="180">专利数量</th> -->
        <!-- <th width="180">有效专利</th> -->
        <!-- <th width="180">软件著作权</th> -->
        <!-- <th width="180">注册地址</th> -->
        <!-- <th width="180">缴税地址</th> -->
      </tr>
    </thead>
  <tbody>
   <tr>
      <?php if(is_array($con)): $i = 0; $__LIST__ = $con;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><!-- <td><div class="qylrs"><?php echo ($v['pici']); ?></td></div> -->
          <td><div class="qylrs"><?php echo ($v['gs_name']); ?></td></div>
          <td><div class="qylrs"><?php echo ($v['gs_faren']); ?></td></div>
          <td><div class="qylrs"><?php echo ($v['gs_add']); ?></td></div>
          <td><div class="qylrs"><?php echo ($v['gs_tel']); ?></td> </div>
          <td><div class="qylrs"><?php echo ($v['gs_yw']); ?></td></div>
          <!-- <td><div class="qylrs"><?php echo ($v['gs_cp']); ?></td></div> -->
          <!-- <td><div class="qylrs"><?php echo ($v['gs_cg']); ?></td></div> -->
          <!-- <td><div class="qylrs"><?php echo ($v['gs_zb']); ?></td> </div> -->
          <!-- <td><div class="qylrs"><?php echo ($v['congy_renshu']); ?></td></div> -->
          <td><div class="qylrs"><?php echo ($v['cy_renshu']); ?></td></div>
          <!-- <td><div class="qylrs"><?php echo ($v['gs_js']); ?></td></div> -->
          <!-- <td><div class="qylrs"><?php echo ($v['gx_qiye']); ?></td> </div> -->
          <!-- <td><div class="qylrs"><?php echo ($v['kj_qiye']); ?></td></div> -->
           <!-- <td><div class="qylrs"><?php echo ($v['zl_shuliang']); ?></td></div> -->
           <!-- <td><div class="qylrs"><?php echo ($v['yx_zhuanli']); ?></td></div> -->
          <!-- <td><div class="qylrs"><?php echo ($v['gs_zzq']); ?></td></div> -->
          <td><div class="qylrs"><?php echo ($v['zc_add']); ?></td></div>
          <td><div class="qylrs"><?php echo ($v['js_add']); ?></td></div>
          
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>       
      </tbody>
  </table>
   </div>
   <div class="page"><?php echo ($page); ?></div>
  </div>
 </div>
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