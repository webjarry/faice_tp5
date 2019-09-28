<?php
namespace app\index\model;

use think\Model;
use app\admin\model\Image;

class Index extends Model
{
    protected $autoWriteTimestamp = true;
    protected $updateTime = 'update_time';
    protected $createTime = 'create_time';
    /**
     * 获取商品详情
     */
    function lists ($data) {
        $result = $this->where('type',$data['type'])->where('status',1)->select();


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
    

}
