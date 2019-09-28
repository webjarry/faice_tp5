<?php
namespace app\admin\validate;

use think\Validate;

class Admin extends Validate
{
    protected $rule = [
        // ID
        'id'      =>  'require',
        // 标题
        'name'      =>  'require',
        // 副标题
        'password'      =>  'require',
        'token'      =>  'require'
    ];

    protected $message = [
        'id.require'  =>  '请选择您要操作的商品',
        'name.require'   =>  '请输入您的名称',
        'password.require'   =>  '请输入您的密码',
        'token.require'   =>  '缺少token',
    ];

    protected $scene = [
        'login' =>  [ 'name','password'],
        'logout' =>  ['token'],
    ];

}