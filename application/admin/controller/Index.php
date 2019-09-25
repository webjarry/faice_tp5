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
//            if (isset($post['image']) && $res){
//                $file = request()->file('image');
//                $url = Upload::upload_file($file);
//                if ($url['status']==200){
//                    $data['index_id'] = $res['id'];
//                    $data['url'] = $url['data'];
//                    $user = new Image();
//                    $user->save($data);
//                }
//            }
        }
        return $response['data'];

    }
}
