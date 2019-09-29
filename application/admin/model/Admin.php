<?php
namespace app\admin\model;

use think\Model;
use think\facade\Cache;

class Admin extends Model
{
    protected $autoWriteTimestamp = true;
    protected $updateTime = 'update_time';
    protected $createTime = 'create_time';

    /**
     * 获取商品列表
     */
    public function login ($data) {
        $result = $this->where('name',$data['name'])->where('password',$data['password'])->find();
        if ($result) {
            $token = md5($result['name'].rand(1, 100));
            Cache::set($token,$result,3600*24);
            return response($token);
        }

        return error(201, '登陆失败!');
    }

    /**
     * 添加商品
     */
    function logout ($data) {

        if (Cache::has($data['token'])) {
            $result = Cache::rm($data['token']);
            return  response($result);
        }
        return response(null);
    }

}
