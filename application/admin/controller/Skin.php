<?php
namespace app\admin\controller;

use app\admin\model\Image;
use think\facade\Request;

class Skin extends Base
{
    public function lists ()
    {
        $respone = self::common([
            'Model'      =>  'Skin'
        ]);
        return $respone['status'] ? $respone['data']->showGoodsList() : $respone['data'];
    }

    public function info ()
    {
        $respone = self::common([
            'Validate'   =>  'Skin.change',
            'Model'      =>  'Skin'
        ]);

        return $respone['status'] ? $respone['data']->infoGoodsItem(Request::param()) : $respone['data'];
    }

    public function add ()
    {

        $respone = self::common([
            'Validate'   =>  'Skin.add',
            'Model'      =>  'Skin'
        ]);

        return false === $respone['status'] ? $respone['data'] : $respone['data']->addGoodsItem(Request::param());

    }

    public function update ()
    {
        $respone = self::common([
            'Validate'   =>  'Skin.change',
            'Model'      =>  'Skin'
        ]);

        return false === $respone['status'] ? $respone['data'] : $respone['data']->changeGoodsItem(Request::param());
    }

    public function del ()
    {
        $respone = self::common([
            'Validate'   =>  'Skin.change',
            'Model'      =>  'Skin'
        ]);

        return false === $respone['status'] ? $respone['data'] : $respone['data']->deleteGoodsItem(Request::param());
    }



}
