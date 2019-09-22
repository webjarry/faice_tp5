<?php
namespace app\index\validate;

use think\Validate;

class Index extends Validate
{
    protected $rule = [
        // 产品页数
        'wisdom'      =>  'require',
        // 产品页数
        'homespa'      =>  'require',
        // 产品ID
        'maternal'      =>  'require',
        // 产品标题
        'footer'      =>  'require',
        // 产品英文标题
        'mp4'      =>  'require'
    ];

    protected $message = [
        'wisdom.require'  =>  '请选择您要查看的产品页数',
        'homespa.require'  =>  '请选择您要查看的产品每页个数',
        'maternal.require'  =>  '请选择您要操作的商品',
        'footer.require'   =>  '请输入您的产品名称',
        'mp4.require'   =>  '请输入您的英文名称'
    ];

    protected $scene = [
        'set' =>  ['name', 'english', 'subtitle', 'format', 'texture', 'summary', 'crowd', 'method', 'ingredient', 'picture', 'price']
    ];

}