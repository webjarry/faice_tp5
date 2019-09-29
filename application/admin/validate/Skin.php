<?php
namespace app\admin\validate;

use think\Validate;

class Skin extends Validate
{
    protected $rule = [
        // 产品页数
        'id'      =>  'require',

        'title'      =>  'require',

    ];

    protected $message = [
        'id.require'  =>  '请选择id',
        'content.require'  =>  '请填写内容'
    ];

    protected $scene = [
        'add' =>  ['content'],
        'change' =>  ['id'],
    ];

}