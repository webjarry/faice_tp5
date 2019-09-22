<?php
namespace app\index\model;

use think\Model;

class Goods extends Model
{
    protected $autoWriteTimestamp = 'datetime';
    protected $updateTime = 'update_time';
    protected $createTime = 'create_time';
    /**
     * 获取商品详情
     */
    function infoGoodsItem ($data) {

        $result = $this->where(['id'   =>  $data['id']])->find();

        if ($result) {
            return respone($result);
        }
        
        return error(201, '没有查询到该商品!');
    }
    
    /**
     * 获取商品列表
     */
    function showGoodsList ($data) {

        $map = [
            'status'    =>  1
        ];
        
        $result = $this->field('id, name, subtitle, english, picture, status')->paginate($data['pagenumber'], $data['page']);

        if ($result) {
            return respone($result);
        }

        return error();
    }

}
