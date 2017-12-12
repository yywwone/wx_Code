<?php
namespace Admin\Controller;
use Think\Controller;
class ComplainController extends BaseController {
    public function comment(){
        $pingjia = M('pingjia');
        $fuwu = M('fuwu');
        $fuwushang = M('fuwushang');
        // if(I('post.name')) $where['name'] =array('like','%'.I('post.name').'%');
        $count = $pingjia->where($where)->count();
        $Page       = new \Think\Page($count,8);
        $show       = $Page->show();// 分页显示输出
        $this->con = $pingjia ->where()
                         ->alias('g')
                         ->limit($Page->firstRow.','.$Page->listRows)
                         ->join('left join fuwu AS o ON g.f_id=o.id')
                         ->join('left join fuwushang AS d ON g.fws_id=d.id')
                         ->field('pj_name,o.name,d.name as fws_name,pj_nr,o.name as f_name')
                         ->select();
                         // echo "<pre>";
                         // var_dump($con);exit;
                         $this->page=$show;
    	$this->display();  
    }
    public function complain(){
        $tousu = M('tousu');
        $user = M('wx_user');
        if(I('post.name')) $where['name_id|neirong'] =array('like','%'.I('post.name').'%');
        $count = $tousu->where($where)->count();
        $Page       = new \Think\Page($count,8);
        $show       = $Page->show();// 分页显示输出
        $this->con = $tousu->alias('g')
	                         ->limit($Page->firstRow.','.$Page->listRows)
	                         ->join('left join wx_user AS o ON g.name_id=o.openid')
	                         ->field('neirong,o.name as u_name')
	                          ->where($where)
	                         ->select();
                         // echo "<pre>";
                         // var_dump($con);exit;
                         $this->page=$show;
    	$this->display();  
    }
    // 用户数据导出
    public function excel(){
        $data = M('wx_user');
        $datas = $data->where()->field('name,add,tel')->select(); 
        // $dataResult = array('1','3','4');
        $headTitle = "微信用户资料"; 
        $title = "微信用户"; 
        $headtitle= "<tr style='height:50px;border-style:none;><th border=\"0\" style='height:60px;width:270px;font-size:22px;' colspan='11' >用户资料</th></tr>"; 
        $titlename = "<tr> 
                   <th  >微信用户名</th> 
                   <th >地址</th> 
                   <th >联系电话</th> 
               </tr>"; 
               $filename = $title.".xls"; 
           $this->excelData($datas,$titlename,$headtitle,$filename); 
                
    }
    //企业信息导出
    public function excelqiye(){
         $data = M('qy_luru');
        $datas = $data->where()->field('yuan',true)->select(); 
        // $dataResult = array('1','3','4');
        $headTitle = "企业信息"; 
        $title = "企业信息"; 
        $headtitle= "<tr style='height:50px;border-style:none;><th border=\"0\" style='height:60px;width:270px;font-size:22px;' colspan='11' >用户资料</th></tr>"; 
        $titlename = "<tr> 
        <th>批次</th>
        <th>公司名称</th>
        <th>公司法人</th>
        <th>公司地址</th>
        <th>公司电话</th>
        <th>主营业务</th>
        <th>产品代表</th>
        <th>新增成果</th>
        <th>主要指标</th>
        <th>从业人数</th>
        <th>创业人数</th>
        <th>技术职称</th>
        <th>高新企业</th>
        <th>科技企业</th>
        <th>专利数量</th>
        <th>有效专利</th>
        <th>软件著作权</th>
        <th>注册地址</th>
        <th>缴税地址</th>
               </tr>"; 
               $filename = $title.".xls"; 
           $this->excelData($datas,$titlename,$headtitle,$filename); 
    }
    // 服务商信息导出
    public function excelfuwushang(){
        $data = M('fuwushang');
        $datas = $data->where()->field('name,fuzeren,tel,add')->select(); 
        // $dataResult = array('1','3','4');
        $headTitle = "服务商用户资料"; 
        $title = "服务商信息"; 
        $headtitle= "<tr style='height:50px;border-style:none;><th border=\"0\" style='height:60px;width:270px;font-size:22px;' colspan='11' >用户资料</th></tr>"; 
        $titlename = "<tr> 
                   <th  >服务商名称</th> 
                   <th >负责人</th> 
                   <th >联系电话</th> 
                   <th >地址</th> 
               </tr>"; 
               $filename = $title.".xls"; 
           $this->excelData($datas,$titlename,$headtitle,$filename); 
                    
    }

