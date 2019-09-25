<?php
namespace app\index\model;

use think\Model;
use think\Request;

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
            if ($result['picture']){
                $result['picture'] = request()->domain(). $result['picture'];
            }
            return response($result);
        }
        
        return error(201, '没有查询到该商品!');
    }
    
    /**
     * 获取商品列表
     */
    function showGoodsList ($data) {
        $result = $this->where('status=1')->field('id, name, subtitle, english, picture, status')->paginate($data['pagenumber'], $data['page']);

        if ($result) {
            foreach ($result as $k=>$v){
                if ($v['picture']){
                    $result[$k]['picture'] = request()->domain(). $v['picture'];
                }
            }
            return response($result);
        }

        return error(201, '没有查询到该商品!');
    }

}
