<?php
namespace app\index\controller;

use think\Request;
use think\Controller;
use think\Loader;

class Base extends Controller
{
    function common ($params) {
        
        $post = Request::instance()->param();

        $validate = $this->validate($post, $params['Validate']);

        if (true !== $validate) {
            return [
                'status'    =>  false,
                'data'      =>  error(201, $validate)
            ];
        }

        return [
            'status'    =>  true,
            'data'      =>  Loader::model($params['Model'])
        ];;

    }
}
