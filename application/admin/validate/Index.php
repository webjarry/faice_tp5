<?php
namespace app\admin\validate;

use think\Validate;

class Index extends Validate
{
    protected $rule = [
        // ID
        'id'      =>  'require',
        // 标题
        'title'      =>  'require',
        // 副标题
        'title1'      =>  'require',
        // 内容
        'content'    =>  'require'
    ];

    protected $message = [
        'id.require'  =>  '请选择您要操作的商品',
        'title.require'   =>  '请输入您的标题名称',
        'title1.require'   =>  '请输入您的副标题名称',
        'content.require'  =>  '请输入您的产品内容!'
    ];

    protected $scene = [
        'add' =>  [ 'content'],
        'change' =>  ['id'],
    ];

}