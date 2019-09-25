<?php
namespace app\admin\controller;

use app\admin\model\Image;
use think\facade\Request;

class Index extends Base
{
    public function add ()
    {
        $response = self::common([
            'Validate'   =>  'Index.add',
            'Model'      =>  'Index'
        ]);
        $post = Request::param();

        if ($response['status']){
            $res = $response['data']->addGoodsItem($post);
            if (request()->file('image')){
                $arr = Upload::upload_file()->getData();
                if ($arr['status']==200 && $res){
                    $data['index_id'] = $res['id'];
                    $data['url'] = $arr['data'];
                    $user = new Image();
                    $user->save($data);
                }
            }
            return $res;
        }
        return $response['data'];

    }
}
