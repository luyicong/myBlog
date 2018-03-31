<?php
/**
 * Created by PhpStorm.
 * User: LYC
 * Date: 2017/5/20
 * Time: 15:26
 */
namespace app\admin\validate;

use think\Validate;

class Admin extends Validate
{
    //声明验证规则
    protected $rule = [
        'admin_username'=>'require',
        'admin_password'=>'require',
        // 'code'=>'require|captcha'
    ];
    //声明验证提示信息
    protected $message = [
        'admin_username.require'=>'请输入用户名!',
        'admin_password.require'=>'请输入密码!',
        // 'code.require'=>'请输入验证码!',
        // 'code.captcha'=>'验证码不正确!'
    ];
}
