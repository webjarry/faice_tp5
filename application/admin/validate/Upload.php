<?php
namespace app\admin\validate;

use think\Validate;

class Upload extends Validate
{
    protected $rule = [
        'fileimage'     =>  'image',
        'video'     =>  'require'
    ];

    protected $message = [
        'image.image'   =>  '请选择需要上传的图片文件',
        'video.require'  =>  '请选择需要上传的视频文件!'
    ];

    protected $scene = [
        'image' =>  ['fileimage'],
        'video' =>  ['video']
    ];

}