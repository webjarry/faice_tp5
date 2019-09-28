<?php
namespace app\admin\controller;

class Upload extends Base
{
    public static function  upload_file ($file)
    {
        if ($file !== NULL) {
            $info = $file->move('./uploads');
            if($info){
                return response( '/uploads/'.$info->getSaveName());
            }else{
                return error($file->getError());
            }
        }
        return error(201, '请选择需要上传的图片文件!');
    }

    public static function  upload_files ($files)
    {
        if ($files !== NULL) {
            $info = $files->move('./uploads');
            if($info){
                return response( '/uploads/'.$info->getSaveName());
            }else{
                return error($files->getError());
            }
        }
        return error(201, '请选择需要上传的图片文件!');
    }

}
