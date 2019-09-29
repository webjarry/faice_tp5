<?php
namespace app\admin\model;

use think\Model;

class Index extends Model
{
    protected $autoWriteTimestamp = true;
    protected $updateTime = 'update_time';
    protected $createTime = 'create_time';

    /**
     * 获取商品列表
     */
    public function lists ($data) {
        $result = $this->where('type',$data['type'])->select();


        if ($result) {
            $http = request()->domain();
            foreach ($result as &$v){
                $img = new Image();
                // 图片
                $image = $img->where('index_id',$v['id'])->where('type',0)->select();
//                if ($count != 0){
//                    $v['pictures'] = array_map(function ($img) {
//                        return request()->domain(). $img['url'];
//                    }, $image->toArray());
                foreach ($image as $k1=>$v1){
                    $image[$k1] = $http. $v1['url'];
                }
                $v['pictures'] = $image;
//                }
                // 视频
                $move = $img->where('index_id',$v['id'])->where('type',1)->select()->toArray();
                $count1 = count($move);
                $v['move'] = '';
                if ($count1 != 0){
                    $v['move'] = $http. $move[0]['url'];
                }
            }
            return response($result);
        }

        return error(201, '没有查询到该商品!');
    }

    /**
     * 添加商品
     */
    function addGoodsItem ($data) {
        $result = $this->create($data);
        if ($result) {
            return $result;
        }
        return error(201, '添加失败!');
    }

    /**
     * 修改商品信息
     */
    function changeGoodsItem ($data) {

        $result = $this->where(['id' =>  $data['id']])->update($data);

        if ($result) {
            return $result;
        }
        
        return error(201, '产品更新失败，产品不存在或者没有更新任何内容!');
    }

    /**
     * 下架商品
     */
    function deleteGoodsItem ($data) {

        $result = $this->where(['id'   =>  $data['id']])->update(['status' => 0]);

        if ($result) {

            return response(null, '产品删除成功!');
        }
        
        return error(201, '没有找到商品或者商品已经被删除!');
    }

    /**
     * 上架商品
     */
    function upGoodsItem ($data) {

        $result = $this->where(['id'   =>  $data['id']])->update(['status' => 1]);

        if ($result) {
            return response(null, '产品上架成功!');
        }
        
        return error(201, '没有找到商品或者商品已经被删除!');
    }


}
