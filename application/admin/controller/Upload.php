<?php
namespace app\admin\controller;

use think\Facade\Request;

class Upload extends Base
{
    public function upload_file ()
    {
        $file = request()->file('image');

        if ($file !== NULL) {

            if($file){
                $info = $file->move(ROOT_PATH . '/public/' . DS . 'uploads');
                if($info){
                    return response(Request::domain() . '/uploads/' . $info->getSaveName());
                }else{
                    return error($file->getError());
                }
            }
        }
        
        return error(201, '请选择需要上传的图片文件!');

    }
}
