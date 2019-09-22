<?php
namespace app\admin\controller;

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

    public function add ()
    {

        $respone = self::common([
            'Validate'   =>  'Goods.add',
            'Model'      =>  'Goods'
        ]);

        return false === $respone['status'] ? $respone['data'] : $respone['data']->addGoodsItem(Request::instance()->param());

    }

    public function set ()
    {
        $respone = self::common([
            'Validate'   =>  'Goods.change',
            'Model'      =>  'Goods'
        ]);

        return false === $respone['status'] ? $respone['data'] : $respone['data']->changeGoodsItem(Request::instance()->param());
    }

    public function del ()
    {
         $respone = self::common([
            'Validate'   =>  'Goods.change',
            'Model'      =>  'Goods'
        ]);

        return false === $respone['status'] ? $respone['data'] : $respone['data']->deleteGoodsItem(Request::instance()->param());
    }

    public function up ()
    {
         $respone = self::common([
            'Validate'   =>  'Goods.change',
            'Model'      =>  'Goods'
        ]);

        return false === $respone['status'] ? $respone['data'] : $respone['data']->upGoodsItem(Request::instance()->param());
    }
}
