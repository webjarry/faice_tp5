<?php
namespace app\index\model;

use think\Model;
use app\admin\model\SkinChild;

class Skin extends Model
{
    protected $autoWriteTimestamp = true;
    protected $updateTime = 'update_time';
    protected $createTime = 'create_time';

    /**
     * 获取商品列表
     */
    function infoGoodsItem ($data) {
        $result = $this->where(['id'   =>  $data['id']])->field('id,title')->find();
        if ($result) {
            return response($result);
        }

        return error(201, '没有查询!');
    }

    /**
     * 获取商品列表
     */
    function showGoodsList ($data) {

        $result = $this->order('sort','desc')->order('id','asc')->field('id,title')->paginate($data['pagenumber'], $data['page']);

        if ($result) {
            return response($result);
        }
        return error(201, '没有查询!');

    }

    /**
     * 获取商品列表
     */
    function showAllList ($data) {

        $result = $this->order('sort','desc')->order('id','asc')->field('id,title')->paginate($data['pagenumber'], $data['page']);

        if ($result) {
            foreach ($result as $k=>$v){
                $child = new SkinChild();
                $res = $child->where('skin_id',$v['id'])->select();
                $result[$k]['child'] = $res;
            }
            return response($result);
        }
        return error(201, '没有查询!');

    }


}
