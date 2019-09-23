<?php
namespace app\admin\controller;

use think\Facade\Request;

class Classify extends Base
{
    public function add () {
        $respone = self::common([
            'Validate'   =>  'Classify.add',
            'Model'      =>  'Classify'
        ]);

        return false === $respone['status'] ? $respone['data'] : $respone['data']->addClassify(Request::param());
    }

    public function set ()
    {
        $respone = self::common([
            'Validate'   =>  'Classify.id',
            'Model'      =>  'Classify'
        ]);

        return false === $respone['status'] ? $respone['data'] : $respone['data']->changeClassify(Request::param());
    }

    public function del ()
    {
         $respone = self::common([
            'Validate'   =>  'Classify.id',
            'Model'      =>  'Classify'
        ]);

        return false === $respone['status'] ? $respone['data'] : $respone['data']->deleteClassify(Request::instance()->param());
    }
}
