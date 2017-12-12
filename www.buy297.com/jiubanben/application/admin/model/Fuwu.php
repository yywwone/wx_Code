<?php


namespace app\admin\model;

use think\Model;

class Fuwu extends Model
{

    // 创建时间字段
    protected $createTime = 'create_time';
    // 更新时间字段
    protected $updateTime = 'update_time';

    // 设置字段类型
    protected $autoWriteTimestamp='datetime';


}