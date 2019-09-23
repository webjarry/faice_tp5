<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// +----------------------------------------------------------------------
// | 应用设置
// +----------------------------------------------------------------------

return [

    'app_key' => 'ffd7f59c34cdb8f36c917bb5470e9e17',
    'tpl' => '34213', // 注册模板
    'tpl_code' => '#code#=',//注册模板参数

    // 默认输出类型
    'default_return_type'    => 'json',
    'api' => 'app\api\model\\',
    'host_img' => 'http://www.long.test/images',
    'wx' => [
        'app_id' => 'wx9bba6d5197363505',
        'app_secret' => '9d2c858370d62e2d02fa8eb3885cf655',
        'login_url' => 'https://api.weixin.qq.com/sns/jscode2session?appid=%s&secret=%s&js_code=%s&grant_type=authorization_code',

        'access_token' => 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=%s&secret=%s',

        // wx token salt
        'token_salt' => 'HeYinLong',
        'token_expire_in' => 7200,
        'pay_back_url' => 'http://www.long.test/api/v1/pay/notify',
    ],
    'wx_gzh' => [
        'app_id' => 'wx1475b8e9ed939ea7',
        'app_secret' => '93a723357f6ea70c9677ed0a04ee90eb',
        'redirect_uri' => 'http://47.75.205.126/api/v1/wx/test',
        'access_token' => 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=%s&secret=%s',
        'openid' => 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=%s&redirect_uri=%s&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect'
    ],
    'third' => [
        'token_expire_in' => 60,
    ]
];
