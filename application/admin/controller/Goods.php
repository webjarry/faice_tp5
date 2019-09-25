<?php
namespace app\admin\controller;

use think\Facade\Request;

class Goods extends Base
{
    public function list ()
    {
        $respone = self::common([
            'Validate'   =>  'Goods.page',
            'Model'      =>  'Goods'
        ]);
//        var_dump($respone);
//        die;
        return $respone['status'] ? $respone['data']->showGoodsList(Request::param()) : $respone['data'];
    }

    public function info ()
    {
        $respone = self::common([
            'Validate'   =>  'Goods.change',
            'Model'      =>  'Goods'
        ]);

        return $respone['status'] ? $respone['data']->infoGoodsItem(Request::param()) : $respone['data'];
    }

    public function add ()
    {

        $respone = self::common([
            'Validate'   =>  'Goods.add',
            'Model'      =>  'Goods'
        ]);

        return false === $respone['status'] ? $respone['data'] : $respone['data']->addGoodsItem(Request::param());

    }

    public function set ()
    {
        $respone = self::common([
            'Validate'   =>  'Goods.change',
            'Model'      =>  'Goods'
        ]);

        return false === $respone['status'] ? $respone['data'] : $respone['data']->changeGoodsItem(Request::param());
    }

    public function del ()
    {
         $respone = self::common([
            'Validate'   =>  'Goods.change',
            'Model'      =>  'Goods'
        ]);

        return false === $respone['status'] ? $respone['data'] : $respone['data']->deleteGoodsItem(Request::param());
    }

    public function up ()
    {
         $respone = self::common([
            'Validate'   =>  'Goods.change',
            'Model'      =>  'Goods'
        ]);

        return false === $respone['status'] ? $respone['data'] : $respone['data']->upGoodsItem(Request::param());
    }
}
