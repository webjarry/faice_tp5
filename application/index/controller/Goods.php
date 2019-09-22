<?php
namespace app\index\controller;

use think\Loader;
use think\Request;

class Goods extends Base
{
    public function list ()
    {
        $respone = self::common([
            'Validate'   =>  'Goods.page',
            'Model'      =>  'Goods'
        ]);

        return false === $respone['status'] ? $respone['data'] : $respone['data']->showGoodsList(Request::instance()->param());
    }

    public function info ()
    {
        $respone = self::common([
            'Validate'   =>  'Goods.change',
            'Model'      =>  'Goods'
        ]);

        return false === $respone['status'] ? $respone['data'] : $respone['data']->infoGoodsItem(Request::instance()->param());
    }
    
}
