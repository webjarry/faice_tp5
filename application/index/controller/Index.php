<?php
namespace app\index\controller;

class Index extends Base
{
    public function index()
    {
        return view();
    }
    
    public function show ()
    {
        $respone = self::common([
            'Validate'   =>  'Index.page',
            'Model'      =>  'Index'
        ]);

        return false === $respone['status'] ? $respone['data'] : $respone['data']->show(Request::instance()->param());
    }

}
