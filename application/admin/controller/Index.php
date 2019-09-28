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
            if (request()->file('image') && $res){
                $arr = Upload::upload_file(request()->file('image'))->getData();
                if ($arr['status']==200 && $res){
                    $data['index_id'] = $res['id'];
                    $data['url'] = $arr['data'];
                    $user = new Image();
                    $user->save($data);
                }
            }
            if (request()->file('images') && $res){
                $arr = Upload::upload_file()->getData();
                if ($arr['status']==200 && $res){
                    $data['index_id'] = $res['id'];
                    $data['url'] = $arr['data'];
                    $user = new Image();
                    $user->save($data);
                }
            }
            if (request()->file('move') && $res){
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
            'Validate'   =>  'Index.change',
            'Model'      =>  'Index'
        ]);
        $post = Request::param();

        if ($response['status']){
            $res = $response['data']->changeGoodsItem($post);
            if (request()->file('image') && $res){
                $user = new Image();
                $img = $user->where('index_id='.$post['id'])->find();
                unlink('.'.$img['url']);
                $arr = Upload::upload_file()->getData();
                if ($arr['status']==200 && $res){
                    $data['url'] = $arr['data'];
                    $user->where('index_id='.$post['id'])->update($data);
                }
            }
            if (request()->file('move') && $res){
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
    public function lists ()
    {
        $response = self::common([
            'Validate'   =>  'Index.type',
            'Model'      =>  'Index'
        ]);
        return false === $response['status'] ? $response['data'] : $response['data']->lists(Request::param());
    }
    public function del ()
    {
        $respone = self::common([
            'Validate'   =>  'Index.change',
            'Model'      =>  'Index'
        ]);

        return false === $respone['status'] ? $respone['data'] : $respone['data']->deleteGoodsItem(Request::param());
    }

    public function up ()
    {
        $respone = self::common([
            'Validate'   =>  'Index.change',
            'Model'      =>  'Index'
        ]);

        return false === $respone['status'] ? $respone['data'] : $respone['data']->upGoodsItem(Request::param());
    }

}
