<?php
namespace app\admin\model;

use think\Model;

class Footer extends Model
{
    protected $autoWriteTimestamp = 'datetime';
    protected $updateTime = 'update_time';
    protected $createTime = 'create_time';
    /**
     * 获取商品列表
     */
    function infoGoodsItem ($data) {
        if (isset($data['id'])){
            $result = $this->where(['id'   =>  $data['id']])->find();
        }elseif (isset($data['id'])){
            $result = $this->where(['type'   =>  $data['type']])->find();
        }else{
            $result = $this->find();
        }

        if ($result) {
            return response($result);
        }
        
        return error(201, '没有查询!');
    }
    
    /**
     * 获取商品列表
     */
    function showGoodsList () {

        $result = $this->select();

        if ($result) {
            return response($result);
        }
        return error(201, '没有查询!');

    }

    /**
     * 添加商品
     */
    function addGoodsItem ($data) {
        $result = $this->insert($data);

        if ($result) {
            return response($result);
        }

        return error(201, '产品添加失败!');
    }

    /**
     * 修改商品信息
     */
    function changeGoodsItem ($data) {

        $result = $this->where(['id' =>  $data['id']])->update($data);

        if ($result) {
            return response();
        }
        
        return error(201, '产品更新失败，产品不存在或者没有更新任何内容!');
    }

    /**
     * 下架商品
     */
    function deleteGoodsItem ($data) {

        $result = $this->where(['id'   =>  $data['id']])->delete();

        if ($result) {
            return response(null, '产品删除成功!');
        }
        
        return error(201, '没有找到商品或者商品已经被删除!');
    }

}
