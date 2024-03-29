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
        return false === $response['status'] ? $response['data'] : $response['data']->lists(Request::param());
    }

    public function images ()
    {
        $response = self::common([
            'Model'      =>  'Index'
        ]);
        return false === $response['status'] ? $response['data'] : $response['data']->images(Request::param());
    }

}
