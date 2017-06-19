<?php
/**
 * Created by PhpStorm.
 * User: LYC
 * Date: 2017/6/20
 * Time: 0:54
 */
namespace app\admin\validate;

use think\Validate;

class Link extends Validate
{
    protected $rule=[
        'link_name'=>'require',
        'link_url'=>'require|url',
        'link_sort'=>'require|between:1,9999'
    ];
    protected $message=[
        'link_name.require'=>'请输入友链名称！',
        'link_url.require'=>'请输入友链地址！',
        'link_url.url'=>'链接地址格式不正确！',
        'link_sort.rrquire'=>'请输入排序！',
        'link_sort.between'=>'排序需要在1-9999之间！'
    ];
}