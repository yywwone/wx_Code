<?php
$url='http://lnmp1220.com/socketlog.php/index/index?id=250';
    
$content=request_url($url);


echo $content;

function request_url($url, $data=[]) {
    // 初始化CURL
    $ch=curl_init();
    // 设置请求发送地址
    curl_setopt($ch, CURLOPT_URL, $url);
    // 是否开启POST发送
    curl_setopt($ch, CURLOPT_POST, true);
    // 设置POST发送的数据
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    // 设置执行的返回类型
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // 执行并将结果返回
    $return=curl_exec($ch);
    if(!$return) {
        echo '错误编号:'.curl_errno($ch).'<br>';
        echo '错误信息:'.curl_error($ch).'<br>';
        exit;
    }
    // 关闭CURL
    curl_close($ch);
    return $return;
}
