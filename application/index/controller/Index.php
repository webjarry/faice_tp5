<?php
namespace app\index\controller;

use think\facade\Request;
class Index extends Base
{
    public function lists ()
    {
        $response = self::common([
            'Validate'   =>  'Index.type',
            'Model'      =>  'Index'
        ]);
//        var_dump($response['data']);
//        die;

        return false === $response['status'] ? $response['data'] : $response['data']->lists(Request::param());
    }

}
