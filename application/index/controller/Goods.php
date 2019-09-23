<?php
namespace app\index\controller;

use think\Facade\Request;

class Goods extends Base
{
    public function list ()
    {
        $response = self::common([
            'Validate'   =>  'Goods.page',
            'Model'      =>  'Goods'
        ]);

        return $response['status'] ? $response['data']->showGoodsList(Request::param()) : $response['data'];
    }

    public function info ()
    {
        $response = self::common([
            'Validate'   =>  'Goods.change',
            'Model'      =>  'Goods'
        ]);

        return $response['status'] ? $response['data']->infoGoodsItem(Request::param()) : $response['data'];
    }
    
}
