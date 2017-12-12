<?php
namespace app\admin\controller;

class Index extends Base
{
    public function index()
    {   

        return $this->fetch();
    }
    public function scdingdan()
    {   
       
        $id=input('id');
        $del=db('dingdan')->where('id',$id)->delete();
        if($del) {
            $this->success('删除成功','index/dingdan');
           
        } else {
            $this->error('删除失败','index/dingdan');
            
        }   
        
        return $this->fetch();
    }
    public function qiye_luru()
    {   
        $pagintor=db('qy_luru')->select();
        $this->assign('pagintor', $pagintor);
        return $this->fetch();
    }
    public function luru_xq()
    {   
        $id=input('id');
        $item=db('qy_luru')->where('id',$id)->find();
        $this->assign('item',$item);
        
        return $this->fetch();
    }
    public function sc_pj()
    {   
        $id=input('id');
        $del=db('pingjia')->where('id',$id)->delete();
        if($del) {
            $this->success('删除成功');
           
        } else {
            $this->error('删除失败');
            
        }
    }
    public function pinglun()
    {   
        $pagintor=db('pingjia')->select();
        $this->assign('pagintor', $pagintor);
        return $this->fetch();
    }
    public function qr_jd()
    {   
        $id=input('id');
        $data['zhuangtai']=1;
        $upd=db('dingdan')->where('id',$id)->update($data);
        if($upd) {
        $this->success('接单成功');
       
        } else {
        $this->error('接单失败');
        
        }
    }
    public function qr_wc()
    {   
        $id=input('id');
        $data['zhuangtai']=2;
        $upd=db('dingdan')->where('id',$id)->update($data);
       if($upd) {
        $this->success('已完成');
       
        } else {
        $this->error('未知错误');
        
        }
    }
    public function xuanze()
    {   $id=input('id');
        $ite=db('fuwushang')->where('id',$id)->find();
        $arr=explode(",", $ite['fu_id']);
        if ($_POST) {
           $data['fu_id']= implode(",", $_POST['iid']);
            $upd=db('fuwushang')->where('id',$id)->update($data);
            if($upd) {
            $this->success('修改成功','index/qiye');
           
            } else {
            $this->error('修改失败','index/qiye');
            
            }
        }
        $pagintor=db('fuwu')->where('f_id',0)->select();
        $this->assign('id', $id);
        $this->assign('arr', $arr);
        $this->assign('pagintor', $pagintor);
        return $this->fetch();
    }
    public function dingdan()
    {   
        $pagintor=db('dingdan')->select();
        $this->assign('pagintor', $pagintor);
        return $this->fetch();
    }
    public function dingdan0()
    {   
        $pagintor=db('dingdan')->where('zhuangtai',0)->select();
        $this->assign('pagintor', $pagintor);
        return $this->fetch();
    }
    public function dingdan1()
    {   
        $pagintor=db('dingdan')->where('zhuangtai',1)->select();
        $this->assign('pagintor', $pagintor);
        return $this->fetch();
    }
    public function dingdan2()
    {   
        $pagintor=db('dingdan')->where('zhuangtai',2)->select();
        $this->assign('pagintor', $pagintor);
        return $this->fetch();
    }
    public function wzxx()
    {   
        $item=db('wzxx')->where('id',1)->find();
        $this->assign('item', $item);
        if ($_POST) {
            $data=$_POST;
            $file = request()->file('lb_img1');
            if ($file) {
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                $lb_img1=$info->getFilename();
                $data['lb_img1']=date('Y'."m"."d",time()).'/'.$lb_img1;
                $fil='./public/Uploads/'.$item['lb_img1'];
                unlink($fil);
                 } 
            $file1 = request()->file('lb_img2');
            if ($file1) {
                $info1 = $file1->move(ROOT_PATH . 'public' . DS . 'uploads');
                $lb_img2=$info1->getFilename();
                $data['lb_img2']=date('Y'."m"."d",time()).'/'.$lb_img2;
                $fil1='./public/Uploads/'.$item['lb_img2'];
                unlink($fil1);
                 }
               
            $file2 = request()->file('db_img');
            if ($file2) {
                $info2 = $file2->move(ROOT_PATH . 'public' . DS . 'uploads');
                $db_img=$info2->getFilename();
                $data['db_img']=date('Y'."m"."d",time()).'/'.$db_img;
                $fil2='./public/Uploads/'.$item['db_img'];
                unlink($fil2);
                 }
                
            $file3 = request()->file('rz_img');
            if ($file3) {
                $info3 = $file3->move(ROOT_PATH . 'public' . DS . 'uploads');
                $rz_img=$info3->getFilename();
                $data['rz_img']=date('Y'."m"."d",time()).'/'.$rz_img;
                $fil3='./public/Uploads/'.$item['rz_img'];
                unlink($fil3);
                 }
            $upd=db('wzxx')->where('id',1)->update($data);
            if($upd) {
            $this->redirect('wzxx');
           
            } else {
            $this->error('修改失败','index/wzxx');
            
            }

        die();
        }

        return $this->fetch();
    }
    public function fuwu()
    {   
        $pagintor=db('fuwu')->where('id',20)->select();
        $pag['0']=db('fuwu')->where('id',33)->find();
        $pag['1']=db('fuwu')->where('id',34)->find();
        $pag['2']=db('fuwu')->where('id',35)->find();
        $pag['3']=db('fuwu')->where('id',36)->find();
        $this->assign('pagintor', $pagintor);
        $this->assign('pag', $pag);
        return $this->fetch();
    }
    public function addfuwu()
    {   
        $pagintor=db('fuwu')->where('f_id',0)->select();
        $this->assign('pagintor', $pagintor);
        if ($_POST) {
        $model=model('fuwu');
        $data=input('post.');
        $data1['fw_js']=$data['fu_js'];
        $data1['fw_lc']=$data['fu_lc'];
        $data1['name']=$data['name'];
           if ($data['erji']=='添加二级分类') {
               $data1['f_id']=$data['yiji'];
           }else{
                $data1['f_id']=$data['erji'];
           }
        if (empty($data1['name'])) {
            $this->error('名称不可为空');
        }
        $file = request()->file('img');
        if (empty($file)) {
            $this->error('图标不可为空');
        }
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        $img=$info->getFilename();
        $data1['img']=date('Y'."m"."d",time()).'/'.$img;

        $file1 = request()->file('image');
        if (empty($file1)) {
            $this->error('背景不可为空');
        }
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info1 = $file1->move(ROOT_PATH . 'public' . DS . 'uploads');
        $image=$info1->getFilename();
        $data1['image']=date('Y'."m"."d",time()).'/'.$image;
        if($model->save($data1)) {
            $this->success('添加成功');
           
        } else {
            $this->error('添加失败');
            
        }
        }
        return $this->fetch();
    } 
    public function upfuwu()
    {   
        $id=input('id');
        $item=db('fuwu')->where('id',$id)->find();
        if ($_POST){
            $file = request()->file('img');
            if (!empty($file)) {
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                $img=$info->getFilename();
                $data['img']=date('Y'."m"."d",time()).'/'.$img;
                $fil='./public/Uploads/'.$item['img'];
                unlink($fil);
                 }
            
            
            $file1 = request()->file('image');
            if (!empty($file1)) {
                // 移动到框架应用根目录/public/uploads/ 目录下
                $info1 = $file1->move(ROOT_PATH . 'public' . DS . 'uploads');
                $image=$info1->getFilename();
                $data['image']=date('Y'."m"."d",time()).'/'.$image;
                $fil='./public/Uploads/'.$item['image'];
                unlink($fil);

            }

            $data['name']=$_POST['name'];
            $upd=db('fuwu')->where('id',$id)->update($data);
            if($upd) {
            $this->success('修改成功','index/fuwu');
           
            } else {
            $this->error('修改失败','index/fuwu');
            
            }
        }
        $this->assign('item', $item);
        return $this->fetch();
    }
    public function up_fuwu()
    {   
        $id=input('id');
        $item=db('fuwu')->where('id',$id)->find();
        if ($_POST){
            $file = request()->file('img');
            if (!empty($file)) {
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                $img=$info->getFilename();
                $data['img']=date('Y'."m"."d",time()).'/'.$img;
                $fil='./public/Uploads/'.$item['img'];
                unlink($fil);
                 }
            $file1 = request()->file('image');
            if (!empty($file1)) {
                // 移动到框架应用根目录/public/uploads/ 目录下
                $info1 = $file1->move(ROOT_PATH . 'public' . DS . 'uploads');
                $image=$info1->getFilename();
                $data['image']=date('Y'."m"."d",time()).'/'.$image;
                $fil='./public/Uploads/'.$item['image'];
                unlink($fil);

            }
            $data['name']=$_POST['name'];
            $data['fw_js']=$_POST['fw_js'];
            $data['fw_lc']=$_POST['fw_lc'];
            // var_dump($data);
            // die();
            $upd=db('fuwu')->where('id',$id)->update($data);
            if($upd) {
            $this->success('修改成功','index/fuwu');
           
            } else {
            $this->error('修改失败','index/fuwu');
            
            }
        }
        $this->assign('item', $item);
        return $this->fetch();
    }
    public function qiye()
    {   
        $pagintor=db('fuwushang')->select();
        $this->assign('pagintor', $pagintor);
        return $this->fetch();
    }
    public function scqiye()
    {   
        $id=input('id');
        $s=db('fuwushang')->where('id',$id)->find();
        $a=db('fuwushang')->where('id',$id)->delete();
            $fil='./public/Uploads/'.$s['img'];
            if ($fil) {
                unlink($fil);
            }
            $fil1='./public/Uploads/'.$s['image'];
            if ($fil) {
                unlink($fil1);
            }
        if($a) {
            $this->success('删除成功','index/qiye');
           
        } else {
            $this->error('删除失败','index/qiye');
            
        }
    }
    public function upqiye()
    {   
        $id=input('id');
        $item=db('fuwushang')->where('id',$id)->find();
        if ($_POST) {
        $model=model('fuwushang');
        $data=input('post.');
        if (empty($data['name'])) {
            $this->error('名称不可为空');
        }
        if (empty($data['fuzeren'])) {
            $this->error('请填写负责人');
        }
        if (empty($data['tel'])) {
            $this->error('电话不可为空');
        }
        if (empty($data['add'])) {
            $this->error('请添加地址');
        }
        if (empty($data['biaoshi'])) {
            $this->error('请选择状态类型');
        }
        $file = request()->file('img');
        if (!empty($file)) {
            // 移动到框架应用根目录/public/uploads/ 目录下
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            $img=$info->getFilename();
            $data['img']=date('Y'."m"."d",time()).'/'.$img;
            $fil='./public/Uploads/'.$item['img'];
            unlink($fil);

        }else{
            $data['img']=$item['img'];
        }
        
        $file1 = request()->file('image');
        if (!empty($file1)) {
             // 移动到框架应用根目录/public/uploads/ 目录下
            $info1 = $file1->move(ROOT_PATH . 'public' . DS . 'uploads');
            $image=$info1->getFilename();
            $data['image']=date('Y'."m"."d",time()).'/'.$image;
            $fil='./public/Uploads/'.$item['image'];
            unlink($fil);
        }else{
            $data['image']=$item['image'];
        }
            $data['fw_pj']=$item['fw_pj'];
        $upd=db('fuwushang')->where('id',$id)->update($data);
        if($upd) {
            $this->success('修改成功','index/qiye');
           
        } else {
            $this->error('修改失败','index/qiye');
            
        }
        }

        $this->assign('item', $item);
        return $this->fetch();
    }
    public function addqiye()
    {   
        if ($_POST) {

        $model=model('fuwushang');
        $data=input('post.');
        if (empty($data['name'])) {
            $this->error('名称不可为空');
        }
        if (empty($data['fuzeren'])) {
            $this->error('请填写负责人');
        }
        if (empty($data['tel'])) {
            $this->error('电话不可为空');
        }
        if (empty($data['add'])) {
            $this->error('请添加地址');
        }
        if (empty($data['biaoshi'])) {
            $this->error('请选择状态类型');
        }
        $file = request()->file('img');
        if (empty($file)) {
            $this->error('图标不可为空');
        }
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        $img=$info->getFilename();
        $data['img']=date('Y'."m"."d",time()).'/'.$img;

        $file1 = request()->file('image');
        if (empty($file1)) {
            $this->error('背景不可为空');
        }
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info1 = $file1->move(ROOT_PATH . 'public' . DS . 'uploads');
        $image=$info1->getFilename();
        $data['image']=date('Y'."m"."d",time()).'/'.$image;
        if($model->save($data)) {
            $this->success('添加成功','index/qiye');
           
        } else {
            $this->error('添加失败','index/qiye');
            
        }
        }
        return $this->fetch();
    }
    public function scfuwu()
    {   
        $id=input('id');
        $s=db('fuwu')->where('id',$id)->find();
        $sele=db('fuwu')->where('f_id',$id)->select();
        if ($sele) {
          foreach ($sele as $value) {
            $select=db('fuwu')->where('f_id',$value['id'])->select();
                if ($select) {
                    foreach ($select as $value1) {
                        db('fuwu')->where('id',$value1['id'])->delete();
                        $fil='./public/Uploads/'.$value1['img'];
                        if ($fil) {
                            unlink($fil);
                        }
                        $fil1='./public/Uploads/'.$value1['image'];
                        if ($fil) {
                            unlink($fil1);
                        }
                    }
                }
                db('fuwu')->where('id',$value['id'])->delete();
                        $fil='./public/Uploads/'.$value['img'];
                        if ($fil) {
                            unlink($fil);
                        }
                        $fil1='./public/Uploads/'.$value['image'];
                        if ($fil) {
                            unlink($fil1);
                        } 
            }
        }
        $a=db('fuwu')->where('id',$id)->delete();
                        $fil='./public/Uploads/'.$s['img'];
                        if ($fil) {
                            unlink($fil);
                        }
                        $fil1='./public/Uploads/'.$s['image'];
                        if ($fil) {
                            unlink($fil1);
                        }

        if($a) {
            $this->success('删除成功');
           
        } else {
            $this->error('删除失败');
            
        }

        return $this->fetch();
    }

