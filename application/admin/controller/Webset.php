<?php

namespace app\admin\controller;

use think\Controller;

class Webset extends Controller
{
    //首页
    public function index(){
        $field = db('webset')->select();
        $this->assign("field",$field);
        return $this->fetch();
    }
    //编辑配置
    public function edit(){
        if(request()->isPost()){
           $res = (new \app\common\model\Webset())->edit(input('post.'));
            if($res['valid']){
                //成功
                $this->success($res['msg'],'index',$res['data']);exit;
            }else{
                //失败
                $this->error($res['msg'],'index',$res['data']);exit;
            }
        }
    }
}
