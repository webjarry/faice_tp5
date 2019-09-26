<?php
namespace app\index\model;

use think\Model;

class Classify extends Model
{
    protected $autoWriteTimestamp = 'datetime';
    protected $updateTime = 'update_time';
    protected $createTime = 'create_time';

    /**
     * 获取商品列表
     */
    function showCategoryList ($data) {
        $result = $this->field('id, title')->select();

        if ($result) {
            return response($result);
        }

        return error(201, '没有查询到该商品!');
    }

}
