<?php
namespace app\index\controller;

class Gslb extends Base
{
    public function gslb()
    {

        $appid='wxe9c43ae482bbfd0e';
        $redirect_uri = urlencode('http://www.buy297.com/index/gslb/oauth');
        $url="https://open.weixin.qq.com/connect/oauth2/authorize?appid={$appid}&redirect_uri={$redirect_uri}&response_type=code&scope=snsapi_userinfo&state=1#wechat_redirect";
        header("Location:".$url);exit();
    }
     public function oauth()
    {

            $appid = "wxe9c43ae482bbfd0e";
            $secret = "dc86ebadfeb1c37c61004b1dcae66e46";
            $code = $_GET["code"];

            $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$secret";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);
            $token = json_decode($output, true);

            $oauth2Url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$appid&secret=$secret&code=$code&grant_type=authorization_code";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $oauth2Url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);
            $oauth2 = json_decode($output, true);
        if(!isset($oauth2['openid'])) {
             $this -> gslb();
        }

            $access_token = $token["access_token"];
            $openid = $oauth2['openid'];

             $get_user_info_url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=$access_token&openid=$openid&lang=zh_CN";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $get_user_info_url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);
            $userinfo = json_decode($output, true);
            //print_r($userinfo);
            session('user', $userinfo);
            $users=db('wx_user')->where('openid',$userinfo['openid'])->find();
           
            if (!empty($users) & $users['add']!=null) {
                    $data['name']=$userinfo['nickname'];
                    $data['sex']=$userinfo['sex'];
                    $data['img']=$userinfo['headimgurl'];
                db('wx_user')->where('openid',$userinfo['openid'])->update($data);
                $this->redirect('index/personal');
            }elseif($users){
                $a=$users['id'];
                $this->redirect('index/upuser',['id' =>$a]);
            }else{
            $data['name']=$userinfo['nickname'];
            $data['openid']=$userinfo['openid'];
            $data['sex']=$userinfo['sex'];
            $data['img']=$userinfo['headimgurl'];
            $a=db('wx_user')->insertGetId($data);
            $this->redirect('index/upuser',['id' =>$a]);
            }


    }


}
