<?php
namespace app\admin\controller;

use think\Controller;
class Login extends Controller
{
    public function login() 
    {
        if ($_POST) {
           $where=['name'=>$_POST['name'], 'pwds'=>md5($_POST['pwds'])];
           $users=db('users')->field('id,name,s_name')->where($where)->find();
           if ($users) {
               session('admin', $users);
                $this->success('登陆成功','index/index');
           }else{
                $this->error('用户名或密码错误');
           }
        }
        return $this->fetch();
    }

    

    public function logout()
    {
        session('admin', null);
        session('[destroy]'); 
        $this->redirect('login');
    }

    public function _empty()
    {
        $this->redirect('login');
    }
}
