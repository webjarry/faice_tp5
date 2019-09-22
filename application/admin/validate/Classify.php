<?php
namespace app\admin\validate;

use think\Validate;

class Classify extends Validate
{
    protected $rule = [
        // 产品页数
        'title'     =>  'require',
        // 产品页数
        'subtitle'  =>  'require',
        // 产品ID
        'content'   =>  'require',
        // 产品标题
        'directions'=>  'require',
        // 产品英文标题
        'thumb'     =>  'require',
        // 副标题
        'footer'    =>  'require',
        // id
        'id'        =>  'require'
    ];

    protected $message = [
        'id.require'  =>  '请选择您的分类',
        'title.require'  =>  '请输入您的分类标题',
        'subtitle.require'  =>  '请输入您的分类副标题',
        'content.require'  =>  '请输入您的分类详情',
        'directions.require'   =>  '请输入您的分类说明',
        'thumb.require'   =>  '请上传您的分类图片',
        'footer.require'  =>  '请输入您的底部标语!'
    ];

    protected $scene = [
        'add' =>  ['title', 'subtitle', 'content', 'directions', 'thumb', 'footer'],
        'id' =>  ['id']
    ];

}