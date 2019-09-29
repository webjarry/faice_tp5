<?php
namespace app\index\validate;

use think\Validate;

class Skin extends Validate
{
    protected $rule = [
        // 产品页数
        'pagenumber'      =>  'require',
        // 产品页数
        'page'      =>  'require',

    ];

    protected $message = [
        'page.require'  =>  '请选择您要查看的产品页数',
        'pagenumber.require'  =>  '请选择您要查看的产品每页个数',

    ];

    protected $scene = [
        'page'  =>  ['page', 'pagenumber'],
    ];

}