<?php

namespace app\admin\controller;

use app\common\model\Admin;
use houdunwang\crypt\Crypt;
use think\Controller;

class Login extends Controller
{
    //后台登录
    public function index()
    {
        //$encrypted = Crypt::encrypt('admin888');//加密 h3vPU8JGuF3VS/uxIpjRSw==
        //$encrypted = Crypt::decrypt('h3vPU8JGuF3VS/uxIpjRSw==');解密 admin888
        //判断post请求
        if(request()->isPost()){
            //把post数据交给模型处理
            $res = (new Admin())->login(input('post.'));

            if($res['valid']){
                //登录成功
                $this->success($res['msg'],'admin/Entry/index');
            }else{
                //登录失败
                $this->error($res['msg']);exit;
            }
        }
        //加载登录页面
        return $this->fetch();
    }
}
