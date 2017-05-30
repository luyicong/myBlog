<?php

namespace app\common\model;

use think\Model;
use think\Validate;

class Tag extends Model
{
    protected $pk = 'tag_id';//主键
    protected $table = 'blog_tag';//生命操作的数据表

    /*
     * 添加标签
     */
    public function store($data){
        //1.执行验证
        $validate = new Validate([
            'tag_name'=>'require'
        ],[
            'tag_name.require'=>'请输入标签名称'
        ]);

        if(!$validate->check($data)){
            return ['valid'=>'0','msg'=>$validate->getError()];
        }
        //2.执行数据添加功能
        $res = $this->insert($data);
        if($res){
            //添加成功
            return ['valid'=>'1','msg'=>'添加成功！'];
        }else{
            //添加失败
            return ['valid'=>'0','msg'=>'添加失败！'];
        }
    }
    /**
     * 编辑标签
     */
    public function edit($id,$data){
        //1.执行验证
        $validate = new Validate([
            'tag_name'=>'require'
        ],[
            'tag_name.require'=>'请输入标签名称'
        ]);
        if(!$validate->check($data)){
            //验证不通过
            return ['valid'=>'0','msg'=>$validate->getError()];
        }
        //2.执行修改
        $res = $this->where('tag_id',$id)->update($data);

        if($res){
            return ['valid'=>'1','msg'=>'修改成功！'];
        }else{
            return ['valid'=>'0','msg'=>'修改失败!'];
        }
    }
}