    public function xgusers()
    {   
        if ($_POST) {
            $pwds=md5($_POST['pwds']);
        $upd=db('users')->where('id',1)->update(['pwds' => $pwds]);
        if($upd) {
            $this->success('修改成功');
           
        } else {
            $this->error('修改失败');
            
        }
        }
        return $this->fetch();
    }
    public function sc_users()
    {   
        $id=input('id');
        $del=db('users')->where('id',$id)->delete();
        if($del) {
            $this->success('删除成功');
           
        } else {
            $this->error('删除失败');
            
        }
        return $this->fetch();
    }
    public function users()
    {   if (session('admin')['id']==1) {
        $pagintor=db('users')->field('id,name,s_name,create_time')->select();
        $this->assign('pagintor', $pagintor);
        return $this->fetch();
        }else{
            $this->error('权限不足');
        }
    }
    public function addusers()
    {   
        if (session('admin')['id']==1) {
        if ($_POST) {
            $data=input('post.');
            $data['pwds']=md5($data['pwds']);
            $data['create_time']=date('y-m-d h:i:s',time());
            $users=db('users')->insert($data);
        if($users) {
            $this->success('添加成功');
           
        } else {
            $this->error('添加失败');
            
        }
        }
        return $this->fetch();
        }else{
            $this->error('权限不足');
        }
    }
    public function add()
    {   
        $a=$_POST['name'];
        $pagintor=db('fuwu')->where('f_id',$a)->select();
        return $pagintor;
    }
   
}
