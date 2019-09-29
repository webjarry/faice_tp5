<?php
namespace app\admin\validate;

use think\Validate;

class Footer extends Validate
{
    protected $rule = [
        // 产品页数
        'id'      =>  'require',

        'type'      =>  'require',

        // 产品状态
        'content'     =>  'require',
    ];

    protected $message = [
        'id.require'  =>  '请选择底部',
        'type.require'  =>  '缺少type',
        'content.require'  =>  '请填写内容'
    ];

    protected $scene = [
        'add' =>  ['content','type'],
        'change' =>  ['id']
    ];

}