<?php
namespace app\admin\model;

use think\Model;

class Goods extends Model
{
    protected $autoWriteTimestamp = 'datetime';
    protected $updateTime = 'update_time';
    protected $createTime = 'create_time';
    /**
     * 获取商品列表
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

    /**
     * 添加商品
     */
    function addGoodsItem ($data) {
        $result = $this->insert($data);

        if ($result) {
            return respone();
        }

        return error(201, '产品添加失败!');
    }

    /**
     * 修改商品信息
     */
    function changeGoodsItem ($data) {

        $result = $this->where(['id' =>  $data['id']])->update($data);

        if ($result) {
            return respone();
        }
        
        return error(201, '产品更新失败，产品不存在或者没有更新任何内容!');
    }

    /**
     * 下架商品
     */
    function deleteGoodsItem ($data) {

        $result = $this->where(['id'   =>  $data['id']])->update(['status' => 0]);

        if ($result) {
            return respone(null, '产品删除成功!');
        }
        
        return error(201, '没有找到商品或者商品已经被删除!');
    }

    /**
     * 上架商品
     */
    function upGoodsItem ($data) {

        $result = $this->where(['id'   =>  $data['id']])->update(['status' => 1]);

        if ($result) {
            return respone(null, '产品上架成功!');
        }
        
        return error(201, '没有找到商品或者商品已经被删除!');
    }


}
