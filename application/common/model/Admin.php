<?php

namespace app\common\model;

use houdunwang\crypt\Crypt;
use think\Loader;
use think\Model;
use think\Validate;

class Admin extends Model
{
    protected $pk = 'admin_id';//声明主键
    // 设置当前模型对应的完整数据表名称
    protected $table = 'blog_admin';
    /**
     * 登录
     */
    public function login($data)
    {
        //1.执行验证
        $validate = Loader::validate('Admin');
        if(!$validate->check($data)){
            return ['valid'=>'0','msg'=>$validate->getError()];
        }
        //2.比对用户名和密码是否正确
        $userinfo = $this->where('admin_username',$data['admin_username'])->where('admin_password',Crypt::encrypt($data['admin_password']))->find();
        if(!$userinfo){
            //在数据库中匹配不到相关数据，用户名或密码不正确
            return ['valid'=>'0','msg'=>'用户名或密码不正确！'];
        }
        //3.将用户信息存入session中
        session('admin.admin_id',$userinfo['admin_id']);
        session('admin.admin_username',$userinfo['admin_username']);
        return ['valid'=>'1','msg'=>'登录成功！'];
    }
    /**
     * 修改管理原密码
     * @params $data post数据
     */
    public function updatepwd($data)
    {
        //1.执行验证
        $validate = new Validate([
            'admin_password'  => 'require',
            'new_password' => 'require',
            //确认密码与新密码比对是否相等
            'confirm_password'=>'require|confirm:new_password'
        ],[
            'admin_password.require'=>'请输入原始密码',
            'new_password.require'=>'请输入新密码',
            'confirm_password.require'=>'请输入确认密码',
            'confirm_password.confirm'=>'确认密码与新密码不一致',
        ]);
        if (!$validate->check($data)) {
            return ['valid'=>'0','msg'=>$validate->getError()];
        }
        //2.检查原始密码是否正确
        $userinfo = $this->where('admin_id',session('admin.admin_id'))->where('admin_password',Crypt::encrypt($data['admin_password']))->find();
        if(!$userinfo){
            return ['valid'=>'0','msg'=>'原始密码不正确'];
        }
        //3.执行修改密码
        $res = $this->where($this->pk,session('admin.admin_id'))->update(['admin_password' =>Crypt::encrypt($data['new_password']) ]);
        if($res){
            //修改成功
            return ['valid'=>'1','msg'=>'修改成功'];
        }else{
            //修改失败
            return ['valid'=>'0','msg'=>'修改失败'];
        }
    }
}
