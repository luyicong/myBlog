<?php

namespace app\admin\controller;

use app\common\model\Admin;

class Entry extends Common
{
     // 后台首页
    public function index()
    {
        return $this->fetch();
    }
    //修改管理员密码
    public function updatepwd()
    {
        //判断post请求
        if(request()->isPost()){
            //把post请求交给模型处理
            $res = (new Admin())->updatepwd(input('post.'));

            if($res['valid']){
                //修改密码成功
                //清楚session
                session(null);
                $this->success($res['msg'],'admin/Entry/index');exit;
            }else{
                //修改密码失败
                $this->error($res['msg']);exit;
            }
        }
        return $this->fetch();
    }
    //推出登录
    public function logout(){
        session(null);
        $this->success('退出登录成功！','admin/Entry/index');exit;
    }
}