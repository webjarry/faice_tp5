<?php
namespace app\admin\controller;

use app\admin\model\Image;
use think\facade\Request;

class Index extends Base
{
    public function add ()
    {
        $response = self::common([
            'Validate'   =>  'Index.add',
            'Model'      =>  'Index'
        ]);
        $post = Request::param();

        if ($response['status']){
            $res = $response['data']->addGoodsItem($post);
            if (request()->file('image')){
                $arr = Upload::upload_file()->getData();
                if ($arr['status']==200 && $res){
                    $data['index_id'] = $res['id'];
                    $data['url'] = $arr['data'];
                    $user = new Image();
                    $user->save($data);
                }
            }
            if (request()->file('move')){
                $arr = Upload::upload_file()->getData();
                if ($arr['status']==200 && $res){
                    $data['index_id'] = $res['id'];
                    $data['url'] = $arr['data'];
                    $data['type'] = 1;
                    $user = new Image();
                    $user->save($data);
                }
            }
            return $res;
        }
        return $response['data'];

    }
    public function update ()
    {
        $response = self::common([
            'Validate'   =>  'Index.update',
            'Model'      =>  'Index'
        ]);
        $post = Request::param();

        if ($response['status']){
            $res = $response['data']->changeGoodsItem($post);
            if (request()->file('image')){
                $user = new Image();
                $img = $user->where('index_id='.$post['id'])->find();
                unlink('.'.$img['url']);
                $arr = Upload::upload_file()->getData();
                if ($arr['status']==200 && $res){
                    $data['url'] = $arr['data'];
                    $user->where('index_id='.$post['id'])->update($data);
                }
            }
            if (request()->file('move')){
                $user = new Image();
                $img = $user->where('index_id='.$post['id'])->find();
                unlink('.'.$img['url']);
                $arr = Upload::upload_file()->getData();
                if ($arr['status']==200 && $res){
                    $data['url'] = $arr['data'];
                    $user->where('index_id='.$post['id'])->update($data);
                }
            }
            return $res;
        }
        return $response['data'];

    }
}