    public function excelData($datas,$titlename,$headtitle,$filename){
         $str = "<html xmlns:o=\"urn:schemas-microsoft-com:office:office\"\r\nxmlns:x=\"urn:schemas-microsoft-com:office:excel\"\r\nxmlns=\"http://www.w3.org/TR/REC-html40\">\r\n<head>\r\n<meta http-equiv=Content-Type content=\"text/html; charset=utf-8\">\r\n</head>\r\n<body>"; 
    $str .="<table border=1><head>".$titlename."</head>"; 
    $str .= $title; 
    foreach ($datas  as $key=> $rt ) 
    { 
        $str .= "<tr>"; 
        foreach ( $rt as $k => $v ) 
        { 
            $str .= "<td>{$v}</td>"; 
        } 
        $str .= "</tr>\n"; 
    } 
    $str .= "</table></body></html>"; 
    header( "Content-Type: application/vnd.ms-excel; name='excel'" ); 
    header( "Content-type: application/octet-stream" ); 
    header( "Content-Disposition: attachment; filename=".$filename ); 
    header( "Cache-Control: must-revalidate, post-check=0, pre-check=0" ); 
    header( "Pragma: no-cache" ); 
    header( "Expires: 0" ); 
    exit( $str ); 
    }
    public function fuwustate(){
        $db = M('dingdan');
        $con = $db->where(array('id'=>I('get.id')))->save(array('zhuangtai'=>'1'));
        if($con){
            $this->redirect('index/widgets');
        }
    }
    public function huodong(){
        $db = M('huodong');
        // 查询
        $this->list = $db->where(array('id'=>I('get.id')))->find();
        if($_POST){
        $where['content'] = I('post.content');
        $where['title'] = I('post.tit');
        $where['orders'] = I('post.order');
        $wheres['id'] = I('post.id');
        // echo "<pre>";
         // var_dump($wheres['id']);exit;
        if($wheres['id']>1){
            $this->con = $db->where(array('id'=>I('post.id')))->save($where);
            $this->redirect('Complain/hdlist');
        }else{
            $this->con = $db->where()->add($where);
            $this->redirect('Complain/hdlist');
        }
        }
        // var_dump(I('post.content'));exit;
        $this->display();
    }
    public function hdajax(){
          $db = M('huodong');
     if(I('post.order')){ 
        $where['orders'] = I('post.order');
        $con = $db->where($where)->find();
        if($con){
            $status    = 1;
            $this->ajaxReturn($status);
        }
    }
}
    public function hdlist(){
         $user = M('huodong');
        if(I('post.name')) $where['title'] =array('like','%'.I('post.name').'%');
        $count = $user->where($where)->count();
        $Page       = new \Think\Page($count,8);
        $show       = $Page->show();// 分页显示输出
        $this->con = $user->alias('g')
                             ->limit($Page->firstRow.','.$Page->listRows)
                              ->where($where)
                              ->order('orders asc')
                             ->select();
                         // echo "<pre>";
                         // var_dump($con);exit;
                         $this->page=$show;
                         $this->count=$count;
        $this->display();
    }
    public function hdcon(){
        $db = M('huodong');
        $where['id'] = I('get.id');
        $this->con = $db->where($where)->find();
        $this->display();
    }
    public function delehuodong(){
        $db = M('huodong');
        $where['id'] = I('get.id');
        if($where['id']){
            $con = $db->where($where)->delete();
            if($con){
                $this->redirect('Complain/hdlist');
            }
        }
    }
    public function qylr(){
          $db = M('qyinfo');
        if(I('get.id')){
            // 停用

            if(I('get.state')=='1'){
                $c=$db->where(array('id'=>I('get.id')))->field('inputstatus')->find();
                if($c['inputstatus']=='1'){
                    $where['inputstatus'] = '0';
                }else{
                    $where['inputstatus'] = '1';
                }
                $con = $db->where(array('id'=>I('get.id')))->save($where);
                if($con){
                    $this->redirect('admin/Complain/addqylr',array('aler'=>'2'));
                }else{
                    $this->redirect('admin/Complain/addqylr',array('aler'=>'3'));
                }
            }
    }
}
    public function addqylr(){
        $db = M('qyinfo');
        $this->con = $db->where()->field('inputname,id,inputstatus')->select();
        if(I('post.name')){
                $where['inputname'] = I('post.name');
                $str = '<tr class="fitr">
                    <td colspan="4">'.I('post.name').'</td>
                    <td colspan="8">
                        <input type="text" name="'.I("post.yunm").'" placeholder="请输入'.I('post.name').'" class="use-inp" >
                    </td>
                </tr>';
                $where['inputcon'] = $str;
                $cons = $db->add($where);
               if($cons){
                mysql_connect('rm-bp1244gtwt8ml35bdo.mysql.rds.aliyuncs.com','root','Buyun1233');
                mysql_select_db('wangxin');
                // $dbs = M('qy_luru');
                $sql = "ALTER TABLE `qy_luru` ADD `".I("post.yunm")."` text";
                mysql_query($sql);
                $this->redirect("Complain/addqylr");
               }

        }
        $this->display();

    }
    public function ajaxacc(){
        $db = M('qyinfo');
        $dbS = M('qy_luru');
     if(I('post.name')){ 
        $where['inputname'] = I('post.name');
        $con = $db->where($where)->find();
        if($con){
            $status    = 1;
        }
         }
        $this->ajaxReturn($status);
    }
}