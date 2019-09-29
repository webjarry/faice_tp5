<?php
namespace app\index\controller;

use think\facade\Request;
class Footer extends Base
{
    public function lists ()
    {
        $response = self::common([
            'Validate'   =>  'Footer.type',
            'Model'      =>  'Footer'
        ]);
//        var_dump($response['data']);
//        die;

        return false === $response['status'] ? $response['data'] : $response['data']->lists(Request::param());
    }

}
