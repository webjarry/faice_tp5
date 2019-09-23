<?php
namespace app\admin\model;

use think\Model;

class Classify extends Model
{
    protected $autoWriteTimestamp = 'datetime';
    protected $updateTime = 'update_time';
    protected $createTime = 'create_time';
    /**
     * 添加分类
     */

     public function addClassify ($data) {
        $result = $this->insert($data);

        if ($result) {
            return response($result);
        }
        
        return error(201, '没有查询到该商品!');
     }

    /**
     * 修改分类
     */
    function changeClassify ($data) {

        $result = $this->where(['id' =>  $data['id']])->update($data);

        if ($result) {
            return response();
        }
        
        return error(201, '产品更新失败，产品不存在或者没有更新任何内容!');
    }

    /**
     * 删除分类
     */
    function deleteClassify ($data) {

        $result = $this->where(['id'   =>  $data['id']])->delete();

        if ($result) {
            return response(null, '产品删除成功!');
        }
        
        return error(201, '没有找到商品或者商品已经被删除!');
    }
}
