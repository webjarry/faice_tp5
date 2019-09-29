<?php
namespace app\admin\controller;

use app\admin\model\Image;
use think\facade\Request;

class SkinChild extends Base
{
    public function lists ()
    {
        $respone = self::common([
            'Model'      =>  'SkinChild'
        ]);
        return $respone['status'] ? $respone['data']->showGoodsList() : $respone['data'];
    }

    public function info ()
    {
        $respone = self::common([
            'Validate'   =>  'SkinChild.change',
            'Model'      =>  'SkinChild'
        ]);

        return $respone['status'] ? $respone['data']->infoGoodsItem(Request::param()) : $respone['data'];
    }

    public function add ()
    {

        $respone = self::common([
            'Validate'   =>  'SkinChild.add',
            'Model'      =>  'SkinChild'
        ]);

        return false === $respone['status'] ? $respone['data'] : $respone['data']->addGoodsItem(Request::param());

    }

    public function update ()
    {
        $respone = self::common([
            'Validate'   =>  'SkinChild.change',
            'Model'      =>  'SkinChild'
        ]);

        return false === $respone['status'] ? $respone['data'] : $respone['data']->changeGoodsItem(Request::param());
    }

    public function del ()
    {
        $respone = self::common([
            'Validate'   =>  'SkinChild.change',
            'Model'      =>  'SkinChild'
        ]);

        return false === $respone['status'] ? $respone['data'] : $respone['data']->deleteGoodsItem(Request::param());
    }



}
