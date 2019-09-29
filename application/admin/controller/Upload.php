<?php
namespace app\admin\controller;

use app\admin\model\Images;
use think\facade\Request;
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

    public static function  upload_files ()
    {
        $files = request()->file('images');
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

    public static function  upload_type ()
    {
        $files = request()->file('images');
        $post = Request::param();
        if ($files !== NULL) {
            $info = $files->move('./uploads');
            if($info){
                $image = new Images();
                $post['url'] = '/uploads/'.$info->getSaveName();
                $res = $image->save($post);
                return response($res);
            }else{
                return error($files->getError());
            }
        }
        return error(201, '请选择需要上传的图片文件!');
    }

    public static function  update_type ()
    {
        $files = request()->file('images');
        $post = Request::param();
        if ($files !== NULL) {
            $info = $files->move('./uploads');
            if($info){
                $image = new Images();

                $img = $image->where('id='.$post['id'])->find();
                unlink('.'.$img['url']);

                $post['url'] = '/uploads/'.$info->getSaveName();
                $res = $image->where('id',$post['id'])->save();

                return response($res);
            }else{
                return error($files->getError());
            }
        }
        return error(201, '请选择需要上传的图片文件!');
    }

    public static function  del_type ()
    {
        $post = Request::param();
        $image = new Images();

        $img = $image->where('id='.$post['id'])->find();
        unlink('.'.$img['url']);

        $res = $image->where('id='.$post['id'])->delete();
        return response($res);
    }

}
