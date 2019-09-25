<?php
namespace app\admin\model;

use think\Model;

class Image extends Model
{
    protected $autoWriteTimestamp = true;
    protected $updateTime = 'update_time';
    protected $createTime = 'create_time';
}
