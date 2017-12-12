<?php
namespace app\index\controller;

class Index extends Base
{
    
    public function index()
    {
        $pagintor=db('fuwu')->where('f_id',0)->paginate(5);
        $pagintor1=db('fuwushang')->paginate(3);
        $xinxi=db('wzxx')->where('id',1)->find();
        $this->assign('xinxi', $xinxi);
        $this->assign('pagintor', $pagintor);
         $this->assign('pagintor1', $pagintor1);
        return $this->fetch();
    }
    public function aboutc()
    { 
        $id=input('id');
        $item=db('fuwushang')->where('id',$id)->find();
        $this->assign('item', $item);
        return $this->fetch();
    }

    public function alter()
    { 
        $item=db('wx_user')->where('openid',session('user')['openid'])->find();
        $this->assign('item', $item);
        if ($_POST) {
            $data=$_POST;
            $id=input('id');
            $up=db('wx_user')->where('id',$id)->update($data);
            if($up) {
            $this->success('修改成功','index/personal');
           
            } else {
            $this->error('修改失败','index/personal');
            
            }

        }
        return $this->fetch();
    }
    public function upuser()
    { 
        $id=input('id');
        if ($_POST) {
            $data=$_POST;
            db('wx_user')->where('id',$id)->update($data);
            $this->redirect('index/personal');
        }
        $this->assign('id', $id);
        return $this->fetch();
    }
    public function cdzs()
    { 
        return $this->fetch();
    }
    public function logout()
    { 
        session('user', null);
        session('[destroy]'); 
        $this->redirect('index');
    }
    public function csfw()
    { 
        return $this->fetch();
    }
    public function enter()
    { 
        if ($_POST) {
            $data=$_POST;
            $qiye=db('qy_luru')->insert($data);
            if ($qiye) {
                $this->success('提交成功');
            }else{
                $this->error('提交失败');
            }
        }
        return $this->fetch();
    }
    public function evaluate()
    { 
        $id=input('id');
        if ($_POST) {

            $user=db('dingdan')->where('id',$id)->find();
            $data['pj_nr']=$_POST['pingjia'];
            $data['pj_name']=$user['name'];
            $data['f_id']=$user['fw_id'];
            $data['fws_id']=$user['fws_id'];
            $upd=db('pingjia')->insert($data);
            $data1['zhuangtai']=3;
            $upd1=db('dingdan')->where('id',$id)->update($data1);
            $fws=db('fuwushang')->where('id',$user['fws_id'])->find();
            $data2['fw_pj']=($fws['fw_pj']+$_POST['xing'])/2;
            $upd2=db('fuwushang')->where('id',$user['fws_id'])->update($data2);
            if ($upd) {
                $this->success('评价成功','index/oder');
            }else{
                $this->error('未知错误');
            }
        }
        $item=db('dingdan')->where('id',$id)->find();
        $this->assign('item', $item);
        return $this->fetch();
    }
    public function fwpj()
    { 
        if ($_POST) {
            $data['neirong']=$_POST['neirong'];
            $data['name_id']=session('user')['openid'];
            $upd=db('tousu')->insert($data);
            if ($upd) {
                $this->success('提交成功','index/personal');
            }else{
                $this->error('未知错误');
            }

        }
        return $this->fetch();
    }
    public function gslb()
    { 
        $pagintor=db('fuwushang')->select();
        $this->assign('pagintor', $pagintor);
        return $this->fetch();
    }
    public function gyslb()
    { 
       $id=input('id');
        $pagintor=db('fuwushang')->where('biaoshi',2)->select();
        $this->assign('pagintor', $pagintor);
        $this->assign('id', $id);
        return $this->fetch();
    }
    public function login()
    { 
        return $this->fetch();
    }
    public function xiadan()
    { 
       if (session('user')) {
            $fws_id=input('fws_id');
            $fw_id=input('fw_id');
            $fws=db('fuwushang')->where('id',$fws_id)->find();
            $fw=db('fuwu')->where('id',$fw_id)->find();
            $user=db('wx_user')->where('openid',session('user')['openid'])->find();
            $data['name_id']=session('user')['openid'];
            $data['fw_id']=$fw_id;
            $data['fws_name']=$fws['name'];
            $data['fws_id']=$fws_id;
            $data['zhuangtai']=0;
            $dd=db('dingdan')->where($data)->find();
            if ($dd) {
                $this->success('请勿重复下单');
            }
            $data['fw_name']=$fw['name'];
            $data['name']=$user['z_name'];
            $data['tel']=$user['tel'];
            $data['add']=$user['add'];
            $data['fws_tel']=$fws['tel'];
            $data['create_time']=date("Y-m-d h:i:s");
            $ding=db('dingdan')->insert($data);
            if ($ding) {
                    $this->success('下单成功');
                }else{
                    $this->error('下单失败');
                }   
        }else{
            $this->error('请先登录','gslb/gslb');
        }
    }
    public function oder()
    { 

        $pagintor=db('dingdan')->where(['name_id'=>session('user')['openid']])->select();
        $this->assign('pagintor', $pagintor);
        $pagintor1=db('dingdan')->where(['zhuangtai'=>1,'name_id'=>session('user')['openid']])->select();
        $this->assign('pagintor1', $pagintor1);
        $pagintor2=db('dingdan')->where(['zhuangtai'=>2,'name_id'=>session('user')['openid']])->select();
        $this->assign('pagintor2', $pagintor2);
        return $this->fetch();
    }
    public function queren()
    { 
        $id=input('id');
        $data['zhuangtai']=2;
        $data['over_time']=date("Y-m-d h:i:s");
        $upd=db('dingdan')->where('id',$id)->update($data);
        if ($upd) {
             $this->redirect('index/oder');
         }else{
             $this->error('未知错误');
         }
    }

    public function personal()
    { 
        $item=db('wx_user')->where('openid',session('user')['openid'])->find();
        $this->assign('item', $item);
        return $this->fetch();
    }
    public function qbfl()
    { 
        $pagintor=db('fuwu')->where('f_id',0)->paginate(5);
        $this->assign('pagintor', $pagintor);
        return $this->fetch();
    }
    public function qyfw()
    { 
        $id=input('id');
        $fu=db('fuwu')->where('id',$id)->find();
        $pagintor=db('fuwu')->where('f_id',$id)->select();
        if (empty($pagintor['1'])) {
           $this->redirect('qyfw2',["id"=>$pagintor['0']['id']]);
        }
        $this->assign('pagintor', $pagintor);
        $this->assign('fu', $fu);
        return $this->fetch();
    }
    public function qyfw2()
    { 
        $id=input('id');
        $fu=db('fuwu')->where('id',$id)->find();
        $pagintor=db('fuwu')->where('f_id',$id)->select();
        $this->assign('pagintor', $pagintor);
        $this->assign('fu', $fu);
        return $this->fetch();
    }
    public function rczy()
    { 
        return $this->fetch();
    }
    public function sign()
    { 
        return $this->fetch();
    }
    public function wyfw()
    { 
        return $this->fetch();
    }
    public function xqym()
    { 
        $id=input('id');
        $fu=db('fuwu')->where('id',$id)->find();
        $pagintor=db('pingjia')->where('f_id',$id)->select();
        $this->assign('pagintor', $pagintor);
        $this->assign('fu', $fu);
        return $this->fetch();
    }
    public function yqfc()
    { 
        return $this->fetch();
    }
    public function zsyz()
    { 
        $xinxi=db('wzxx')->where('id',1)->find();
        $this->assign('xinxi', $xinxi);
        return $this->fetch();
    }
   
   

}
