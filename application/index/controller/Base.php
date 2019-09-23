<?php
namespace app\index\controller;

use think\Facade\Request;
use think\Controller;
use think\Facade\App;

class Base extends Controller
{

    function common ($params) {
        
        $post = Request::param();

        $validate = true;
        if ($params['Validate']){
            $validate = $this->validate($post, $params['Validate']);
        }

        if (true !== $validate) {
            return [
                'status'    =>  false,
                'data'      =>  error( 201,'验证失败',$validate)
            ];
        }

        return [
            'status'    =>  true,
            'data'      =>  App::model($params['Model'])
        ];

    }
}
