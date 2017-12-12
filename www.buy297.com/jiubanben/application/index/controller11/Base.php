<?php
namespace app\index\controller;

use think\Controller;

class Base extends Controller
{

    // public function _initialize()
    // {
      
    //     if(!session('?admin')) {
    //         $this->redirect('login/login');
    //     }
    // }


    // // 文件上传
    // public function upload($name, $dir)
    // {
    //     $file=request()->file($name);
    //     if($file) {
    //         $info=$file->move('uploads'. DS .$dir);
    //         if($info) {
    //             $path=$dir.DS.$info->getsavename();
    //             return str_replace('\\', '/', $path);
    //         } else {
    //             $this->error($file->geterror()); 
    //         }
    //     } else {
    //         return false;
    //     }
    // }
}
