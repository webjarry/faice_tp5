<?php
namespace app\admin\controller;

use think\Facade\Request;

class Admin extends Base
{
    public function login ()
    {
        $respone = self::common([
//            'Validate'   =>  'Admin.login',
            'Model'      =>  'Admin'
        ]);
        return $respone['status'] ? $respone['data']->login(Request::param()) : $respone['data'];
    }

    public function logout ()
    {
        $respone = self::common([
//            'Validate'   =>  'Admin.logout',
            'Model'      =>  'Admin'
        ]);

        return $respone['status'] ? $respone['data']->logout(Request::param()) : $respone['data'];
    }
}
