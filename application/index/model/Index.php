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
        $result = $this->where('type',$data['type'])->select();

        if ($result) {
            foreach ($result as $k=>$v){
                $img = new Image();
                $image = $img->where('index_id',$v['id'])->select();
                if (!empty($image->toArray())){
                    $result[$k]['picture'] = request()->domain(). $image[0]['url'];
                }
            }
            return response($result);
        }
        
        return error(201, '没有查询到该商品!');
    }
    

}
