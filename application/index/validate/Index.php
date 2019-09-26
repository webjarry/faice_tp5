<?php
namespace app\index\validate;

use think\Validate;

class Index extends Validate
{
    protected $rule = [
        // 产品页数
        'type'      =>  'require',
    ];

    protected $message = [
        'type.require'  =>  '请选择您要查看的产品页数',
    ];

    protected $scene = [
        'type' =>  ['type']
    ];

}