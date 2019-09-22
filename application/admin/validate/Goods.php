<?php
namespace app\admin\validate;

use think\Validate;

class Goods extends Validate
{
    protected $rule = [
        // 产品页数
        'pagenumber'      =>  'require',
        // 产品页数
        'page'      =>  'require',
        // 产品ID
        'id'      =>  'require',
        // 产品标题
        'name'      =>  'require',
        // 产品英文标题
        'english'      =>  'require',
        // 副标题
        'subtitle'  =>  'require',
        // 产品规格
        'format'    =>  'require',
        // 产品质地
        'texture'   =>  'require',
        // 产品摘要
        'summary'   =>  'require',
        // 适用人群
        'crowd'     =>  'require',
        // 使用方法
        'method'    =>  'require',
        // 核心成分
        'ingredient'=>  'require',
        // 产品图片
        'picture'   =>  'require',
        // 产品价格
        'price'     =>  'require',
        // 更新时间
        'update_time'     =>  'require',
        // 创建时间
        'create_time'     =>  'require',
        // 产品状态
        'status'     =>  'require',
    ];

    protected $message = [
        'page.require'  =>  '请选择您要查看的产品页数',
        'pagenumber.require'  =>  '请选择您要查看的产品每页个数',
        'id.require'  =>  '请选择您要操作的商品',
        'name.require'   =>  '请输入您的产品名称',
        'english.require'   =>  '请输入您的英文名称',
        'subtitle.require'  =>  '请输入您的产品副名称!',
        'format.require'  =>  '请输入您的产品规格!',
        'texture.require'  =>  '请输入您的产品质地!',
        'summary.require'  =>  '请输入您的产品摘要!',
        'crowd.require'  =>  '请输入您产品的使用人群!',
        'method.require'  =>  '请输入您的产品的使用方法!',
        'ingredient.require'  =>  '请输入您的产品的核心成分!',
        'picture.require'  =>  '请上传您的产品主图!',
        'price.require'  =>  '请输入您的产品价格!'
    ];

    protected $scene = [
        'add' =>  ['name', 'english', 'subtitle', 'format', 'texture', 'summary', 'crowd', 'method', 'ingredient', 'picture', 'price'],
        'change' =>  ['id'],
        'page'  =>  ['page', 'pagenumber']
    ];

}