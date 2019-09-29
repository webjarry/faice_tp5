<?php
namespace app\admin\controller;

use think\Facade\Request;

class Footer extends Base
{
    public function lists ()
    {
        $respone = self::common([
            'Model'      =>  'Footer'
        ]);
        return $respone['status'] ? $respone['data']->showGoodsList() : $respone['data'];
    }

    public function info ()
    {
        $respone = self::common([
            'Model'      =>  'Footer'
        ]);

        return $respone['status'] ? $respone['data']->infoGoodsItem(Request::param()) : $respone['data'];
    }

    public function add ()
    {

        $respone = self::common([
            'Validate'   =>  'Footer.add',
            'Model'      =>  'Footer'
        ]);

        return false === $respone['status'] ? $respone['data'] : $respone['data']->addGoodsItem(Request::param());

    }

    public function update ()
    {
        $respone = self::common([
            'Validate'   =>  'Footer.change',
            'Model'      =>  'Footer'
        ]);

        return false === $respone['status'] ? $respone['data'] : $respone['data']->changeGoodsItem(Request::param());
    }

    public function del ()
    {
         $respone = self::common([
            'Validate'   =>  'Footer.change',
            'Model'      =>  'Footer'
        ]);

        return false === $respone['status'] ? $respone['data'] : $respone['data']->deleteGoodsItem(Request::param());
    }

}
