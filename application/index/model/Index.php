<?php
namespace app\index\model;

use think\Model;

class Index extends Model
{
    protected $autoWriteTimestamp = 'datetime';
    protected $updateTime = 'update_time';
    protected $createTime = 'create_time';
    /**
     * 获取商品详情
     */
    function show ($data) {

        $result = $this->where(['id'   =>  $data['id']])->find();

        if ($result) {
            return respone($result);
        }
        
        return error(201, '没有查询到该商品!');
    }
    

}
