<?php
namespace app\index\controller;

use app\admin\model\Image;
use think\facade\Request;

class Skin extends Base
{
    public function lists ()
    {
        $response = self::common([
            'Model'      =>  'Skin'
        ]);
        return $response['status'] ? $response['data']->showGoodsList(Request::param()) : $response['data'];
    }

    public function all ()
    {
        $response = self::common([
            'Model'      =>  'Skin'
        ]);
        return $response['status'] ? $response['data']->showAllList(Request::param()) : $response['data'];
    }


}
