<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, PATCH');
header('Access-Control-Allow-Headers: Authorization, Origin, X-Requested-With, X-Env, X-Request-Page, Content-Type, Accept');
header('Access-Control-Max-Age: 1728000');
if($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    die();
}
// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');
// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';

\think\Build::module('admin');
// define('BIND_MODULE','admin');
